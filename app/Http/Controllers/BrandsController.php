<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandsController extends Controller
{
    public function listBrands(){
       return view("admin.brands.listBrands");
    }

    public function createBrands(){
      return view("admin.brands.createBrands");
    }
}
