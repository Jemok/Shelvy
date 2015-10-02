<?php namespace App\Http\Controllers;

use App\Http\Requests;

use App\Http\Requests\CategoryRequest;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Category;

use App\Shop;
use Illuminate\Support\Facades\Session;

class CategoryController extends Controller {

    public function __construct(Shop $shop)
    {
        $this->shop = $shop;


    }

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index($shop_id)
	{
        $category = new Category;

        $shop = new Shop;

        $categories = $category->whereShop_id($shop_id)->get();

        $shop = $shop->whereId($shop_id)->get()->first();

        return view('categories.list', compact('categories', 'shop'));
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
	public function store(CategoryRequest $request, $id)
	{
        $shop = Shop::whereId($id)->first();

        $shop->category()->create($request->all());




        Session::flash('flash_message','Category was created successfully');

        return redirect('/dashboard/'.$id);
	}

    public function edit_category($id)
    {

        $category = new Category;

        $item = $category->whereId($id)->first();


        return view('admin.dashboard.edit_category', compact('item'));
    }

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show()
	{




	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{

	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, CategoryRequest $request)
	{
        $category = new Category;

        $item = $category->whereId($id)->first();

        $item->fill($request->input())->save();

        Session::flash('flash_message','Category was updated successfully');

        return redirect('/edit-category/'.$id);
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($shop_id, $id)
	{
        $category = Category::find($id);



        $category->delete();

        Session::flash('flash_message','Category was deleted successfully');

        return redirect('/category-list/'. $shop_id);
	}

}
