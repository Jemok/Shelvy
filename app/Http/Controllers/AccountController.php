<?php namespace App\Http\Controllers;

use App\Http\Requests\UpdateUserAccountRequest;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Shop;

use App\User;

use App\Cart;

use App\Wish_product;

class AccountController extends Controller {



    public function __construct(Shop $shop)
    {
        $this->shop = $shop;

        $this->middleware('auth', ['only' => 'index']);


    }


	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $shops = \Auth::user()->shops()->get();

        $shops_count = \Auth::user()->shops()->count();

        if(\Auth::check() == true)
        {
            $cart = new Cart;

            $items = $cart->whereUser_id(\Auth::user()->id)->get();

            $total = $cart->whereUser_id(\Auth::user()->id)->sum('product_price');

            $count_items = $cart->whereUser_id(\Auth::user()->id)->count();

            $wish = new Wish_product;

            $wishes = $wish->whereUser_id(\Auth::user()->id)->get();

            $total_wishes = $wish->whereUser_id(\Auth::user()->id)->sum('product_price');

            $count_wishes = $wish->whereUser_id(\Auth::user()->id)->count();





        }

        return view('pages.customer_account', compact('shops', 'shops_count', 'items', 'total', 'count_items',
                    'wishes', 'total_wishes', 'count_wishes'));


	}

	public function show_user_settings()
    {
        $user_id = \Auth::user()->id;

        $user = new User;

        $user = $user->whereId($user_id)->get()->first();




        return view('pages.customer_account_settings', compact('user'));
    }

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
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
	public function update( UpdateUserAccountRequest $request)
	{
        $account = \Auth::user();

        $account->fill($request->input())->save();


        flash()->success('Success: Account settings updated');

        return redirect('/customer-account/settings/'.\Auth::user()->id);


	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
