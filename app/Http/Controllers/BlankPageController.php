<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlankPageController extends Controller
{
    public function about(){
        return view("about-us");
    }

    public function shippingPolicy(){
        return view("shipping-policy");
    }

    public function payment(){
        return view("payment");
    }
}
