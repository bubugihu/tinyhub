<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use App\Category;
use App\Brands;

class SearchController extends Controller
{
    public function search(){
        $product = Product::all();
        return view('search', compact('product'));
    }

    public function filterCate($in){
        $category = Category::where('category_name',$in)->first();
        $product = Category::find($category->id)->roleProduct()->get();
        return view('users.products.productList', compact('product'));
    }

    public function filterBrand($in){
        $brand = Brands::where('brand_name',$in)->first();
        $product = Brands::find($brand->id)->roleProduct()->get();
        return view('users.products.productList', compact('product'));
    }
    public function filterPrice(Request $request){
        $fromPrice = $request->input('fromPrice');
        $toPrice = $request->input('toPrice');
            if($fromPrice > $toPrice){
                $message = 'Price is invalid';
                $product = null;
                return view('users.products.productList', compact('message','product'));
            } 
            $product = Product::where('price','>=',$fromPrice)->where('price','<=',$toPrice)->get();
                if($product->count() > 0 )
                return view('users.products.productList', compact('product'));

                $message = 'Not Found';
                return view('users.products.productList', compact('product','message'));    
    }

    public function sortPrice($products){
        $product = Product::all();
       // return view('users.products.productList', compact('product'));
       return view('abc',compact('product'));
    }
}   

