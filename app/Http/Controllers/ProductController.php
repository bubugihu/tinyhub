<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use App\Category;
use App\Brands;
class ProductController extends Controller {

    //user category
    public function category(){
        $product = Product::all();
        return view('users.product.category', compact('product'));
    }
    public function listProduct(){
        $product = Product::all();
        return view('admin.product.listProduct', compact('product'));
    }

    public function createProduct(){
        return view("admin.product.createProduct");
    }

    public function postCreate(Request $request){ 
        $this->validate(
            $request,
            [
                'prdname'      => 'bail|required|string|min:3|max:255',
                'prdprice'     => 'bail|required|integer|min:0|max:20000',
                'category'      => 'required|in:1,2,3',
                'prdbrand'     => 'required|in:1,2,3,4,5',
                'sdescription' => 'required',
                'ldescription' => 'required',
                'featureimg'   => 'required|file|image|mimes:jpeg,png,jpg|max:10240',
                'relateimg1'   => 'file|image|mimes:jpeg,png,jpg|max:10240',
                'relateimg2'   => 'file|image|mimes:jpeg,png,jpg|max:10240',
                'relateimg3'   => 'file|image|mimes:jpeg,png,jpg|max:10240'
            ],
            [
                'prdname.required'            => 'Product title can not be blank !',
                'prdname.string'              => 'Product title must be string !',
                'prdname.min'                 => 'Product title has min 3 characters !',
                'prdname.max'                 => 'Product title has min 255 characters !',
                'prdprice.required'           => 'Price can not be blank !',
                'prdprice.integer'            => 'Price must be integer number !',
                'prdprice.min'                => 'Price has min >= 0 !',
                'prdprice.max'                => 'Price has max <= 20000 !',
                'category.required'            => 'Please choose one of them !',
                'prdbrand.required'           => 'Please choose one of them !',
                'sdescription.required'       => 'Short Description can not be blank !',
                'ldescription.required'       => 'Long Description can not be blank !',
                'featureimg.required'         => 'Feature Image can not be blank !',
                'featureimg.mimes'            => 'Image must be .JPEG or .PNG or .JPG !',
                'featureimg.file'             => 'Image must be image file !',
                'featureimg.max'              => 'Image size can not over 10MB !',
                'relateimg1.mimes'            => 'Image must be .JPEG or .PNG or .JPG !',
                'relateimg1.file'             => 'Image must be image file !',
                'relateimg1.max'              => 'Image size can not over 10MB !',
                'relateimg1.required'         => 'Image can not be blank !',
                'relateimg2.mimes'            => 'Image must be .JPEG or .PNG or .JPG !',
                'relateimg2.file'             => 'Image must be image file !',
                'relateimg2.max'              => 'Image size can not over 10MB !',
                'relateimg2.required'         => 'Image can not be blank !',
                'relateimg3.mimes'            => 'Image must be .JPEG or .PNG or .JPG !',
                'relateimg3.file'             => 'Image must be image file !',
                'relateimg3.max'              => 'Image size can not over 10MB !',
                'relateimg3.required'         => 'Image can not be blank !'
            ]
        );

        $product = $request -> all();

        if ($request -> hasFile('featureimg')) {
            $file = $request -> file('featureimg');
            $extension = $file -> getClientOriginalExtension();

            if ($extension != 'jpg' && $extension != 'png' && $extension != 'jpeg') {
                return redirect("admin/product/createProduct") -> with('Message', 'You can only upload image with file jpg/png/jpeg');
            }
            $imageName = $file -> getClientOriginalName();
            $file -> move("img/feature", $imageName);

        } else {
            $imageName = null;
        }

        // $p = Product::find();
        // $p -> name        = $product['name'];
        // $p -> price       = $product['price'];
        // $p -> description = $product['description'];
        // $p -> image       = $imageName;
        // $p -> save();

        return redirect() -> action('ProductController@listProduct');
        // return view('admin.product.createProduct');
    }

    public function getCategories(){
        return view('admin.product.categories');
    }

    public function filterCate($in){
        $category = Category::where('category_name',$in)->first();
        $product = Category::find($category->id)->roleProduct()->get();
        return view('users.products.productList', compact('product'));
    }

    public function filterBrand($in){
        $brand = Brands::where('brand_name',$in)->first();
        $product = Brands::find($brand->id)->roleProduct()->get();
        return view('users.products.productList', compact('product'));
    }
    public function filterPrice(Request $request){
        $fromPrice = $request->input('fromPrice');
        $toPrice = $request->input('toPrice');
            if($fromPrice > $toPrice){
                $message = 'Price is invalid';
                $product = null;
                return view('users.products.productList', compact('message','product'));
            } 
            $product = Product::where('price','>=',$fromPrice)->where('price','<=',$toPrice)->get();
                if($product->count() > 0 )
                return view('users.products.productList', compact('product'));

                $message = 'Not Found';
                return view('users.products.productList', compact('product','message'));    
    }

}
