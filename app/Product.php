<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $fillable = [
        'name', 'price', 'description',
        'discount', 'tax', 'category_id',
    ];

    public function category()
    {
    	return $this->belongsTo('App/Category');
    }

    public function scopeFindOneById($query, $productId)
    {
    	return $query
    	    ->where('id', $productId)
    	    ->first();
    }

    public function scopeFindAll($query)
    {
        return $query
            ->orderBy('id', 'DESC')
            ->get();
    }
}
