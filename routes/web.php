<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', function () {
    return view('homepage');
})->name('homepage');

Route::get('admin/index', 'IndexController@indexAdmin');

// Product Route
Route::get('admin/product/listProduct', 'ProductController@listProduct');
Route::get('admin/product/createProduct', 'ProductController@createProduct');
Route::post('admin/product/postCreate', 'ProductController@postCreate');
Route::get('admin/product/categories', 'ProductController@getCategories');

// Brands Route
Route::get('admin/brands/listBrands', 'BrandsController@listBrands');
Route::get('admin/brands/createBrands', 'BrandsController@createBrands');

// Comment & Feedback Route
Route::get('admin/comment/commentList', 'CommentController@commentList');
Route::get('admin/comment/feedbackList', 'CommentController@feedbackList');

// Customer Route
Route::get('admin/customer/listCustomer', 'CustomerController@listCustomer');

// Oders Route
Route::get('admin/order/listOrder', 'OrderController@listOrder');

// Users Route
Route::get('admin/listUsers', 'UserController@listUsers');


Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');


// Blank Page Route Section
Route::get('/about-us', function(){
    return view('about-us');
});
Route::get('/shipping-policy', function(){
    return view('shipping-policy');
});
Route::get('/payment', function(){
    return view('payment');
});
Route::get('/guarantee', function(){
    return view('guarantee');
});
Route::get('/contact-us', function(){
    return view('contact-us');
});
Route::get('/brand', function(){
    return view('brand');
});
route::get('products',function(){
    return view('users.in-ear.products');
});
Route::get('product-detail', function(){
    return view('users.in-ear.product-detail');
});

Route::get('search', [
		'as' => 'search',
		'uses' => 'SearchKeyController@getSearch'
]);

Route::get('categories/{cate}', [
        'as' => 'categories',
        'uses' => 'ProdutController@getCategories'
]);
