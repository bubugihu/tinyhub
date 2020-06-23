<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(){
        $product = Product::all();
        return view('search', compact('product'));
    }
}
