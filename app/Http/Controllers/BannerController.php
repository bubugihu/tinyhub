<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Banner;

class BannerController extends Controller
{
    public function getBanner(){
        $banner = Banner::all();
        return view("homepage", compact('banner'));
    }
}
