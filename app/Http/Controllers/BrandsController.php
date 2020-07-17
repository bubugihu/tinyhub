<?php

namespace App\Http\Controllers;

use App\Brands;
use Illuminate\Http\Request;
use App\Http\Requests\CreateProductRequest;
use App\Product;

class BrandsController extends Controller
{
    public function listBrands()
    {
        $brand = Brands::all();
        $product = Product::all();
        return view('admin.brands.listBrands', compact('brand', 'product'));
    }

    public function deleteBrands($id){
        Brands::find($id)->delete();
        return redirect() -> action('BrandsController@listBrands')->with(['flash_level' => 'success','flash_message' => 'Delete Successfully !' ]);
    }

    public function createBrand(){
        return view("admin.brands.createBrands");
    }

    public function postBrands(Request $request){
        $this->validate(
            $request,
            [
                'brandTitle'           => 'bail|required|unique:Brand,brand_name|regex:/^[a-zA-Z]{2,}/i|max:255',
                'brandDescription'     => 'required',
                'brandimg'             => 'bail|required|image|max:10240',
               
            ],
            [
                'brandTitle.required'            => 'Brand title can not be blank !',
                'brandTitle.unique'              => 'Brand title has already existed !',
                'brandTitle.regex'               => 'Brand title has 2 character and must be string, can not start with number !',
                'brandTitle.max'                 => 'Brand title has max 255 characters !',
                'brandDescription.required'      => 'Brand Description can not be blank !',
                'brandimg.required'              => 'Brand Image can not be blank !',
                'brandimg.image'                 => 'Brand Image must be image file !',
                'brandimg.max'                   => 'Brand Image must be less than 10MB !',
            ]
        );
        $b = new Brands();
        $b->brand_name  = trim($request->brandTitle);
        $b->description = trim($request->brandDescription);

        if ($request -> hasFile('brandimg')) {
            $file = $request -> file('brandimg');
            $ext = $file -> getClientOriginalExtension();

            if ($ext != 'jpg' && $ext != 'png' && $ext != 'jpeg') {
                return redirect("admin/brands/createBrands")->with(['flash_level' => 'danger','flash_message' => 'You can only upload image with file jpg/png/jpeg !' ]);
            }
            $imageName = $file->getClientOriginalName();
            $file->move("img/brands/", $imageName);    
            $b->brand_image = $imageName;

        } else {
            $imageName = "";
        }
        $b ->save();

        return redirect() -> action('BrandsController@listBrands')->with(['flash_level' => 'success','flash_message' => 'Created Successfully !' ]);
    }

    // Function link to update page
    public function updateBrands($id){
        $brand = Brands::find($id);
        return view('admin.brands.updateBrands', ['b' => $brand]);
    }

    public function postUpdateBrands(Request $request, $id){

        $b = Brands::find($id);

        $this->validate(
            $request,
            [
                //'brandTitle'           => 'unique:Brand,brand_name,' .$b->id,
                'brandTitle'           => 'bail|required|regex:/^[a-zA-Z]{2,}/i|max:255|unique:Brand,brand_name,' .$b->id,
                'brandDescription'     => 'required',
                'brandimg'             => 'bail|image|max:10240',
               
            ],
            [
                'brandTitle.required'            => 'Brand title can not be blank !',
                'brandTitle.regex'               => 'Brand title has 2 character and must be string, can not start with number !',
                'brandTitle.max'                 => 'Brand title has max 255 characters !',
                'brandTitle.unique'              => 'Brand title has already existed !',
                'brandDescription.required'      => 'Brand Description can not be blank !',
                'brandimg.image'                 => 'Brand Image must be image file !',
                'brandimg.max'                   => 'Brand Image must be less than 10MB !',

            ]
        );
        $b->brand_name  = trim($request->brandTitle);
        $b->description = trim($request->brandDescription);

        if ($request -> hasFile('brandimg')) {
            $file = $request -> file('brandimg');
            $ext = $file -> getClientOriginalExtension();
            
            if ($ext != 'jpg' && $ext != 'png' && $ext != 'jpeg') {
                return redirect("admin/product/updateBrands")->with(['flash_level' => 'danger','flash_message' => 'You can only upload image with file jpg/png/jpeg !' ]);
            }
            $imageName = $file->getClientOriginalName();
            $file->move("img/brands/", $imageName);    
            $b->brand_image = $imageName;

        } else {
            $imageName = "";
        }
        $b ->save();

        return redirect() -> action('BrandsController@listBrands')->with(['flash_level' => 'success','flash_message' => 'Update Successfully !' ]);
    }

    public function getBrands(){
        $brands = Brands::all();
        $stt = 1; 
        return view("brand", ['b' => $brands, 'stt' => $stt]);
    }


}
