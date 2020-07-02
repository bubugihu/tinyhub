<?php

use App\Category;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Product;
use App\Brands;
use App\Customers;
use App\Http\Middleware\User;

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
Route::get('/', function () {
    return view('homepage');
})->name('homepage');

//////////////////admin
//users
Route::get('admin/users/listUsers', 'UserController@listUsers');
Route::get('admin/users/createUser', function () {
    return view('admin.users.createUser');
});
Route::post('admin/users/createUser', 'UserController@createUser');
Route::get('admin/users/updateUser/{id}', 'UserController@updateUserForm');
// Route::post('admin/users/updateUser', 'UserController@updateUser');
//customer
Route::get('admin/customer/listCustomer', 'CustomerController@listCustomer');;
Route::get('admin/customer/updateCustomer/{id}', 'CustomerController@updateCustomer');
Route::post('admin/customer/postUpdateCustomer/{id}', 'CustomerController@postUpdateCustomer');

//feedback
Route::get('admin/feedback/feedbackList', 'FeedbackController@feedbackList');
//product
Route::get('admin/product/listProduct', 'ProductController@listProduct');
Route::get('admin/product/createProduct', 'ProductController@createProduct');
Route::post('admin/product/postCreate', 'ProductController@postCreate');
Route::get('admin/product/updateProduct/{id}', 'ProductController@updateProduct');
Route::post('admin/product/postUpdate/{id}', 'ProductController@postUpdate');
//category
Route::get('admin/category/categories', 'CategoryController@categories');
Route::get('admin/category/createCategories', 'CategoryController@createCate');
Route::post('admin/category/postCate', 'CategoryController@postCate');
//brands
Route::get('admin/brands/listBrands', 'BrandsController@listBrands');
Route::get('admin/brands/createBrands', 'BrandsController@createBrand');
//order
Route::get('admin/order/listOrder', 'OrderController@listOrder');
Route::get('admin/order/onOrderStatus/{id}', 'OrderController@onOrderStatus');
Route::get('admin/order/offOrderStatus/{id}', 'OrderController@offOrderStatus');

//comment
Route::get('admin/comment/listComment', 'CommentController@listComment');
Route::get('admin/comment/onCommentStatus/{id}', 'CommentController@onCommentStatus');
Route::get('admin/comment/offCommentStatus/{id}', 'CommentController@offCommentStatus');
Route::get('admin/comment/deleteComment/{date}', 'CommentController@deleteComment');

//banner
Route::get('admin/banners/listBanner', 'BannerController@listBanner');
Route::get('admin/banners/createBanner', 'BannerController@createBanner');

//index
Route::get('admin/index', function () {
    return view('admin.index');
});
//profile
Route::get('admin/profile/{id}', 'UserController@profileAdmin');
// Route::get('admin/profile', function () {
//     return view('admin.profile.profile');
// });
//role
// Route::get('home', 'RoleController@role');
// Route::post('admin', 'RoleController@role' );
// Route::get('admin', function(){
//     return redirect()->route('listProduct');
// })->middleware('role')->middleware('auth');
//end admin

///////////////////////////Users
//profile
// Route::get('profile/{id}', 'CustomerController@profileCustomer');
Route::get('users/profile/{id}', 'UserController@profileUser');
//Feedback
Route::get('contact-us', function () {
    return view('contact-us');
})->name('contact-us');
//about-us
Route::get('about-us', function () {
    return view('about-us');
})->name('about-us');
//shipping-policy
Route::get('shipping-policy', function () {
    return view('shipping-policy');
})->name('shipping-policy');
//payment
Route::get('payment', function () {
    return view('payment');
})->name('payment');
//guarantee
Route::get('guarantee', function () {
    return view('guarantee');
})->name('guarantee');
//brand
Route::get('brand', function () {
    return view('brand');
})->name('brand');
//thank-you
Route::get('thank-you', function () {
    return view('thank-you');
})->name('thank-you');
//report
Route::get('report', function () {
    return view('users.cart.report');
})->name('print');

//logout
Route::get('logout', function () {
    Auth::logout();
    return redirect()->route('homepage');
})->name('logout');

//////////////////////////// User cart
//////////////category
Route::get('category', 'CategoryController@category');
Route::post('category/search', 'CategoryController@search');
//example product
Route::get('product-detail/{id}', 'ProductController@productDetails');

// //example image product
//Route::get('product-detail/{id}', 'ProductController@imageProduct');
// check cart
Route::get('cart', 'CartController@cart');
//buy now
Route::post('cart/shopping', 'CartController@shoppingCart');
Route::get('cart/shopping', 'CartController@cart');
//add cart
Route::post('cart/addCart/{id}', 'CartController@addCart');
Route::get('cart/addCart/{a}', function () {
    return abort(404);
})->where('a', '[A-Za-z0-9]+');
// incre item
Route::post('cart/shopping/increItem', 'CartController@increCart');
//decre item
Route::post('cart/shopping/decreItem', 'CartController@decreCart');
//remove item
Route::post('cart/shopping/removeItem/{id}', 'CartController@removeItem');
Route::get('cart/shopping/removeItem/{a}', function () {
    return abort(404);
})->where('a', '[A-Za-z0-9]+');

//check out cart
Route::get('checkout', function () {
    return view('users.cart.checkout');
})->middleware('auth');
Route::post('cart/shopping/order-review', 'CartController@orderReview');
Route::get('cart/shopping/order-review', function () {
    return abort(404);
});

//order review 
Route::get('cart/shopping/order-review', 'CartController@orderDetails');




/////////////////////////end cart
Route::get('search', [
    'as' => 'search',
    'uses' => 'SearchKeyController@getSearch'
]);
Route::get('report-product', function () {
    return view('users.product.report');
});
Route::get('users/profile', function () {
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
Route::get('searchPrice', 'ProductController@filterPrice');
//Search Price Incre
Route::get('searchPriceAsc/{products}', 'ProductController@sortPrice');
//Route::get('search' , 'SearchController@search');
