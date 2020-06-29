<?php

namespace App\Http\Controllers;

use App\Brands;
use Illuminate\Http\Request;
use App\Http\Requests\CreateProductRequest;

class BrandsController extends Controller
{
    public function listBrands()
    {
        $brand = Brands::all();
        return view('admin.brands.listBrands', compact('brand'));
    }

    public function createBrand(){
        return view("admin.brands.createBrands");
    }


}
