<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Banner;
class BannerController extends Controller
{   
    //show banner
    public function listBanner(){
        $banners = Banner::all();
        return view('admin.banners.listBanner', compact('banners'));
    }


    //delete banner
    public function deleteBanners($id){
        Banner::find($id)->delete();
        return redirect()->action('BannerController@listBanner')->with(['flash_level' => 'success','flash_message' => 'Banner has been deleted !' ]);
    }

    //create banner
    public function postCreateBanners(Request $request){
        $this->validate(
            $request,
            [
                'title'             => 'bail|required|string|min:3|max:100',
                'content'           => 'bail|required|string|min:0|max:20000',
                'files'             => 'bail|required|file|image|mimes:jpeg|max:10240',
            ],
        );

        $b = new Banner();
        $b->ban_title = $request->title;
        $b->ban_content = $request->content;
        
        $file = $request -> file('files');
        $imageName = $file->getClientOriginalName();
        $file->move("img/banner/", $imageName);    
        $b->ban_image = $imageName;
        $b ->save();

        return redirect()->action('BannerController@listBanner')->with(['flash_level' => 'success','flash_message' => 'Banner has been created !' ]);
    }

    //update banner form
    public function updateBanners($id){
        $b = Banner::find($id);
        return view('admin.banners.updateBanner', compact('b'));
    }


    // update banner
    public function postUpdateBanners(Request $request){
        $this->validate(
            $request,
            [
                'title'             => 'bail|required|string|min:3|max:100',
                'content'           => 'bail|required|string|min:0|max:20000',
                'files'             => 'bail|file|image|mimes:jpg,png,jpeg|max:10240',
            ],
        );
        $b = Banner::find($request->id);
        $b->ban_title = $request->title;
        $b->ban_content = $request->content;
        if($request->hasFile('files')){
        $file = $request->file('files');
        $imageName = $file->getClientOriginalName();
        $file->move("img/banner/", $imageName);    
        $b->ban_image = $imageName;
        $b ->save();
        }else
        $b->save();
        

        return redirect()->action('BannerController@listBanner')->with(['flash_level' => 'success','flash_message' => 'Banner has been updated !' ]);
    }
}
