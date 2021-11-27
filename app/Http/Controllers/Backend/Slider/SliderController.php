<?php

namespace App\Http\Controllers\Backend\Slider;

use App\Models\Slider;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SliderController extends Controller
{
    public function index(){
        $sliders = Slider::all();
        return view('Backend.slider.index',compact('sliders'));
    }

    public function store(Request $request){
        $request->validate([
                'name'=>'required',
                'image' =>'required|image',
                'url'  =>'string',
        ]);

        if($request->image){
            $imageName = 'images/sliders/'.time().'.'.$request->image->extension();
            $request->image->move(public_path('images/sliders'), $imageName);
        }else{
            $imageName=null;
        }
        Slider::create([
            'slider_title'=>$request->name,
            'url'=>$request->url,
            'slug' =>Str::slug($request->name),
            'image'=>$imageName,
        ]);
        return back();
    }

    public function destroy($id){
        Slider::find($id)->delete();
        return back();
    }
}
