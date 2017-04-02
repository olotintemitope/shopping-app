<?php

namespace App\Http\Controllers;

use Auth;
use Cloudder;
use Stripe\Stripe;
use Stripe\Customer;
use Stripe\Charge;
use App\Product;
use App\PointWallet;
use App\Transaction;
use App\PaymentGateway;
use Illuminate\Http\Request;
use App\Http\Requests\ConfigPaymentRequest;
use App\Http\Requests\UpdatePaymentRequest;

class PaymentController extends Controller
{
    public function payWithStrip(Request $request)
    {
        $amount = $_POST['amount'];
        $token  = $_POST['stripeToken'];
        $email = $_POST["stripeEmail"];
        $paymentGatewayId = $_POST['payment_gateway_id'];

        //Set the Stripe Api Key
        $stripe = [
            "secret_key"      => env('STRIPE_SECRET'),
            "publishable_key" => env('STRIPE_KEY')
        ];
        // set api key
        Stripe::setApiKey($stripe['secret_key']);
        // create the customer
        $customer = Customer::create([
            'email' => $email,
            'source'  => $token
        ]);
        // charge the customer
        $charge = Charge::create([
            'customer' => $customer->id,
            'amount'   => $amount,
            'currency' => 'krw'
        ]);

        //dd($charge);
        //Transactions from the charge object
        $transactionId = $charge->balance_transaction;
        $transactionAmount = $charge->amount;
        $transactionCurrency = $charge->currency;
        $transactionStatus = $charge->paid;
        $multiplier = 100000; // 1 krw = 1 point and payment is made in 100's

        // interact with the point wallet
        if (! is_null(Auth::user())) {
            $pointWallet = PointWallet::findOneByUser(Auth::user()->id);
    
            if ($pointWallet instanceof PointWallet) {
                $pointWallet->update([
                    'user_id' => Auth::user()->id, 
                    'payment_gateway_id' => $paymentGatewayId, 
                    'point' => $pointWallet->point + ($amount / $multiplier),
                ]);
            } else {
                PointWallet::create([
                    'user_id' => Auth::user()->id, 
                    'payment_gateway_id' => $paymentGatewayId, 
                    'point' => (int) ($amount / $multiplier),
                ]);
            }
        }
        // find the product details
        $productId = $_POST['product_id']; // product id
        $product = Product::findOneById($productId);

        if ($product instanceof Product) {
            // add the transaction history
            $transaction = Transaction::create([
                'currency' => 'KRW', 
                'item_name' => $product->name, 
                'item_quantity' => 1, 
                'item_price' => $product->price, 
                'email' => $email, 
                'phone' => null, 
                'status' => $transactionStatus ? 1 : 0, 
                'payment_gateway_id' => $paymentGatewayId, 
                'product_id' => $product->id, 
                'user_id' => is_null(Auth::user()) ? null : Auth::user()->id,
                'transaction_id' => $charge->balance_transaction
            ]);

            // store the purchase in the order table
        }
    }

	public function deletePayment(Request $request, $id)
    {
    	$paymentGateway = PaymentGateway::findOneById($id);

    	if ($paymentGateway instanceof PaymentGateway) {
    		$paymentGateway->forceDelete();

    		return redirect()->route('list_payments');
    	}

    	abort(404);
    }

	public function updatePayment(UpdatePaymentRequest $request, $id)
	{
		$paymentGateway = PaymentGateway::findOneById($id);

		if ($paymentGateway instanceof PaymentGateway) {
			$name = $request->name;
	    	$clientId = $request->client_id;
	    	$clientSecret = $request->client_secret;
	    	$callbackUrl = $request->callback_url;
	    	$paymentGatewayLogo = $request->file('photo');

	    	if ($paymentGatewayLogo != '') {
	    		$paymentGateway->logo = $this->handleCloudinaryFileUpload($request);
	    	}

	    	$paymentGateway->name = $name;
	    	$paymentGateway->client_id = $clientId;
	    	$paymentGateway->client_secret = $clientSecret;
	    	$paymentGateway->callback_url = $callbackUrl;

	    	$paymentGateway->save();

	    	if ($paymentGateway instanceof PaymentGateway) {
	    		return redirect()->route('list_payments');
	    	}
		}

		abort(404);
	}

	public function editPayment(Request $request, $id)
	{
		$paymentGateway = PaymentGateway::findOneById($id);

		if ($paymentGateway instanceof PaymentGateway) {
			return view('dashboard.payment.edit_payment', compact('paymentGateway'));
		}

		abort(401);
	}

	public function listpaymentGateway()
	{
		$paymentGateways = PaymentGateway::findAll();

		if ($paymentGateways->count() > 0) {
			return view('dashboard.payment.list_payments', compact('paymentGateways'));
		}

		abort(401);
	}

    public function addPaymentConfig(ConfigPaymentRequest $request)
    {
    	$name = $request->name;
    	$clientId = $request->client_id;
    	$clientSecret = $request->client_secret;
    	$callbackUrl = $request->callback_url;
    	$paymentGatewayLogo = $request->file('photo');

    	if ($paymentGatewayLogo != '') {
    		$paymentGateway = PaymentGateway::create([
    			'name' => $name, 
    			'logo' => $this->handleCloudinaryFileUpload($request), 
    			'client_id' => $clientId,
    			'client_secret' => $clientSecret, 
    			'callback_url' => $callbackUrl,
    		]);

    		if ($paymentGateway instanceof PaymentGateway) {
    			return redirect()->route('list_payments');
    		}

    		abort(503);
    	}
    }

    public function loadPaymentConfigForm()
    {
    	return view('dashboard.payment.add_payment');
    }

    /**
     * This method upload image to cloudinary.
     *
     * @param $request
     *
     * @return picture url
     */
    public function handleCloudinaryFileUpload($request)
    {
        $avatar = $request->file('photo');
        $avatar = Cloudder::upload($avatar, null, [
            'format' => 'jpg',
            'crop'   => 'fill',
            'width'  => '',
            'height' => '',
        ]);
        return  Cloudder::getResult()['url'];
    }
}
