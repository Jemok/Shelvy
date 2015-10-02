<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Wish_product;

use App\Product;

use Illuminate\Support\Facades\Session;

use App\User;

class WishProductController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{

        if(Auth::check() == true)
        {
            $wish = new Wish_product;

            $wishes = $wish->whereUser_id(Auth::user()->id)->get();

            $total = $wish->whereUser_id(Auth::user()->id)->sum('product_price');

            $count = $wish->whereUser_id(Auth::user()->id)->count();










            return view('shops.wish_list', compact('wishes', 'total', 'count'));
        }
        else if(Auth::check() == false)
        {
            $wish = new Wish_product;

            $wishes = $wish->whereSession_id(Session::get('wish'))->having('ip_address', '=', $_SERVER['REMOTE_ADDR'])->having('user_id', '=', 1)->get();

            $total = $wish->whereSession_id(Session::get('wish'))->sum('product_price');

            $count = $wish->whereSession_id(Session::get('wish'))->count();





            return view('shops.wish_list', compact('wishes', 'total', 'count'));
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

            $user->wishes()->create([



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
            Session::put('wish', 'jamesabcdefghijklmopqrstuvxyz');
            $product = new Product;

            $product = $product->whereId($id)->first();





            $product->wishes()->create([
                'user_id' => 1,
                'product_name' => $product->product_name,
                'product_description' =>  $product->product_description,
                'product_price'       =>       $product->product_price,
                'image'     =>   $product->thumbnail_small,
                'quantity'   => 4,
                'session_id' => Session::get('wish'),
                'ip_address' => $_SERVER['REMOTE_ADDR'],

            ]);

        }

        Session::flash('flash_message', 'Product was added to wish-list successfully');

        return redirect('/wish/wish');

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
        $wish = Wish_product::find($id);



        $wish->delete();


        Session::flash('flash_message','Your wish was removed successfully');

        return redirect('/wish/wish/');
	}

}
