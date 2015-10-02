<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class RegistrationController extends Controller

{

    /**
     *
     * show a form to register a new user
     */

    public function create()
	{
		return view('pages.register');
	}

    public function store()
    {
        return Redirect::home();
    }



}
