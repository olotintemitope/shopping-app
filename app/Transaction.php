<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    //
    protected $fillable = [
        'currency', 'item_name', 'item_quantity', 
        'item_price', 'email', 'phone', 'status', 
        'payment_gateway_id', 'product_id', 'user_id',
    ];

    public function paymentGateway()
    {
    	return $this->belongsTo('App\PaymentGateway');
    }

    public function product()
    {
    	return $this->belongsTo('App/Product');
    }

    public function user()
    {
    	return $this->belongsTo('App/User');
    }
}
