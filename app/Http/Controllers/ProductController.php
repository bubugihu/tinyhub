<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use App\Http\Requests\CreateProductRequest;
use App\Category;
use App\Brands;
use App\Comment;
use App\Customers;
use App\Gallery;
use Input;
use Illuminate\Support\Facades\Auth;

// class ProductController extends Controller
// {

//     //Function link to product list page
//     public function listProduct()
//     {   
//         $stt = 1;
//         $products = Product::join('category', 'category.id', '=', 'product.category_id')
//         ->join('brand', 'brand.id', '=', 'product.brand_id')
//         ->where('product.status', '=', 0)
//         ->select('product.*' , 'category.category_name', 'brand.brand_name')
//         ->orderBy('product.id','desc')
//         ->paginate(30);
//         return view('admin.product.listProduct', compact('products','stt'));
//     }

//     // Function link to create product page
//     public function createProduct()
//     {
//         $cates = Category::all();
//         $brand = Brands::all();
//         return view("admin.product.createProduct", compact('cates', 'brand'));
//     }

//     // Function Create Product
//     public function postCreate(Request $request)
//     {

//         $this->validate(
//             $request,
//             [
//                 'prdname'      => 'bail|required|unique:Product,product_title|regex:/^[a-zA-Z]{2,}/i|max:255',
//                 'prdprice'     => 'bail|required|numeric|min:1|max:10000',
//                 'prdcate'      => 'bail|required|not_in:0',
//                 'prdbrand'     => 'bail|required|not_in:0',
//                 'prdWarranty'  => 'required',
//                 'sdescription' => 'required',
//                 'ldescription' => 'required',
//                 'featureimg'   => 'bail|required|image|max:10240',
//             ],
//             [
//                 'prdname.required'            => 'Product title can not be blank !',
//                 'prdname.unique'              => 'Product title has already existed !',
//                 'prdname.regex'               => 'Product title has 2 character and must be string, can not start with number !',
//                 'prdname.min'                 => 'Product title has min 3 characters !',
//                 'prdname.max'                 => 'Product title has max 255 characters !',
//                 'prdprice.required'           => 'Price can not be blank !',
//                 'prdprice.numeric'            => 'Price must be number !',
//                 'prdprice.min'                => 'Price must be greater than 0 !',
//                 'prdprice.max'                => 'Price must be less than 10000 !',
//                 'prdcate.required'            => 'Please choose one of them !',
//                 'prdbrand.required'           => 'Please choose one of them !',
//                 'prdWarranty.required'        => 'Warranty Period can not be blank !',
//                 'sdescription.required'       => 'Short Description can not be blank !',
//                 'ldescription.required'       => 'Long Description can not be blank !',
//                 'featureimg.required'         => 'Feature Image can not be blank !',
//                 'featureimg.image'            => 'Feature Image must be image file !',
//                 'featureimg.max'             => 'Feature Image must be less than 10MB !',
//             ]
//         );

//         $p = new Product();
//         $p->product_title       = trim($request->prdname);
//         $p->price               = trim($request->prdprice);
//         $p->brand_id            = trim($request->prdbrand);
//         $p->category_id         = trim($request->prdcate);
//         $p->warranty_period     = trim($request->prdWarranty);
//         $p->short_descriptions  = trim($request->sdescription);
//         $p->long_descriptions   = trim($request->ldescription);


//         if ($request->hasFile('featureimg')) {
//             $file = $request->file('featureimg');
//             $extension = $file->getClientOriginalExtension();

//             if ($extension != 'jpg' && $extension != 'png' && $extension != 'jpeg') {
//                 return redirect("admin/product/createProduct")->with(['flash_level' => 'danger', 'flash_message' => 'You can only upload image with file .jpg | .png | .jpeg !']);
//             }
//             $imageName = $file->getClientOriginalName();
//             $file->move("img/feature/", $imageName);
//             $p->feature_image = $imageName;
//         } else {
//             $imageName = "";
//         }
//         $p->save();

//         // Function gallery upload
//         $product_id = $p->id;
//         if($request->hasFile('galleryimg')){
//             foreach ($request->file('galleryimg') as $file) {
//                 $product_gallery = new Gallery();
//                 if (isset($file)) {
//                     $ext   = $file->getClientOriginalExtension();
//                         if ($ext != 'jpg' && $ext != 'png' && $ext != 'jpeg') {
//                             return Redirect('admin/product/createProduct')->with(['flash_level' => 'danger', 'flash_message' => 'You can only upload image with file .jpg | .png | .jpeg !']);
//                         }
//                     $product_gallery->product_gallery = $file->getClientOriginalName();
//                     $product_gallery->product_id = $product_id;
//                     $file->move("img/gallery", $file->getClientOriginalName());
//                     $product_gallery->save();
//                 }
//             }
//         }
//         return redirect()->action('ProductController@listProduct')->with(['flash_level' => 'success', 'flash_message' => 'Update Successfully !']);
//     }

//     // Function link to update page
//     public function updateProduct($id)
//     {
//         $p = Product::find($id);
//         $cates = Category::all();
//         $brand = Brands::all();
//         $gallery = Gallery::where('product_id', $id)->get();
//         return view('admin.product.updateProduct', ['p' => $p, 'c' => $cates, 'b' => $brand, 'g' => $gallery]);
//     }

//     // Function link to update page
//     public function detailsProduct($id)
//     {
//         $no=0;
//         $pro = Product::join('category', 'product.category_id', '=', 'category.id')
//             ->join('brand', 'product.brand_id', '=', 'brand.id')
//             ->where('product.id', $id)
//             ->select('category.category_name', 'brand.brand_name', 'product.*')->first();
//         $product = Product::find($id);
//         $galleryFea = Gallery::where('product_id', $id)->get();
//         $galleryThum = Gallery::where('product_id', $id)->get();
//         return view('admin.product.detailsProduct', compact('pro','product','galleryFea','galleryThum','no'));
//     }

//     // Function Update Product
//     public function postUpdate(Request $request, $id)
//     {
//         $pId = Product::find($id);
        
//         $this->validate(
//             $request,
//             [
                
//                 'prdname'      => 'bail|required|regex:/^[a-zA-Z]{2,}/i|max:255|unique:Product,product_title,' .$pId->id,
//                 'prdprice'     => 'bail|required|numeric|min:1|max:10000',
//                 'prdcate'      => 'bail|required|not_in:0',
//                 'prdbrand'     => 'bail|required|not_in:0',
//                 'prdWarranty'  => 'required',
//                 'sdescription' => 'required',
//                 'ldescription' => 'required',
//                 'featureimg'   => 'bail|image|mimes:jpg,png,jpeg|max:10240',
//             ],
//             [
//                 'prdname.required'            => 'Product title can not be blank !',
//                 'prdname.regex'               => 'Product title has 2 character and must be string, can not start with number !',
//                 'prdname.unique'              => 'Product title has already existed !',
//                 'prdname.max'                 => 'Product title has max 255 characters !',
//                 'prdprice.required'           => 'Price can not be blank !',
//                 'prdprice.numeric'            => 'Price must be number !',
//                 'prdprice.min'                => 'Price must be greater than 0 !',
//                 'prdprice.max'                => 'Price must be less than 10000 !',
//                 'prdcate.required'            => 'Please choose one of them !',
//                 'prdbrand.required'           => 'Please choose one of them !',
//                 'prdWarranty.required'        => 'Warranty Period can not be blank !',
//                 'sdescription.required'       => 'Short Description can not be blank !',
//                 'ldescription.required'       => 'Long Description can not be blank !', 
//                 'featureimg.image'            => 'Feature Image must be image file !',
//                 'featureimg.max'              => 'Feature Image must be less than 10MB !',
//             ]
//         );
//         //set old product to hide
//         Product::where('product_title',trim($request->prdname))->update(['status' => 1]);
//         //
//         $p = new Product();
//         $p->product_title       = trim($request->prdname);
//         $p->price               = trim($request->prdprice);
//         $p->brand_id            = trim($request->prdbrand);
//         $p->category_id         = trim($request->prdcate);
//         $p->warranty_period     = trim($request->prdWarranty);
//         $p->short_descriptions  = trim($request->sdescription);
//         $p->long_descriptions   = trim($request->ldescription);


//         if ($request->hasFile('featureimg')) {
//             $file = $request->file('featureimg');
//             $extension = $file->getClientOriginalExtension();

//             if ($extension != 'jpg' && $extension != 'png' && $extension != 'jpeg') {
//                 return redirect("admin/product/updateProduct")->with(['flash_level' => 'danger','flash_message' => 'You can only upload image with file .jpg | .png | .jpeg!' ]);
//             }
//             $imageName = $file->getClientOriginalName();
//             $file->move("img/feature/", $imageName);
//             $p->feature_image = $imageName;
//             $p->save();
//         } else 
//         $p->feature_image = $pId->feature_image;
//         $p->save();
    
//         // Function gallery upload
//         if($request->hasFile('galleryimg')){
//             foreach ($request->file('galleryimg') as $file) {
//                 $product_gallery = new Gallery();
//                 if (isset($file)) {
//                     $ext   = $file->getClientOriginalExtension();
//                         if ($ext != 'jpg' && $ext != 'png' && $ext != 'jpeg') {
//                             return Redirect('admin/product/createProduct')->with(['flash_level' => 'danger', 'flash_message' => 'You can only upload image with file .jpg | .png | .jpeg !']);
//                         }
//                     $product_gallery->product_gallery = $file->getClientOriginalName();
//                     $product_gallery->product_id = $p->id;
//                     $file->move("img/gallery", $file->getClientOriginalName());
//                     $product_gallery->save();
//                 }
//             }
//         }else{
//             $product_gallery = Gallery::where('product_id',$pId)->get();
//             foreach($product_gallery as $oldGallery){
//                 $newGallery = new Gallery();
//                 $newGallery->product_gallery = $oldGallery->product_gallery;
//                 $newGallery->product_id = $p->id;
//                 $newGallery->save();
//             }
//         }

//         return redirect()->action('ProductController@listProduct')->with(['flash_level' => 'success', 'flash_message' => 'Update Successfully !']);
//     }

//     // Function delete product
//     public function deleteProduct($id)
//     {
//         Product::where('id', $id)
//             ->update(['status' => 1]);

//         return back()->with(['flash_level' => 'success', 'flash_message' => 'Delete Successfully !']);
//     }

//     public function getCategories()
//     {
//         return view('admin.product.categories');
//     }

//     ////////////////////user product details
//     public function productDetails($id)
//     {
//         $product = Product::find($id);
//         //
//         if($product->status == 1)
//             return abort(404);
//         else{
//         $galleryFea = Gallery::where('product_id', $id)->get();
//         $galleryThum = Gallery::where('product_id', $id)->get();
//         $category = Category::find($product->category_id);
//         $brand = Brands::find($product->brand_id);
//         $quantity = 1;
//         $no=0;
//         //comment
//         $comment = Comment::join('customer', 'comments.customer_id', '=', 'customer.id')
//             ->join('users', 'customer.users_id', '=', 'users.id')
//             ->join('product', 'comments.product_id', '=', 'product.id')
//             ->where('comments.product_id', $id)
//             ->where('comments.cmt_status','1')
//             ->orderBy('comments.created_at', 'desc')
//             ->select('users.*', 'customer.*', 'product.*', 'comments.*')->get();
//         $customer = '';
//         if (Auth::check()) {
//             $customer = Customers::where('users_id', Auth::user()->id)->first()->feature;
//         }
//         //end comment
//         //Similar Product
//         $similar = Product::where('id', '<>', $id)->where('category_id', $product->category_id)->where('status',0)
//             ->select('product.*')->take(4)->get();

//         //End Similar Product
//         //best seller
//         $best = Product::where('status',0)->orderBy('sold_out', 'desc')->limit(4)->get();
//         //end best
//         return view('users.product.productDetails', compact('product','galleryFea','galleryThum', 'category', 'brand', 'quantity', 'comment', 'customer', 'similar','no','best'));
//         }
        
//     }

//     public function postCommentUser(Request $request, $idProduct, $idCustomer)
//     {
//         $comment = Comment::where('customer_id', $idCustomer)->where('product_id', $idProduct)->get();
//         $commentCustomer = $idCustomer;
//         $commentProduct = $idProduct;
//         $this->validate(
//             $request,
//             [
//                 'postComment' => 'bail|required|min:1|max:150',
//             ],
//             [
//                 'postComment.required' => 'Comment can not be blank !',
//                 'postComment.min' => 'Product title has min 1 characters !',
//                 'postComment.max' => 'Product title has max 150 characters !',
//             ]
//         );
//         $comment = new Comment();
//         $comment->cmt_content = $request->postComment;
//         $comment->customer_id = $commentCustomer;
//         $comment->product_id = $commentProduct;

//         $comment->save();

//         return redirect('product-detail/' . $idProduct);
//     }

//     public function reportProduct(){
//         $products = Product::join('category','product.category_id','=','category.id')
//                             ->join('brand','product.brand_id','=','brand.id')
//                             ->select('brand.brand_name','category.category_name','product.*')->get();
//         return view('admin.reportProduct', compact('products'));
//     }
// }
