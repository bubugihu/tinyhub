<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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
});

Route::get('admin/index', 'IndexController@indexAdmin');

Route::get('admin/product/listProduct', 'ProductController@listProduct');
Route::get('admin/product/createProduct', 'ProductController@createProduct');
Route::get('admin/product/categories', 'ProductController@categories');


Route::get('admin/customer/listCustomer', 'CustomerController@listCustomer');

Route::get('admin/order/listOrder', 'OrderController@listOrder');

Route::get('admin/listUsers', 'UserController@listUsers');

//Users
Route::get('productDetails', function(){
    return view('users.products.in-ear.productDetails');
});
route::get('productList',function(){
    return view('users.products.productList');
});
