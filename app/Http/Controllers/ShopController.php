<?php namespace App\Http\Controllers;


use App\Cart;
use App\Http\Controllers\Controller;


use App\Product;
use App\Product_image;
use App\Shop;

use App\Http\Requests\CreateShopRequest;

use App\Wish_product;

use Illuminate\Support\Facades\Auth;

use Intervention\Image\Facades\Image;

use Illuminate\Support\Facades\Session;

use Illuminate\Support\Facades\Request;

class ShopController extends Controller {



    public function __construct(Shop $shop)
    {
        $this->shop = $shop;

        $this->middleware('auth', ['only' => 'create']);
        $this->middleware('auth', ['only' => 'edit']);
        $this->middleware('auth', ['only' => 'update']);
    }



    public function index(){

        $shops = $this->shop->get();

        return view('shops.index', compact('shops'));
    }

    public function shop_categories($category_name)
    {

        $filter = Request::get('filter');

        if(isset($filter))
        {
           $shops = Shop::where('shop_location', 'like', $filter)->get();

           return view('pages.shop_categories', compact('shops'));
        }
        else
        {

        $shops = Shop::where('shop_category', '=', $category_name)->get();
        return view('pages.shop_categories', compact('shops'));
        }
    }



    public function show($slug)
    {

       $query = Request::get('search_shop_products');


       $shop = $this->shop->whereSlug($slug)->first();

       $shop_id = $this->shop->whereSlug($slug)->first()->id;

        if($query)
        {
            $products = Shop::find($shop_id)->products()->where('product_name', 'like', "%$query%")->get();
        }
        else
        {

            $products = Shop::find($shop_id)->products()->get();
        }




        $categories = Shop::find($shop_id)->category()->get();

        if(Auth::check() == true)
        {
            $count =  Auth::user()->wishes()->count();
            $count_cart =  Auth::user()->carts()->count();
        }
        elseif(Auth::check() == false)
        {
            $wish = new Wish_product;

            $cart = new Cart;

            $count = $wish->whereSession_id(Session::get('wish'))->count();
            $count_cart = $cart->whereSession_id(Session::get('cart'))->count();
        }







        return view('pages.shop', compact('shop', 'products', 'categories', 'count', 'count_cart'));

    }




    public function store( CreateShopRequest $request)
    {


        $shop = new Shop($request->all());

        Auth::user()->shops()->save($shop);

        flash('Your shop has been created, perform admin tasks here e.g adding products, categories e.t.c');

        return redirect('/dashboard/'.$shop->id);

    }

    public function create()
    {
        return view('shops.register_shop');
    }



   // public function edit($slug)
    //{
      //  $shop = $this->shop->whereSlug($slug)->first();

        //return view('admin.dashboard.dashboard', compact('shop'));
    //}

    public function update($id, CreateShopRequest $request)
    {
        $shop = $this->shop->whereId($id)->first();

        if($request->hasFile('thumbnail'))
        {
            $file = $request->file('thumbnail');

            $name = time() . '-' . $file->getClientOriginalName();

            $image = Image::make($file->getRealPath());

            //$file->move(public_path(). '/product_images/', $name);

            $image->save(public_path(). '/shop_images/' . $name)
                ->resize(320, 150)
                ->save(public_path(). '/shop_images/'.'320-' . $name);

        }


        //$shop->fill($request->input())->save();

        if(isset($name))
        {

            $shop->fill([
                    'shop_name' => $request->shop_name,
                    'shop_description' => $request->shop_description,
                    'slug' => $request->slug,
                    'shop_location' => $request->shop_location,
                    'shop_building' => $request->shop_building,
                    'shop_category' => $request->shop_category,
                    'shop_street' => $request->shop_street,
                    'shop_image' => '320-'. $name
                ]
            )->save();
        }
        elseif(!isset($name))
        {

            $shop->fill([
                    'shop_name' => $request->shop_name,
                    'shop_description' => $request->shop_description,
                    'slug' => $request->slug,
                    'shop_location' => $request->shop_location,
                    'shop_building' => $request->shop_building,
                    'shop_category' => $request->shop_category,
                    'shop_street' => $request->shop_street,
                //'shop_image' => '320-'. $name
               ]
            )->save();

        }


        flash()->success('Success: Shop settings updated');
        return redirect('/dashboard/settings/'.$id);
    }





}
