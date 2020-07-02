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
        $productGlobal              = Product::where('brand_id',4)->take(4)->get();
        $bannerGlobal               = Banner::all();
        $categoryGlobal             = Category::all();
        $brandGlobal                = Brands::all();
        $feedbackHomepage           = Feedback::where('feed_status',1)->get();

        //connect 3 tables
        $varGlobal =    Product::join('category','category.id','=','product.category_id')
                                ->join('brand','brand.id','=','product.brand_id')
                                ->select('category.category_name','category.category_title','category.description','product.feature_image','brand.brand_name','brand.brand_image')
                                ->get();

        View::share([
            'categoryGlobal'        => $categoryGlobal,
            'brandGlobal'           => $brandGlobal,
            'feedbackHomepage'      => $feedbackHomepage,
            'bannerHomepage'        => $bannerGlobal,
            'productGlobal'         => $productGlobal,
            'varGlobal'             => $varGlobal, 
        ]);
        
    }
}
