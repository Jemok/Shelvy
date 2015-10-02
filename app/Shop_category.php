<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Shop_category extends Model {

	protected $fillable = [
      'category_name',
      'category_description'
    ];

}
