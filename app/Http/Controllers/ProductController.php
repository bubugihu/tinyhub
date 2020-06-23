<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller {

    //ProductList page
    public function productlist(){
        $product = Product::all();
        return view('users.products.productList', compact('product'));
    }

    public function createProduct(){
        return view('admin.product.createProduct');
    }

    public function categories(){
        return view('admin.product.categories');
    }


}
