<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;
use App\ProductImage;
use Image;

class AdminPagesController extends Controller
{

  public function index()
  {
    return view('admin.pages.index');
  }

  public function product_create()
  {
    return view('admin.pages.product.create');
  }
  public function product_edit($id)
  {
    $product = Product::find($id);
    return view('admin.pages.product.edit')->with('product', $product);
  }
  public function manage_products()
  {
    $products = Product::orderBy('id','desc')->get();
    return view('admin.pages.product.index')->with('products', $products);
  }
  public function product_store(Request $request)
  {

    $request->validate([
      'title' => 'required|unique:posts|max:150',
      'description' => 'required',
      'price' => 'required|numeric',
      'quantity' => 'required|numeric',
    ]);
    $product = new Product;
    $product->title = $request->title;
    $product->description =$request->description;
    $product->price =$request->price;
    $product->quantity =$request->quantity;
    $product->category_id= 1;
    $product->brand_id= 1;
    $product->admin_id= 1;
    $product->save();
    //productImage Model insert images
    if($request->hasFile('product_image')){
      //insert image
      $image = $request->file('product_image');
      $img=time() . '.'. $image->getClientOriginalExtension();
      $location=public_path('Images/products/' .$img) ;
      Image::make($image)->save($location);

      $product_image = new ProductImage;
      $product_image->product_id = $product->id;
      $product_image->image = $img;
      $product_image->save();



    }
    return redirect()->route('admin.product.create');

  }

  public function product_update(Request $request,$id)
  {

    $request->validate([
      'title' => 'required|unique:posts|max:150',
      'description' => 'required|unique:posts',
      'price' => 'required|unique:posts|numeric',
      'quantity' => 'required|unique:posts|numeric',
    ]);
    $product = Product ::find($id);
    $product->title = $request->title;
    $product->description =$request->description;
    $product->price =$request->price;
    $product->quantity =$request->quantity;

    $product->save();

    return redirect()->route('admin.products');

  }


}
