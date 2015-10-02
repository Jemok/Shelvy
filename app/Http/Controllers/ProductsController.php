<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Product_image;
use App\Product_meta_detail;
use Illuminate\Http\Request;

use App\Http\Requests\CreateProductRequest;

use App\Http\Requests\ProductMetaRequest;


use App\Shop;

use App\Product;

use Illuminate\Http\Response;

use Illuminate\Support\Facades\Session;
use Intervention\Image\Facades\Image;

use App\Http\Requests\UpdateProductRequest;

use Illuminate\Support\Facades\Input;



class ProductsController extends Controller {

    public function __construct()
    {



    }

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index($shop_id)
	{


        $product = new Product;

        $shop = new Shop;

        $products = $product->whereShop_id($shop_id)->get();

        $shop = $shop->whereId($shop_id)->get()->first();

        return view('products.list', compact('products', 'shop'));
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
	public function store(CreateProductRequest $request, $id)
	{


        Session::forget('Pid');



        $shop = new Shop;

        $shop = $shop->whereId($id)->first();

        //$shop = Shop::find($id)->first();





        if($request->hasFile('thumbnail'))
        {
            $file = $request->file('thumbnail');

            $name = time() . '-' . $file->getClientOriginalName();

            $image = Image::make($file->getRealPath());

            //$file->move(public_path(). '/product_images/', $name);

            $image->save(public_path(). '/product_images/' . $name)
                  ->resize(200, 210)
                  ->save(public_path(). '/product_images/'.'200-' . $name);

            $image->save(public_path(). '/product_images/' . $name)
                ->resize(50, 50)
                ->save(public_path(). '/product_images/'.'50-' . $name);

        }





        $shop->products()->create([
            'product_name' => $request->product_name,
            'product_price' => $request->product_price,
            'product_description' => $request->product_description ,
            'thumbnail' => '200-'.$name,
            'thumbnail_small' => '50-'.$name
        ]);


        $product = new Product;

        $product_id = $product->get_max_id($id);

        //$product = Product::find($product_id);

       // dd($product_id);

        $product = $product->whereId($product_id)->first();

        $meta = new Product_meta_detail;

        $meta = $product->meta_product()->save($meta);

        //$image = new Product_image;

        //$image = $product->images()->save($image);

        //$image = new Product_image;

        //$image = $product->main_image()->save($image);

        //$meta_id = Product::find($product_id)->meta_product()->where('product_id', '=', $product_id)->first()->product_id;

        //flash('Your Product has been created successfully');

        Session::flash('flash_message', 'Product was successfully created');

        return redirect('/dashboard/'.$id);
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update_meta($id, ProductMetaRequest $request)
	{
        $product_definer  = session('Pid');
	    $product_id = Shop::find($id)->products()->where('id', '=', $product_definer)->first()->id;

        $meta = new Product_meta_detail;

        $meta_item = $meta->whereProduct_id($product_id)->first();

        $meta_item->fill($request->input())->save();

        Session::flash('flash_message', 'Product meta data was successfully added');

        return redirect('/dashboard/'.$id);






	}






	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{

        $product = new Product;

        $item = $product->whereId($id)->first();





        return view('admin.dashboard.edit_product', compact('item'));
	}


    public  function meta($id)
    {


        $meta = new Product_meta_detail;

        $meta = $meta->whereProduct_id($id)->first();


        return view('admin.dashboard.edit_product', compact('meta'));
    }

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, UpdateProductRequest $request)
	{
        if($request->hasFile('thumbnail'))
        {
            $file = $request->file('thumbnail');

            $name = time() . '-' . $file->getClientOriginalName();

            $image = Image::make($file->getRealPath());

            //$file->move(public_path(). '/product_images/', $name);

            $image->save(public_path(). '/product_images/' . $name)
                ->resize(200, 210)
                ->save(public_path(). '/product_images/'.'200-' . $name);

            $image->save(public_path(). '/product_images/' . $name)
                ->resize(50, 50)
                ->save(public_path(). '/product_images/'.'50-' . $name);

        }


        $product = new Product;

        $item = $product->whereId($id)->first();

        if(isset($name))
        {

        $item->fill([
                'product_name' => $request->product_name,
                'product_price' => $request->product_price,
                'product_description' => $request->product_description ,
                'thumbnail' => '200-'.$name,
                'thumbnail_small' => '50-'.$name
            ]
        )->save();
        }
        elseif(!isset($name))
        {

            $item->fill([
                    'product_name' => $request->product_name,
                    'product_price' => $request->product_price,
                    'product_description' => $request->product_description ,
                    //'thumbnail' => '200-'.$name,
                    //'thumbnail_small' => '50-'.$name
                ]
            )->save();

        }



        Session::flash('flash_message','Product was updated successfully');

        return redirect('/edit-product/'.$id);


	}

    public function upload_image(Request $request){

        $file = $request->file('file');


        if($file) {

            //$destinationPath = public_path() . '/uploads/';
            $filename = $file->getClientOriginalName();

            $image = Image::make($file->getRealPath());

            $image->save(public_path(). '/product_images/' . $filename)
                ->resize(80, 80)
                ->save(public_path(). '/product_images/80/'. $filename);

            $image->save(public_path(). '/product_images/' . $filename)
                ->resize(500, 400)
                ->save(public_path(). '/product_images/400/'. $filename);

            //$upload_success = $request->file('file')->move($destinationPath, $filename);

            $product_definer  = session('Pid');

            //$product_id = Shop::find(4)->products()->where('id', '=', $product_definer)->first()->id;

           // $image = new Product_image;

            $product = Product::find($product_definer);

            $product->images()->create([

                'product_id' => $product_definer,
                'image_big'  => $filename



            ]);





            //$image = $image->whereProduct_id($product_id)->first();

           // $image->fill([
             //       'image_big' => $filename
               // ]

            //)->save();





            if ($image == true) {

                // resizing an uploaded file
                //Image::make($destinationPath . $filename)->resize(100, 100)
                  //  ->save($destinationPath . "100x100_" . $filename);

                return Response::json('success', 200);
            }
            elseif($image == false)
            {
             return Response::json('error', 400);
            }
        }




    }




    public function meta_update($id, ProductMetaRequest $request)
    {

    }

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($shop_id, $id)
    {

        $product = Product::find($id);



        $product->delete();


        Session::flash('flash_message','Product was deleted successfully');

        return redirect('/products-list/'. $shop_id );

	}

    public function show_product($id)
    {
        $product = Product::find($id);



        $images = $product->images()->get();

        $details = $product->meta_product()->get()->first();

        return view('pages.product', compact('images', 'details', 'product'));
    }

}
