<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use App\Category;
use App\Brands;

class SearchController extends Controller
{
    public function search(){
        $products = Product::where('status',0)->get();
        return view('search', compact('products'));
    }

    public function filterCate($in){
        $category = Category::where('category_name',$in)->first();
        $products = Product->where('status',0)->get();
        return view('users.products.productList', compact('products'));
    }

    public function filterBrand($in){
        $brand = Brands::where('brand_name',$in)->first();
        $products = Brands::find($brand->id)->roleProduct()->where('status',0)->get();
        return view('users.products.productList', compact('products'));
    }
    public function filterPrice(Request $request){
        $fromPrice = $request->input('fromPrice');
        $toPrice = $request->input('toPrice');
            if($fromPrice > $toPrice){
                $message = 'Price is invalid';
                $products = null;
                return view('users.products.productList', compact('message','products'));
            } 
            $products = Product::where('price','>=',$fromPrice)->where('price','<=',$toPrice)->where('status',0)->get();
                if($products->count() > 0 )
                return view('users.products.productList', compact('products'));

                $message = 'Not Found';
                return view('users.products.productList', compact('products','message'));    
    }

    public function sortPrice($products){
        $products = Product::where('status',0)->get();
       // return view('users.products.productList', compact('product'));
       return view('abc',compact('products'));
    }
}   

