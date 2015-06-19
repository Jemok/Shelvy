<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/



Route::get('/', [
    'as' => 'home',
    'uses' => 'PagesController@home'
]);


/**
 * Registration
 */
//Route::get('register', [
  // 'as' => 'register_path',
   // 'uses' => 'RegistrationController@create'
//]);

Route::post('register', [
    'as' => 'register_path',
    'uses' => 'RegistrationController@store'
]);


Route::get('home', 'HomeController@index');

Route::get('register1', 'PagesController@register');

Route::get('login', 'PagesController@login');

Route::get('dashboard', 'PagesController@show_dashboard');

Route::get('shop', 'PagesController@show_shop');

Route::get('settings', 'PagesController@show_settings');

Route::get('about_shop', 'PagesController@about_shop');

Route::get('help', 'PagesController@show_help');

Route::get('account', 'PagesController@create_account');

Route::get('new_login', 'PagesController@new_login');

Route::get('search', 'PagesController@show_search');

Route::get('product', 'PagesController@show_product');

Route::get('customer_account', 'PagesController@customer_account');

Route::get('uploader', 'PagesController@upload_image');

Route::get('customer_registration', 'PagesController@register_customer');

Route::get('search_all', 'PagesController@search_all');

Route::get('customer_login', 'PagesController@customer_login');

Route::get('customer_account', 'PagesController@show_customer_account');





Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
