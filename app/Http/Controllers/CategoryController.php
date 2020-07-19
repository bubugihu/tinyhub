<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Middleware\Admin;
use App\Http\Requests\CategoryRequest;
use Illuminate\Http\Request;
use App\Product;
use App\Brands;

// class CategoryController extends Controller
// {
//     //Admin Category
//     public function categories()
//     {
//         $cates = Category::paginate(9);
//         $product = Product::all();
//         return view('admin.category.categories', compact('cates','product'));
//     }

//     public function deleteCate($id){
//         Category::find($id)->delete();
//         return redirect()->action('CategoryController@categories')->with(['flash_level' => 'success', 'flash_message' => 'Delete Successfully !']);
//     }

//     public function createCate(){
//         return view('admin.category.createCategories');
//     }

//     // Post Create Categories
//     public function postCate(Request $request){

//         $this->validate(
//             $request,
//             [
//                 'cateTitle'           => 'bail|required|unique:Category,category_name|regex:/^[a-zA-Z]{2,}/i|max:255',
//                 'cateDescription'     => 'bail|required|max:255',
//                 'cateimg'             => 'bail|required|image|max:10240',
//             ],
//             [
//                 'cateTitle.required'          => 'Category Title can not be blank !',
//                 'cateTitle.unique'            => 'Category Title has already existed !',
//                 'cateTitle.regex'             => 'Category Title has 2 character and must be string, can not start with number !',
//                 'cateTitle.max'               => 'Category Title has max 255 characters !',
//                 'cateDescription.required'    => 'Category Description can not be blank !',
//                 'cateDescription.max'         => 'Category Description has max 255 characters !',
//                 'cateimg.required'            => 'Category Image can not be blank !',
//                 'cateimg.image'               => 'Category Image must be image file !',
//                 'cateimg.max'                 => 'Category Image must be less than 10MB !',
//             ]
//         );
        
//         $c = new Category();
//         $c->category_name = trim($request->cateTitle);
//         $c->description   = trim($request->cateDescription);

//         if ($request -> hasFile('cateimg')) {
//             $file = $request -> file('cateimg');
//             $ext = $file -> getClientOriginalExtension();

//             if ($ext != 'jpg' && $ext != 'png' && $ext != 'jpeg') {
//                 return redirect("admin/category/createCategories")->with(['flash_level' => 'danger','flash_message' => 'You can only upload image with file .jpg | .png | .jpeg !' ]);
//             }
//             $imageName = $file->getClientOriginalName();
//             $file->move("img/category/", $imageName);    
//             $c->category_image = $imageName;

//         } else {
//             $imageName = "";
//         }

//         $c->save();

//         //session()->put('alert', 'Create Category Successful !');
//         // return redirect('admin/category/postCate')-;
//         return redirect()->action('CategoryController@categories')->with(['flash_level' => 'success', 'flash_message' => 'Created Successfully !']);
//     }

//     // Function link to update page
//     public function updateCates($id){
//         $cate = Category::find($id);
//         return view('admin.category.updateCategories', ['c' => $cate]);
//     }

//     // Post Create Categories
//     public function postUpdateCate(Request $request, $id){

//         $c = Category::find($id);

//         $this->validate(
//             $request,
//             [
                
//                 'cateTitle'           => 'bail|required|regex:/^[a-zA-Z]{2,}/i|max:255|unique:Category,category_name,' .$c->id,
//                 'cateDescription'     => 'bail|required|max:255',
//                 'cateimg'             => 'bail|image|max:10240',
               
//             ],
//             [
//                 'cateTitle.required'          => 'Category Title can not be blank !',
//                 'cateTitle.regex'             => 'Category Title has 2 character and must be string, can not start with number !',
//                 'cateTitle.max'               => 'Category Title has max 255 characters !',
//                 'cateTitle.unique'            => 'Category Title has already existed !',
//                 'cateDescription.required'    => 'Category Description can not be blank !',
//                 'cateDescription.max'         => 'Category Description has max 255 characters !',
//                 'cateimg.image'               => 'Category Image must be image file !',
//                 'cateimg.max'                 => 'Category Image must be less than 10MB !',
                
//             ]
//         );
        
//         $c->category_name = trim($request->cateTitle);
//         $c->description   = trim($request->cateDescription);

//         if ($request -> hasFile('cateimg')) {
//             $file = $request -> file('cateimg');
//             $ext = $file -> getClientOriginalExtension();

//             if ($ext != 'jpg' && $ext != 'png' && $ext != 'jpeg') {
//                 return redirect("admin/category/createCategories")->with(['flash_level' => 'danger','flash_message' => 'You can only upload image with file .jpg | .png | .jpeg !' ]);
//             }
//             $imageName = $file->getClientOriginalName();
//             $file->move("img/category/", $imageName);    
//             $c->category_image = $imageName;

//         } else {
//             $imageName = "";
//         }

//         $c->save();
        
//         //session()->put('alert', 'Create Category Successful !');
//         // return redirect('admin/category/postCate')-;
//         return redirect()->action('CategoryController@categories')->with(['flash_level' => 'success','flash_message' => 'Update Successfully !' ]);

//     }

//     //User Category
//     public function category(){
//         $products = Product::where('status', '=', 0)->paginate(9);
//         $message = 'a';
//         return view('users.product.category', compact('products', 'message'));
//     }

//     //User filter Category
//     public function search(Request $request){
        
//         $orderByPrice = $orderByName = 'asc';
//         if($request->SortBy == 2 )
//         {
//             $orderByPrice = 'desc';
//         }
//         if($request->SortBy == 4)
//         {
//             $orderByName = 'desc';
//         }
//         $message = 'a';
//         $fromPrice = $request->input('fromPrice');
//         $toPrice = $request->input('toPrice');
//         //search
//             $products= Product::join('brand','product.brand_id','=','brand.id')
//                     ->join('category','product.category_id','=','category.id')
//                     ->where('product.status','=',0)
//                     ->whereBetween('product.price' , [$fromPrice,$toPrice])
//                     ->orderBy('product.price',$orderByPrice)
//                     ->orderBy('product.product_title', $orderByName)
//                     ->select('product.*', 'brand.brand_name', 'category.category_name')
//                     ->paginate(9);
//         if($fromPrice > $toPrice){
//             $message = 'Price is invalid !!!';
//             return view('users.product.category', compact('products','message'));
//         }
//         if($products->count() > 0 )
//             return view('users.product.category', compact('products','message'));    
//         $message = 'Not found !!!';
//         return view('users.product.category', compact('products','message'));
//     }


//     //filter Category
//     public function filterCate($in){
//         $message = 'a';
//         $category = Category::where('category_name',$in)->first();
//         $products = Product::where('category_id',$category->id)->where('status',0)->paginate(9);
//         return view('users.product.category', compact('products','message'));
//     }

//     //filter Brand
//     public function filterBrand($in){
//         $message = 'a';
//         $brand = Brands::where('brand_name',$in)->first();
//         $products = Product::where('brand_id',$brand->id)->where('status',0)->paginate(9);
//         return view('users.product.category', compact('products','message'));
//     }

//     //filter price name
//     public function filterPrice(Request $request){
//         $message = 'a';
//         $fromPrice = $request->input('fromPrice');
//         $toPrice = $request->input('toPrice');
//             if($fromPrice > $toPrice){
//                 $message = 'Price is invalid';
//                 $products = null;
//                 return view('users.product.category', compact('message','products'));
//             } 
//             $products = Product::where('price','>=',$fromPrice)->where('price','<=',$toPrice)->where('status',0)->paginate(9);
//                 if($products->count() > 0 )
//                 return view('users.product.category', compact('products','message'));

//                 $message = 'Not Found';
//                 return view('users.product.category', compact('products','message'));    
//     }
    
//     public function reportcategoryAndbrand(){
//         $category=Category::all();
//         $brand=Brands::all();
//         return view('admin.reportCateAndBrand', compact('category','brand'));
//     }
// }