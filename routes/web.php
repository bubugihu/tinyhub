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
//category
Route::get('admin/category/categories', 'CategoryController@categories');

//brands

//order
Route::get('admin/order/listOrder', 'OrderController@listOrder');

//comment

//banner
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
//report
Route::get('report' , function(){
    return view('users.cart.report');
})->name('print');

//logout
Route::get('logout', function () {
    Auth::logout();
    return redirect()->route('homepage');
})->name('logout');

//
Route::get('cart' , 'CartController@cart');
Route::get('checkout' , function(){
    return view('users.cart.checkout');
})->middleware('auth');
Route::get('order-review' , function(){
    return view('users.cart.order-review');
});



//nana
Route::get('productDetails', function(){
    return view('users.products.in-ear.productDetails');
});

route::get('products',function(){
    return view('users.in-ear.products');
});
Route::get('product-detail', function(){
    return view('users.in-ear.product-detail');
});

Route::get('report-product' , function(){
    return view('users.products.report');
});



///////// du thua chua dung den
Route::get('category', 'ProductController@category');
//search cate
Route::get('searchCate/{in}', 'ProductController@filterCate');
//search brands
Route::get('searchBrand/{in}', 'ProductController@filterBrand');
//search Price
Route::get('searchPrice', 'ProductController@filterPrice' );
//Search Price Incre
Route::get('searchPriceAsc/{products}','ProductController@sortPrice');
//Route::get('search' , 'SearchController@search');