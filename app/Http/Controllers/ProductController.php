<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use App\Category;
use App\Brands;
use App\Gallery;

class ProductController extends Controller {

    
    //admin product list
    public function listProduct(){
        $product = Product::join('category', 'category.id', '=', 'product.category_id')
            ->join('brand', 'brand.id', '=', 'product.brand_id')
            ->join('gallery', 'product.id', '=', 'gallery.product_id')
            ->select('product.*', 'gallery.*', 'category.*','brand.*')
            ->get();
        return view('admin.product.listProduct', compact('product'));
    }

    public function createProduct(){
        return view('admin.product.createProduct');
    }

    public function categories(){
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
