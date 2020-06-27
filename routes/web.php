<?php

use App\Category;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Product;
use App\Brands;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Auth::routes();
Route::get('/', function() {
    return view('homepage');
})->name('homepage');

//////////////////admin
//users
Route::get('admin/users/listUsers', 'UserController@listUsers');
Route::get('admin/users/createUser', 'UserController@createUser');
Route::get('admin/users/updateUser' , 'UserController@updateUser');
//customer
Route::get('admin/customer/listCustomer', 'CustomerController@listCustomer');

//feedback
Route::get('admin/feedback/feedbackList', 'FeedbackController@feedbackList');
//product
Route::get('admin/product/listProduct', 'ProductController@listProduct');
Route::get('admin/product/createProduct', 'ProductController@createProduct');
Route::post('admin/product/postCreate', 'ProductController@postCreate');
//category
Route::get('admin/category/categories', 'CategoryController@categories');

//brands
Route::get('admin/brands/listBrands' , 'BrandsController@listBrands');
Route::get('admin/brands/createBrands' , 'BrandsController@createBrand');
//order
Route::get('admin/order/listOrder', 'OrderController@listOrder');

//comment
Route::get('admin/comment/listComment', 'CommentController@listComment');
//banner
Route::get('admin/banners/listBanner' , 'BannerController@listBanner');
//index
Route::get('admin/index', function(){
    return view('admin.index');
});
//profile
Route::get('admin/profile', function(){
    return view('admin.profile.profile');
});
//role
Route::get('home', 'RoleController@role');
Route::post('admin', 'RoleController@role' );
Route::get('admin', function(){
    return redirect()->route('listProduct');
})->middleware('role')->middleware('auth');
//end admin

///////////////////////////Users
//Feedback
Route::get('contact-us', function(){
    return view('contact-us');
})->name('contact-us');
//about-us
Route::get('about-us', function(){
    return view('about-us');
})->name('about-us');
//shipping-policy
Route::get('shipping-policy', function(){
    return view('shipping-policy');
})->name('shipping-policy');
//payment
Route::get('payment', function(){
    return view('payment');
})->name('payment');
//guarantee
Route::get('guarantee',function(){
    return view('guarantee');
})->name('guarantee');
//brand
Route::get('brand', function(){
    return view('brand');
})->name('brand');
//thank-you
Route::get('thank-you', function(){
    return view('thank-you');
})->name('thank-you');
//report
Route::get('report' , function(){
    return view('users.cart.report');
})->name('print');

//logout
Route::get('logout', function () {
    Auth::logout();
    return redirect()->route('homepage');
})->name('logout');

////// User cart
//category
Route::get('category', 'CategoryController@category');
Route::post('category/search', 'CategoryController@search');
//example product
Route::get('product-detail/{id}', 'ProductController@productDetails');

Route::get('cart' , 'CartController@cart');
Route::get('checkout' , function(){
    return view('users.cart.checkout');
})->middleware('auth');
Route::get('order-review' , function(){
    return view('users.cart.order-review');
});

Route::get('cart/{id}', 'CartController@cart');



Route::get('search', [
		'as' => 'search',
		'uses' => 'SearchKeyController@getSearch'
]);
Route::get('report-product' , function(){
    return view('users.product.report');
});
Route::get('users/profile' , function(){
    return view('users.profile.profile');
});

Route::get('categories/{cate}', [
        'as' => 'categories',
        'uses' => 'ProductController@getCategories'
]);

///////// du thua chua dung den
//Route::get('category', 'ProductController@category');

//search cate
Route::get('searchCate/{in}', 'ProductController@filterCate');
//search brands
Route::get('searchBrand/{in}', 'ProductController@filterBrand');
//search Price
Route::get('searchPrice', 'ProductController@filterPrice' );
//Search Price Incre
Route::get('searchPriceAsc/{products}','ProductController@sortPrice');
//Route::get('search' , 'SearchController@search');
