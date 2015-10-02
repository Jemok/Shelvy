<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Wish_product extends Model {

    protected $fillable = [


        'product_id',
        'product_name',
        'product_price',
        'product_description',
        'image',
        'user_id',
        'quantity',
        'session_id',
        'ip_address'

    ];

public function user()
{
    return $this->belongsTo('App\User');
}

public function product()
{
    return $this->belongsTo('App\Product');
}

}
