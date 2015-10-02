<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Product_meta_detail extends Model {

	protected $fillable = [

           'definer',
           'key_words',
           'long_description',

    ];

    public function product()
    {
        return $this->hasOne('App\Product');
    }

}
