<?php

namespace App\Http\Controllers\Backend\Banner;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $banners = Banner::all();
        return view('Backend.banner.index',compact('banners'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'bannerType'=>'required',
            'banner_title' =>'required',
        ]);

        if($request->image){
            $imageName = 'images/banners/'.time().uniqid().'.'.$request->image->extension();
            $request->image->move(public_path('images/banners'), $imageName);
        }else{
            $imageName=null;
        }

        if($request->image_two){
            $imageName2 = 'images/banners/'.time().uniqid().'.'.$request->image_two->extension();
            $request->image_two->move(public_path('images/banners'), $imageName2);
        }else{
            $imageName2=null;
        }
        Banner::create([
            'type_of_banner'=>$request->bannerType,
            'banner_title'=>$request->banner_title,
            'banner_sub_title'=>$request->banner_sub_title,
            'banner_url'=>$request->url,
            'bg_color'=>$request->color_pick,
            'banner_image_one'=>$imageName,
            'banner_image_two'=>$imageName2,
            'isPublished'=>$request->publish,
        ]);
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $banner=Banner::find($id);
        return view('Backend.banner.edit',compact('banner'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       $banner= Banner::find($id);
        if($request->image){
            // old image delete
            if(file_exists($banner->banner_image_one)){
                File::delete($banner->banner_image_one);
            }
            $imageName = 'images/banners/'.time().uniqid().'.'.$request->image->extension();
            $request->image->move(public_path('images/banners'), $imageName);
       }else{
            $imageName=$banner->banner_image_one;
       }

       if($request->image_two){
            // old image delete
            if(file_exists($banner->banner_image_two)){
                File::delete($banner->banner_image_two);
            }
            $imageName2= 'images/banners/'.time().uniqid().'.'.$request->image_two->extension();
            $request->image_two->move(public_path('images/banners'), $imageName2);
        }else{
            $imageName2=$banner->banner_image_two;
        }
        $banner->update([
            'banner_title'=>$request->banner_title,
            'banner_sub_title'=>$request->banner_sub_title,
            'banner_url'=>$request->url,
            'bg_color'=>$request->color_pick,
            'banner_image_one'=>$imageName,
            'banner_image_two'=>$imageName2,
            'isPublished'=>$request->publish,
        ]);
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $banner = Banner::find($id);
        if (File::exists($banner->banner_image_one))
        {
            File::delete($banner->banner_image_one);
        }
        if (File::exists($banner->banner_image_two))
        {
            File::delete($banner->banner_image_two);
        }
        $Is_Delete=$banner->delete();
        return redirect()->back();
    }
}
