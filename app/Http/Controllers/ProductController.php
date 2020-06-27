<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use App\Http\Requests\CreateProductRequest;
use App\Category;
use App\Brands;
use App\Gallery;

class ProductController extends Controller {

    
    //admin product list
    public function listProduct(){
        $product = Product::all();
        return view('admin.product.listProduct', compact('product'));
    }

    public function createProduct(){
        return view("admin.product.createProduct");
    }

    public function postCreate(CreateProductRequest $request){ 

        $product = $request -> all();

        if ($request -> hasFile('featureimg')) {
            $file = $request -> file('featureimg');
            $extension = $file -> getClientOriginalExtension();

            if ($extension != 'jpg' && $extension != 'png' && $extension != 'jpeg') {
                return redirect("admin/product/createProduct") -> with('Message', 'You can only upload image with file jpg/png/jpeg');
            }
            $imageName = $file -> getClientOriginalName();
            $file -> move("img/feature", $imageName);

        } else {
            $imageName = null;
        }

        $p = new Product($product);
        $p -> featureimg = $imageName;
        $p ->save();

        return redirect() -> action('ProductController@listProduct');
        // return view('admin.product.createProduct');
    }

    public function getCategories(){
        return view('admin.product.categories');
    }


    //user product details
    public function productDetails($id){
        $product = Product::find($id);
        $gallery = Gallery::where('product_id', $id)->get();
        $div = $gallery;
        $category = Category::find($product->category_id);
        return view('users.product.productDetails', compact('product','gallery','category'));
    }















    // public function filterCate($in){
    //     $category = Category::where('category_name',$in)->first();
    //     $product = Category::find($category->id)->roleProduct()->get();
    //     return view('users.products.productList', compact('product'));
    // }

    // public function filterBrand($in){
    //     $brand = Brands::where('brand_name',$in)->first();
    //     $product = Brands::find($brand->id)->roleProduct()->get();
    //     return view('users.products.productList', compact('product'));
    // }
    // public function filterPrice(Request $request){
        // $fromPrice = $request->input('fromPrice');
        // $toPrice = $request->input('toPrice');
        //     if($fromPrice > $toPrice){
        //         $message = 'Price is invalid';
        //         $product = null;
        //         return view('users.products.productList', compact('message','product'));
        //     } 
        //     $product = Product::where('price','>=',$fromPrice)->where('price','<=',$toPrice)->get();
        //         if($product->count() > 0 )
        //         return view('users.products.productList', compact('product'));

        //         $message = 'Not Found';
        //         return view('users.products.productList', compact('product','message'));    
    // }

}
