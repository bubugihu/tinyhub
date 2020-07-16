<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class SearchKeyController extends Controller
{
    public function getSearch(Request $req){
		$product = Product::where('product_title', 'like', '%'. $req -> searchKey .'%')
							->where('product.status', '=', 0)
							->orWhere('price', $req -> searchKey)
							->get();
    	return view('search', compact('product'));
    }
}
