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

/*Route::post('register', [
    'as' => 'register_path',
    'uses' => 'RegistrationController@store'
]);*/

Route::post('/register/customer', [
    'as' => 'register_path',
    'uses' => 'Auth\AuthController@postRegister'
]);


Route::post('/create/shop', [
    'as' => 'create-shop',
    'uses' => 'Shop\ShopController@create_shop'
 ]);



Route::post('login', 'Auth\AuthController@postLogin');
Route::get('logout', 'Auth\AuthController@getLogout');


Route::get('home', 'HomeController@index');

Route::get('register', 'PagesController@register');

Route::get('login', 'PagesController@login');


Route::get('/dashboard/{id}', 'PagesController@show_dashboard');
Route::get('/dashboard/settings/{id}', 'PagesController@show_settings');
Route::get('/dashboard/{id}/{$meta_id}/', 'MetaController@meta');

//Route::get('shop', 'PagesController@show_shop');

Route::get('settings', 'PagesController@show_settings');

Route::get('about_shop', 'PagesController@about_shop');

Route::get('help', 'PagesController@show_help');

Route::get('account', 'PagesController@create_account');

Route::get('new_login', 'PagesController@new_login');

Route::get('search', 'PagesController@show_search');

Route::get('/product/{id}', 'ProductsController@show_product');

Route::get('customer_account', 'PagesController@customer_account');

Route::get('uploader', 'PagesController@upload_image');

Route::get('customer_registration', 'PagesController@register_customer');

Route::get('search_all', 'PagesController@search_all');

Route::get('customer_login', 'PagesController@customer_login');

Route::get('/customer-account/{id}', 'AccountController@index');
Route::get('/customer-account/settings/{id}', 'AccountController@show_user_settings');
Route::patch('/customer-account/settings/{id}', 'AccountController@update');

Route::post('/create-category/{id}/', 'CategoryController@store');
Route::get('/show-category/{id}', 'CategoryController@show');


Route::get('/edit-category/{id}', 'CategoryController@edit_category');
Route::patch('/edit-category/{id}', 'CategoryController@update');
Route::delete('/delete-category/{shop_id}/{id}/', 'CategoryController@destroy');
Route::get('/category-list/{shop_id}/', 'CategoryController@index');
Route::get('/upload-image/', 'PagesController@upload_image');

Route::post('/upload-image/', 'ProductsController@upload_image');

Route::get('use-cart', 'CartController@index');



Route::post('/create-product/{id}/', 'ProductsController@store');
Route::get('/edit-product/{id}/', 'ProductsController@edit');
Route::patch('/edit-product/{id}', 'ProductsController@update');
Route::delete('/delete-product/{shop_id}/{id}', 'ProductsController@destroy');
Route::get('/products-list/{shop_id}', 'ProductsController@index');
Route::get('/add-meta/{$meta_id}', 'MetaController@meta');
Route::patch('/meta-product/{id}', 'ProductsController@update_meta');

Route::patch('/product-images/{id}', 'ImagesController@update');

Route::get('/blueimp/', 'PagesController@blueimp');



Route::get('/{slug}', 'ShopController@show');
Route::get('/shops/create','ShopController@create');
Route::post('/shops', 'ShopController@store');

Route::get('/shops/{slug}', 'ShopController@show');



Route::get('/shops/{slug}/edit', 'ShopController@edit');

Route::patch('/shops/{slug}', 'ShopController@update');
Route::get('/shops', 'ShopController@index');

Route::post('/cart/{id}/', 'CartsController@store');
Route::get('/cart/cart/', 'CartsController@index');
Route::delete('/delete-cart-item/{id}', 'CartsController@destroy');

Route::post('/wish/{id}/', 'WishProductController@store');
Route::get('/wish/wish/', 'WishProductController@index');
Route::delete('/delete-wish/{id}', 'WishProductController@destroy');

Route::get('/checkout/now', 'CheckoutController@index');

Route::get('/shop-category/{category_name}', 'ShopController@shop_categories');

Route::get('/locate/import/', 'LocateController@import');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);


