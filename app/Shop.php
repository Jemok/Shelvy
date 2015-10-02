<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 6/22/15
 * Time: 5:33 PM
 */

namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;






class Shop extends Eloquent {

    protected $fillable = [

        'shop_name',
        'shop_description',
        'slug',
        'shop_location',
        'shop_building',
        'shop_category',
        'shop_street',
        'shop_image'
     ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function products()
    {
        return $this->hasMany('App\Product');
    }


    public function category()
    {
        return $this->hasMany('App\Category');
    }

}