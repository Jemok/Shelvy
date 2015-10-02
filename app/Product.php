<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Session;

class Product extends Model {

    protected $fillable = [

        'product_name',
        'product_price',
        'product_description',
        'thumbnail',
        'thumbnail_small'




    ];

	public function shop(){

        return $this->belongsTo('App\Shop');
    }

    public function meta_product()
    {
        return $this->hasOne('App\Product_meta_detail');
    }

    public function images()
    {
        return $this->hasMany('App\Product_image');
    }

    public function wishes()
    {
        return $this->hasMany('App\Wish_product');
    }

    public function carts()
    {
        return $this->hasMany('App\Cart');
    }

   // public function main_image()
    //{
      //  return $this->hasOne('App\Product_image');
    //}

    public function get_max_id($id)
    {
       // $shop = Shop::find($id)->first();

        $shop = new Shop;

        $shop = $shop->whereId($id)->first();

        $productId = $shop->products()->max('id');

       Session::put('Pid', $productId);

        return $productId;
    }




}
