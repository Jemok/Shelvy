<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PagesController extends Controller {

  public function home(){
      return view('pages.home');
  }

  public function register(){
      return view('pages.register');
  }

  public function login(){
      return view('admin.login');
  }

  public function show_dashboard(){
      return view('admin.dashboard.dashboard');
  }

  public function show_shop(){
      return view('pages.shop');
  }

  public function show_settings(){
      return view('admin.settings');
  }

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


}
