<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Middleware\Admin;
use App\Http\Requests\CategoryRequest;
use Illuminate\Http\Request;
use App\Product;
class CategoryController extends Controller
{   
    //Admin Category
    public function categories(){
        $cates = Category::paginate(5);
        return view('admin.category.categories', compact('cates'));
    }

    public function createCate(){
        return view('admin.category.createCategories');
    }

    // Post Create Categories
    public function postCate(Request $request){

        $this->validate(
            $request,
            [
                'cateTitle'           => 'bail|required|unique:Category,category_name|min:3|max:255',
                'cateDescription'     => 'required',
               
            ],
            [
                'cateTitle.required'          => 'Category Title can not be blank !',
                'cateTitle.unique'            => 'Category Title has already existed !',
                'cateTitle.min'               => 'Category Title has min 3 characters !',
                'cateTitle.max'               => 'Category Title has min 255 characters !',
                'cateDescription.required'    => 'Category Description can not be blank !',
                
            ]
        );
        
        $c = new Category();
        $c->category_name = $request->cateTitle;
        $c->description = $request->cateDescription;
        $c->save();
        
        //session()->put('alert', 'Create Category Successful !');
        // return redirect('admin/category/postCate')-;
        return redirect()->action('CategoryController@categories')->with(['flash_level' => 'success','flash_message' => 'Created Successfully !' ]);

    }

    // Function link to update page
    public function updateCates($id){
        $cate = Category::find($id);
        return view('admin.category.updateCategories', ['c' => $cate]);
    }

    // Post Create Categories
    public function postUpdateCate(Request $request, $id){

        $c = Category::find($id);

        $this->validate(
            $request,
            [
                'cateTitle'           => 'bail|required|min:3|max:255',
                'cateDescription'     => 'required',
               
            ],
            [
                'cateTitle.required'          => 'Category Title can not be blank !',
                'cateTitle.min'               => 'Category Title has min 3 characters !',
                'cateTitle.max'               => 'Category Title has min 255 characters !',
                'cateDescription.required'    => 'Category Description can not be blank !',
                
            ]
        );
        
        $c->category_name = $request->cateTitle;
        $c->description = $request->cateDescription;
        $c->save();
        
        //session()->put('alert', 'Create Category Successful !');
        // return redirect('admin/category/postCate')-;
        return redirect()->action('CategoryController@categories')->with(['flash_level' => 'success','flash_message' => 'Update Successfully !' ]);

    }

    //User Category
    public function category(){
        $product = Product::all()->where('status', '=', 0);
        return view('users.product.category', compact('product'));
    }
    
    //User Search Category
    public function search(Request $request){
        $inEar = $request->input('CateInEar');
        $onEar = $request->input('CateOnEar');
        $trueWireless = $request->input(('CateTrueWire'));
        $sony = $request->input('BrandSony');
        $jbl = $request->input('BrandJBL');
        $westone = $request->input('BrandWestone');
        $beats = $request->input('BrandBeats');
        $bang = $request->input('BrandBang');
        $orderByPrice = $orderByName = 'asc';
        if($request->input('SortBy') == 2  ){
            $orderByPrice = 'desc';
        }
        if($request->input('SortBy') == 4  ){
            $orderByName = 'desc';
        }
        $fromPrice = $request->input('fromPrice');
        $toPrice = $request->input('toPrice');

        $product= Product::join('brand','product.brand_id','=','brand.id')
                            ->join('category','product.category_id','=','category.id')
                            ->select('product.*', 'brand.*', 'category.*')
                            ->whereIn('category.category_name',[$inEar,$onEar,$trueWireless])
                            ->orwhereIn('brand.brand_name',[$sony,$jbl,$westone,$beats,$bang])
                            ->whereBetween('product.price' , [$fromPrice,$toPrice])
                            ->orderBy('product.price',$orderByPrice)
                            ->orderBy('product.product_title', $orderByName)
                            ->get();
        if($fromPrice > $toPrice){
            $message = 'Price is invalid';
            return view('users.product.category', compact('message','product'));
        } 
        if($product->count() > 0 )
            return view('users.product.category', compact('product'));

        $message = 'Not Found';
                return view('users.product.category', compact('product','message'));    
    }
}
