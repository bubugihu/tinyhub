<?php

namespace App\Http\Controllers;

use App\Brands;
use Illuminate\Http\Request;

class BrandsController extends Controller
{
    public function listBrands(){
        $brand = Brands::all();
        return view('admin.brands.listBrands', compact('brand'));
    }
}
