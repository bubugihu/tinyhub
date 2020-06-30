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
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller {

    
    //Function link to product list page
    public function listProduct(){
        $products = Product::paginate(5);
        return view('admin.product.listProduct', compact('products'));
    }

    // Function link to create product page
    public function createProduct(){
        return view("admin.product.createProduct");
    }

    // Function Create Product
    public function postCreate(Request $request){ 

        $this->validate(
            $request,
            [
                'prdname'      => 'bail|required|unique:Product,product_title|min:3|max:255',
                'prdprice'     => 'bail|required|min:0|max:20000',
                'prdcate'      => 'bail|required|not_in:0',
                'prdbrand'     => 'bail|required|not_in:0',
                'prdWarranty'  => 'required',
                'sdescription' => 'required',
                'ldescription' => 'required',
                'featureimg'   => 'required',
            ],
            [
                'prdname.required'            => 'Product title can not be blank !',
                'prdname.unique'              => 'Product title has already existed !',
                'prdname.string'              => 'Product title must be string !',
                'prdname.min'                 => 'Product title has min 3 characters !',
                'prdname.max'                 => 'Product title has min 255 characters !',
                'prdprice.required'           => 'Price can not be blank !',
                'prdprice.min'                => 'Price has min >= 0 !',
                'prdprice.max'                => 'Price has max <= 20000 !',
                'prdcate.required'            => 'Please choose one of them !',
                'prdbrand.required'           => 'Please choose one of them !',
                'prdWarranty.required'        => 'Warranty Period can not be blank !',
                'sdescription.required'       => 'Short Description can not be blank !',
                'ldescription.required'       => 'Long Description can not be blank !',
                'featureimg.required'         => 'Feature Image can not be blank !',
            ]
        );

        $p = new Product();
        $p->product_title = $request->prdname;
        $p->price = $request->prdprice;
        $p->brand_id = $request->prdbrand;
        $p->category_id = $request->prdcate;
        $p->warranty_period = $request->prdWarranty;
        $p->short_descriptions = $request->sdescription;
        $p->long_descriptions = $request->ldescription;


        if ($request->hasFile('featureimg')) {
            $file = $request->file('featureimg');
            $extension = $file->getClientOriginalExtension();

            if ($extension != 'jpg' && $extension != 'png' && $extension != 'jpeg') {
                return redirect("admin/product/createProduct")->with('Message', 'You can only upload image with file jpg/png/jpeg');
            }
            $imageName = $file->getClientOriginalName();
            $file->move("img/feature/", $imageName);
            $p->feature_image = $imageName;
        } else {
            $imageName = "";
        }
        $p->save();

        $gallery = new Gallery();
        if ($request->hasFile('galleryimg')) {
            $fileGL = $request->file('galleryimg');
            $ext   = $fileGL->getClientOriginalExtension();
            if ($ext != 'jpg' && $ext != 'png' && $ext != 'jpeg') {
                return Redirect('admin/product/createProduct')->with('Message', 'You can only upload image with file jpg/png/jpeg');
            }
            $nameGlImg = $fileGL->getClientOriginalName();
            $fileGL->move("img/gallery", $nameGlImg);
            $gallery->product_gallery = $nameGlImg;
        }
       
        $gallery->product_id = $request = $p->id;
        $gallery->save();

        return redirect() -> action('ProductController@listProduct')->with(['flash_level' => 'success','flash_message' => 'Created Successfully !' ]);
        // return view('admin.product.createProduct');
    }

    // Function link to update page
    public function updateProduct($id){
        $p = Product::find($id);
        $cates = Category::all();
        $brand = Brands::all();
        return view('admin.product.updateProduct', ['p' => $p, 'c' => $cates, 'b' => $brand]);
    }
    // Function Update Product
    public function postUpdate(Request $request, $id){
        $p  = Product::find($id);
        $gallery = Gallery::find($id);

        $this->validate(
            $request,
            [
                'prdname'      => 'bail|required|min:3|max:255',
                'prdprice'     => 'bail|required|min:0|max:20000',
                'prdcate'      => 'bail|required|not_in:0',
                'prdbrand'     => 'bail|required|not_in:0',
                'prdWarranty'  => 'required',
                'sdescription' => 'required',
                'ldescription' => 'required',
                'featureimg'   => 'required',
            ],
            [
                'prdname.required'            => 'Product title can not be blank !',
                'prdname.min'                 => 'Product title has min 3 characters !',
                'prdname.max'                 => 'Product title has min 255 characters !',
                'prdprice.required'           => 'Price can not be blank !',
                'prdprice.min'                => 'Price has min >= 0 !',
                'prdprice.max'                => 'Price has max <= 20000 !',
                'prdcate.required'            => 'Please choose one of them !',
                'prdbrand.required'           => 'Please choose one of them !',
                'prdWarranty.required'        => 'Warranty Period can not be blank !',
                'sdescription.required'       => 'Short Description can not be blank !',
                'ldescription.required'       => 'Long Description can not be blank !',
                'featureimg.required'         => 'Feature Image can not be blank !',
            ]
        );

        $p->product_title = $request->prdname;
        $p->price = $request->prdprice;
        $p->brand_id = $request->prdbrand;
        $p->category_id = $request->prdcate;
        $p->warranty_period = $request->prdWarranty;
        $p->short_descriptions = $request->sdescription;
        $p->long_descriptions = $request->ldescription;


        if ($request -> hasFile('featureimg')) {
            $file = $request -> file('featureimg');
            $extension = $file -> getClientOriginalExtension();

            if ($extension != 'jpg' && $extension != 'png' && $extension != 'jpeg') {
                return redirect("admin/product/updateProduct")->with('Message', 'You can only upload image with file jpg/png/jpeg');
            }
            $imageName = $file->getClientOriginalName();
            $file->move("img/feature/", $imageName);    
            $p->feature_image = $imageName;

        } else {
            $imageName = "";
        }
        $p ->save();

        $gallery = new Gallery();
        if ($request->hasFile('galleryimg')) {
            $fileGL = $request->file('galleryimg');
            $ext   = $fileGL->getClientOriginalExtension();
            if($ext !='jpg' && $ext !='png' && $ext !='jpeg'){
                return Redirect('admin/product/updateProduct')->with('Message', 'You can only upload image with file jpg/png/jpeg');
            }
            $nameGlImg =$fileGL->getClientOriginalName();
            $fileGL->move("img/gallery", $nameGlImg);
            $gallery->product_gallery = $nameGlImg;
        }
       
        $gallery->product_id = $request = $p->id;
        $gallery->save();

        return redirect()->action('ProductController@listProduct')->with(['flash_level' => 'success','flash_message' => 'Update Successfully !' ]);
    }

    
    public function getCategories(){
        return view('admin.product.categories');
    }


    //user product details
    public function productDetails($id)
    {
        $product = Product::find($id);
        $gallery = Gallery::where('product_id', $id)->get();
        $category = Category::find($product->category_id);
        $quantity = 1;
        //comment
        $comment = Comment::join('customer', 'comments.customer_id', '=', 'customer.id')
            ->join('users', 'customer.users_id', '=', 'users.id')
            ->join('product', 'comments.product_id', '=', 'product.id')
            ->select('users.*', 'customer.*', 'product.*', 'comments.*')->where('product_id',$id)->get();
        $customer='';
        if(Auth::check()){
            $customer=Customers::find(Auth::user()->id)->feature;
        }
        //end comment
        return view('users.product.productDetails', compact('product', 'gallery', 'category', 'quantity','comment','customer'));
    }
}
