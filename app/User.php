<?php namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract {

	use Authenticatable, CanResetPassword;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['firstName','lastName','phoneNumber','location','nationality','preferredShop','interest','email', 'password'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = ['password', 'remember_token'];

    public function fullName()
    {
        return $this->firstName . ' ' . $this->lastName;
    }


    public function shops()
    {
        return $this->hasMany('App\Shop');
    }

    public function wishes()
    {
        return $this->hasMany('App\Wish_product');
    }

    public function carts()
    {
        return $this->hasMany('App\Cart');
    }








}
