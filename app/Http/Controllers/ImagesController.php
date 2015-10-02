<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Product_image;
use Illuminate\Http\Request;

use App\Shop;

use Illuminate\Support\Facades\Session;

class ImagesController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
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
	public function update($id, Request $request)
	{

        if($request->hasFile('thumbnail'))
        {
            $file = $request->file('thumbnail');

            $name = time(). '-'. $file->getClientOriginalName();

            $file->move(public_path(). '/product_images/', time(). $name);
        }

        $product_definer  = session('Pid');
        $product_id = Shop::find($id)->products()->where('id', '=', $product_definer)->first()->id;

        $image = new Product_image;

        $image_item = $image->whereProduct_id($product_id)->first();

        $image_item->thumbnail = $name;

        $image_item->save();


        Session::forget('Pid');

        Session::flash('flash_message', 'Product Image was successfully uploaded');

        return redirect('/dashboard/'.$id);
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
