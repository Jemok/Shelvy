<?php namespace App\Http\Controllers;

//use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Shop;
//use Illuminate\Http\Request;

use App\Category;

use App\Product;

use App\Shop_category;
use Illuminate\Support\Facades\Request;

class PagesController extends Controller {



public function __construct()
{
    $this->middleware('auth', ['only' => 'show_customer_account']);
    $this->middleware('auth', ['only' => 'show_dashboard']);
    $this->middleware('auth', ['only' => 'show_settings']);
}

  public function home(){

      $search = Request::get('search_shops');



      if(isset($search))
      {
          $shops= Shop::where('shop_name', 'LIKE', "%$search%")->get();
          return view('search.search_shops', compact('shops'));
      }
      else
      {
          $shop_categories = Shop_category::all();
          return view('pages.home', compact('shop_categories'));
      }

  }


  public function meta()
  {
      return view('products.meta');
  }

  public function register(){
      return view('pages.register');
  }

  public function login(){
      return view('pages.login');
  }

  public function show_dashboard($id){

      $products = Product::whereShop_id($id)->get();


      $items = Category::whereShop_id($id)->get();


      $shop = Shop::whereId($id)->first();



      return view('admin.dashboard.dashboard', compact('shop', 'items', 'products'));
  }



  public function show_settings($id){

        $sh = Shop::whereId($id)->first();


        return view('admin.dashboard.edit_shop_settings', compact('sh'));
   }


  public function upload()
  {
      return view('admin.dashboard.blueimp');
  }

  //public function show_shop(){
    //  return view('pages.shop');
  //}

  //public function show_settings(){
    //  return view('admin.settings');
  //}

  public function about_shop(){
      return view('pages.about_shop');
  }

  public function show_help(){
      return view('pages.help');
  }

  public function create_account(){
      return view('pages.account');
  }

  public function new_login(){
      return view('pages.new_login');
  }

  public function show_search(){
      return view('pages.search');
  }

  public function show_product(){
      return view('pages.product');
  }

  public function show_customer_account(){
      return view('pages.customer_account');
  }

  public function register_customer(){
      return view('pages.register_customer');
  }


  public function search_all(){
      return view('pages.search_all');
    }

   public function customer_login(){
       return view('pages.customer_login');
   }

    public function edit_product(){
        return view('admin.dashboard.edit_product');
    }


    public function edit_category(){
        return view('admin.dashboard.edit_category');
    }

    public function upload_image(){
        return view('pages.dropzone');
    }






}
