<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Product;
use Illuminate\Http\Request;

use App\Http\Requests\ProductMetaRequest;

use App\Product_meta_detail;

class MetaController extends Controller {

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

    public function meta()
    {

        //$product = Product::find($productId);


        //$product->meta_product()->Create($request->all());


       // flash('Meta data successfully stored');




        return view('admin.dashboard.index');
    }

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($product_id, ProductMetaRequest $request)
	{
        $meta = new Product_meta_detail;



        $item = $meta->whereProduct_id($product_id)->first();


        $item->fill($request->input())->save();


        flash()->success('Success: Product Meta Data updated');
        return redirect('/meta-product/'. $product_id);
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
