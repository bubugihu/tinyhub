<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Middleware\Admin;
use App\Http\Requests\CategoryRequest;
use Illuminate\Http\Request;
use App\Product;

class CategoryController extends Controller
{   
    //Admin Category
    public function categories(){
        $cates = Category::paginate(5);
        return view('admin.category.categories', compact('cates'));
    }

    public function createCate(){
        return view('admin.category.createCategories');
    }

    // Post Create Categories
    public function postCate(CategoryRequest $request){

        // $category = $request->all();
        $c = new Category();
        $c->category_name = $request->cateTitle;
        $c->description = $request->cateDescription;
        $c->save();
        
        //session()->put('alert', 'Create Category Successful !');
        // return redirect('admin/category/postCate')-;
        return redirect()->action('CategoryController@categories')->with(['flash_level' => 'success','flash_message' => 'Created Successfully !' ]);

    }

    //User Category
    public function category(){
        $product = Product::all();
        $message = 'a';
        return view('users.product.category', compact('product','message'));
    }
    
    //User Search Category
    public function search(Request $request){
        
        $re = $request->all();
        $orderByPrice = $orderByName = 'asc';
        $message = 'a';

        if($request->input('SortBy') == 2  ){
            $orderByPrice = 'desc';
        }
        if($request->input('SortBy') == 4  ){
            $orderByName = 'desc';
        }
        $fromPrice = $request->input('fromPrice');
        $toPrice = $request->input('toPrice');

        if($re != null){
            $product= Product::join('brand','product.brand_id','=','brand.id')
                    ->join('category','product.category_id','=','category.id')  
                    ->orWhereIn('category.category_name',$re)   
                    ->orWhereIn('brand.brand_name',$re)
                    ->whereBetween('product.price' , [$fromPrice,$toPrice])  
                    ->orderBy('product.price',$orderByPrice)
                    ->orderBy('product.product_title', $orderByName)
                    ->select('product.*', 'brand.brand_name', 'category.category_name')
                    ->get();
        
        if($fromPrice > $toPrice){
            $message = 'Price is invalid !!!';
            return view('users.product.category', compact('product','message'));
        }
        if($product->count() > 0 )
             return view('users.product.category', compact('product','message'));  
            
        $message = 'Not found !!!';
        return view('users.product.category', compact('product','message'));
    }else{
            $product=   Product::join('brand','product.brand_id','=','brand.id')
                                ->join('category','product.category_id','=','category.id')                                                         
                                ->whereBetween('product.price' , [$fromPrice,$toPrice])  
                                ->orderBy('product.price',$orderByPrice)
                                ->orderBy('product.product_title', $orderByName)
                                ->select('product.*', 'brand.brand_name', 'category.category_name') 
                                ->get();

        if($fromPrice > $toPrice){
            $message = 'Price is invalid !!!';
            return view('users.product.category', compact('product','message'));
        }
        if($product->count() > 0 )
            return view('users.product.category', compact('product','message'));
        $message = 'Not found !!!';
        return view('users.product.category', compact('product','message'));
    }
    }

    
}
