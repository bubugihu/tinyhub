<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\Http\Requests\CreateProductRequest;
use App\Product;

class ProductController extends Controller {

    public function listProduct(){
        $products = Product::all();
        return view('admin.product.listProduct') -> with(['products' => $products]);;
    }

    public function createProduct(){
        return view("admin.product.createProduct");
    }

    public function postCreate(Request $request){ 
        $this->validate(
            $request,
            [
                'prdname'      => 'bail|required|string|min:3|max:255',
                'prdprice'     => 'bail|required|double|min:0|max:20000',
                'prdcate'      => 'bail|required',
                'prdbrand'     => 'bail|required',
                'sdescription' => 'required',
                'ldescription' => 'required',
                'featureimg'   => 'bail|required|file|image|mimes:jpeg,png,jpg|max:10240',
                'relateimg1'   => 'bail|file|image|mimes:jpeg,png,jpg|max:10240',
                'relateimg2'   => 'bail|file|image|mimes:jpeg,png,jpg|max:10240',
                'relateimg3'   => 'bail|file|image|mimes:jpeg,png,jpg|max:10240'
            ],
            [
                'prdname.required'            => 'Product title can not be blank !',
                'prdname.string'              => 'Product title must be string !',
                'prdname.min'                 => 'Product title has min 3 characters !',
                'prdname.max'                 => 'Product title has min 255 characters !',
                'prdprice.required'           => 'Price can not be blank !',
                'prdprice.min'                => 'Price has min >= 0 !',
                'prdprice.max'                => 'Price has max <= 20000 !',
                'prdcate.required'            => 'Please choose one of them !',
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


}
