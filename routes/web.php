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
Route::get('admin/users/createUser', function(){
    return view('admin.users.createUser');
});
Route::post('admin/users/createUser', 'UserController@createUser');
Route::get('admin/users/updateUser/{id}' , 'UserController@updateUser');
Route::post('admin/users/postUpdateUser', 'UserController@postUpdateUser');
//customer
Route::get('admin/customer/listCustomer', 'CustomerController@listCustomer');

//feedback
Route::get('admin/feedback/feedbackList', 'FeedbackController@feedbackList');
Route::get('admin/feedback/deleteFeedback/{id}', 'FeedbackController@deleteFeedback');
Route::get('admin/feedback/doneFeedback/{id}' , 'FeedbackController@doneFeedback');
Route::get('admin/feedback/pendingFeedback/{id}', 'FeedbackController@pendingFeedback');
Route::get('admin/feedback/onStatusFeedback/{id}', 'FeedbackController@onStatus');
Route::get('admin/feedback/offStatusFeedback/{id}', 'FeedbackController@offStatus');
//product
Route::get('admin/product/listProduct', 'ProductController@listProduct');
Route::get('admin/product/createProduct', 'ProductController@createProduct');
Route::post('admin/product/postCreate', 'ProductController@postCreate');
Route::get('admin/product/updateProduct/{id}', 'ProductController@updateProduct');
Route::post('admin/product/postUpdate/{id}', 'ProductController@postUpdate');
Route::get('admin/product/deleteProduct/{id}', 'ProductController@deleteProduct');
//category
Route::get('admin/category/categories', 'CategoryController@categories');
Route::get('admin/category/createCategories', 'CategoryController@createCate');
Route::post('admin/category/postCate', 'CategoryController@postCate');
Route::get('admin/category/updateCategories/{id}', 'CategoryController@updateCates');
Route::post('admin/category/postUpdateCate/{id}', 'CategoryController@postUpdateCate');
//brands
Route::get('admin/brands/listBrands' , 'BrandsController@listBrands');
Route::get('admin/brands/createBrands' , 'BrandsController@createBrand');
Route::post('admin/brands/postBrands' , 'BrandsController@postBrands');
Route::get('admin/brands/updateBrands/{id}' , 'BrandsController@updateBrands');
Route::post('admin/brands/postUpdateBrands/{id}' , 'BrandsController@postUpdateBrands');
//order
Route::get('admin/order/listOrder', 'OrderController@listOrder');

//comment
Route::get('admin/comment/listComment', 'CommentController@listComment');
//banner
Route::get('admin/banners/listBanner' , 'BannerController@listBanner');
Route::get('admin/banners/deleteBanners/{id}', 'BannerController@deleteBanners');
Route::get('admin/banners/createBanner', function (){
    return view('admin.banners.createBanner');
});
Route::post('admin/banners/postCreateBanners', 'BannerController@postCreateBanners');
Route::get('admin/banners/updateBanners/{id}', 'BannerController@updateBanners');
Route::post('admin/banners/postUpdateBanners', 'BannerController@postUpdateBanners');
//index
Route::get('admin/index', 'AdminController@index');

//profile
Route::get('admin/profile', function(){
    return view('admin.profile.profile');
});


///////////////////////////Users
//ajax Register
Route::get('ajaxRegisterEmail/{email}', 'AjaxController@registerEmail');
Route::get('ajaxRegisterPhone/{phone}', 'AjaxController@registerPhone');
//
//profile
Route::get('users/profile', function(){
    return view('users.profile.profile');
});
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
Route::get('brand', 'BrandsController@getBrands');
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
//feedback
Route::post('feedback/postFeedback', 'FeedbackController@postFeedback');
//////////////////////////// User cart
//////////////category
Route::get('category', 'CategoryController@category');
// Route::get('category', 'CategoryController@getcategories');
Route::post('category/search', 'CategoryController@search');
Route::get('category/search' ,'CategoryController@category' );
//example product
Route::get('product-detail/{id}', 'ProductController@productDetails');

//Check cart
Route::get('cart' , 'CartController@cart');
//buy now
Route::post('cart/shopping', 'CartController@shoppingCart');
Route::get('cart/shopping','CartController@cart');
//add cart
Route::post('cart/addCart/{id}', 'CartController@addCart');
Route::get('cart/addCart/{a}', function(){
    return abort(404);
})->where('a','[A-Za-z0-9]+');
// incre item
Route::post('cart/shopping/increItem', 'CartController@increCart');
//decre item
Route::post('cart/shopping/decreItem','CartController@decreCart');
//remove item
// Route::post('cart/shopping/removeItem', 'CartController@removeItem');
Route::get('cart/shopping/removeItem/{id}', 'CartController@removeItem');
//check out cart
Route::get('checkout' , 'CartController@checkout')->middleware('auth');
//order review
Route::post('cart/shopping/order-review', 'CartController@orderReview');
Route::get('cart/shopping/order-review', function(){
    return abort(404);
});
//thank you
Route::post('thank-you' , 'CartController@thankyou');
//check report
Route::get('cart/shopping/orderDetails/{id}', 'CartController@orderDetails');




/////////////////////////end cart
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
