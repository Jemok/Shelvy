<?php namespace App\Http\Controllers;

use App\Cart;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Session;

use App\Product;

use App\User;

class CartsController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        if(Auth::check() == true)
        {
            $cart = new Cart;

            $items = $cart->whereUser_id(Auth::user()->id)->get();

            $total = $cart->whereUser_id(Auth::user()->id)->sum('product_price');

            $count_items = $cart->whereUser_id(Auth::user()->id)->count();

            return view('shops.cart', compact('items', 'total', 'count_items'));
        }
        else if(Auth::check() == false)
        {
            $cart = new Cart;

            $items = $cart->whereSession_id(Session::get('cart'))->having('ip_address', '=', $_SERVER['REMOTE_ADDR'])->having('user_id', '=', 1)->get();

            $total = $cart->whereSession_id(Session::get('cart'))->sum('product_price');

            $count_items = $cart->whereSession_id(Session::get('cart'))->count();





            return view('shops.cart', compact('items', 'total', 'count_items'));
        }
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store($id, Request $request)
	{
        if(Auth::check() == true)
        {
            $user_id = \Auth::user()->id;

            $user  = new User;

            $user = $user->whereId($user_id)->first();


            $product = new Product;

            $product = $product->whereId($id)->first();

            $user->carts()->create([



                    'product_id' => $id,
                    'product_name' => $product->product_name,
                    'product_description' =>  $product->product_description,
                    'product_price'       =>       $product->product_price,
                    'image'     =>   $product->thumbnail_small,
                    'quantity'   => 4,
                    'ip_address' => $_SERVER["REMOTE_ADDR"],




                ]
            );


        }
        else if(Auth::check() == false)
        {
            Session::put('cart', 'jamesabcdefghijklmopqrstuvxyz');
            $product = new Product;

            $product = $product->whereId($id)->first();





            $product->carts()->create([
                'user_id' => 1,
                'product_name' => $product->product_name,
                'product_description' =>  $product->product_description,
                'product_price'       =>       $product->product_price,
                'image'     =>   $product->thumbnail_small,
                'quantity'   => 4,
                'session_id' => Session::get('cart'),
                'ip_address' => $_SERVER['REMOTE_ADDR'],

            ]);

        }

        Session::flash('flash_message', 'Product was added to cart successfully');

        return redirect('/cart/cart');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
        $cart = Cart::find($id);



        $cart->delete();


        Session::flash('flash_message','Your cart item was removed successfully');

        return redirect('/cart/cart/');
	}

}
