<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller {

    public function listProduct(){
        $products = Product::all();
        return view('admin.product.listProduct') -> with(['products' => $products]);
    }

    public function createProduct(){
        return view('admin.product.createProduct');
    }

    public function categories(){
        return view('admin.product.categories');
    }


}
