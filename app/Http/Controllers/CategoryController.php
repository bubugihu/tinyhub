<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function categories(){
        $cate = Category::all();
        return view('admin.category.categories', compact('cate'));
    }
    
}
