<?php

namespace App\Http\Controllers;

use App\Brands;
use Illuminate\Http\Request;
use App\Http\Requests\CreateProductRequest;

class BrandsController extends Controller
{
    public function listBrands()
    {
        $brand = Brands::all();
        return view('admin.brands.listBrands', compact('brand'));
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
                'brandimg'             => 'required',
               
            ],
            [
                'brandTitle.required'            => 'Brand title can not be blank !',
                'brandTitle.unique'              => 'Brand title has already existed !',
                'brandTitle.regex'               => 'Brand title has 2 character and must be string, can not start with number !',
                'brandTitle.max'                 => 'Brand title has max 500 characters !',
                'brandDescription.required'      => 'Brand Description can not be blank !',
                'brandimg.required'              => 'Brand Image can not be blank !',
            ]
        );
        $b = new Brands();
        $b->brand_name  = trim($request->brandTitle);
        $b->description = trim($request->brandDescription);

        if ($request -> hasFile('brandimg')) {
            $file = $request -> file('brandimg');
            $ext = $file -> getClientOriginalExtension();

            if ($ext != 'jpg' && $ext != 'png' && $ext != 'jpeg') {
                return redirect("admin/product/createBrands")->with(['flash_level' => 'danger','flash_message' => 'You can only upload image with file jpg/png/jpeg !' ]);
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
                'brandTitle'           => 'bail|required|regex:/^[a-zA-Z]{2,}/i|max:255',
                'brandDescription'     => 'required',
               
            ],
            [
                'brandTitle.required'            => 'Brand title can not be blank !',
                'brandTitle.regex'               => 'Brand title has 2 character and must be string, can not start with number !',
                'brandTitle.max'                 => 'Brand title has max 500 characters !',
                'brandDescription.required'      => 'Brand Description can not be blank !',

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
