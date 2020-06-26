<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Banner;
class BannerController extends Controller
{
    public function listBanner(){
        $banners = Banner::all();
        return view('admin.banners.listBanner', compact('banners'));
    }
}
