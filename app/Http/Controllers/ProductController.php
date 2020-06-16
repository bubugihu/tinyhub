<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    public function listProduct(Request $request){
        $list_product= new Product();
        $list_product= Product::all();
        return view('user.listproduct',['list_product'=>$list_product]);
    }
}
