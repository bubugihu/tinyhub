<?php

namespace App\Providers;

use App\Banner;
use App\Brands;
use App\Category;
use App\Customers;
use App\Feedback;
use App\User;
use App\Product;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        $productGlobal              = Product::orderBy('sold_out', 'desc')->limit(4)->get();
        $bannerGlobal               = Banner::all();
        $categoryGlobal             = Category::all();
        $brandGlobal                = Brands::all();
        $feedbackHomepage           = Feedback::where('feed_status', 1)->get();
        $sttNo                      = 0;


        View::share([
            'categoryGlobal'        =>  $categoryGlobal,
            'brandGlobal'           =>  $brandGlobal,
            'feedbackHomepage'      =>  $feedbackHomepage,
            'bannerGlobal'          =>  $bannerGlobal,
            'productGlobal'         =>  $productGlobal,
            'sttNo'                 =>  $sttNo,
        ]);
    }
}
