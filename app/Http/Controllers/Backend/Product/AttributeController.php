<?php

namespace App\Http\Controllers\Backend\Product;

use App\Http\Controllers\Controller;
use App\Models\Attribute;
use App\Models\ConfigureAttribute;
use Illuminate\Http\Request;

class AttributeController extends Controller
{
    public function index(){
       $attributes= Attribute::all();
        return view('Backend.product.attributes.attributes',compact('attributes'));
    }

    public function store(Request $request){
        $request->validate([
                'name'=>'required'
        ]);
        if($request->icon){
            $imageName = 'images/attributes/'.time().'.'.$request->icon->extension();
            $request->icon->move(public_path('images/attributes'), $imageName);
        }else{
            $imageName=null;
        }
        Attribute::create([
            'name'=>$request->name,
            'icon'=>$imageName,
            'description'=>$request->description,
        ]);
        return back();
    }

    public function deleteAttribute($id){
        Attribute::find($id)->delete();
        return back();
    }

    public function configure($id){
      $attribute = Attribute::find($id);
       $configure= ConfigureAttribute::where('attribute_id',$id)->get();
        return view('Backend.product.attribute_configure.configure',compact('attribute','configure'));
    }

    public function size($id){
        $attribute = Attribute::find($id);
        $configure= ConfigureAttribute::where('attribute_id',$id)->get();
        return view('Backend.product.attribute_configure.configure',compact('attribute','configure'));
    }

    public function color($id){
        $attribute = Attribute::find($id);
        $configure= ConfigureAttribute::where('attribute_id',$id)->get();
        return view('Backend.product.attribute_configure.configure',compact('attribute','configure'));
    }

    public function configureStore(Request $request,$attibute_id){
            $request->validate([
                'name'=>'required'
            ]);
            if($request->icon){
                $imageName = 'images/configure_attribute/'.time().'.'.$request->icon->extension();
                $request->icon->move(public_path('images/configure_attribute'), $imageName);
            }else{
                $imageName=null;
            }
            ConfigureAttribute::create([
                'name'=>$request->name,
                'attribute_id'=>$attibute_id,
                'icon'=>$imageName,
                'description'=>$request->description,
            ]);
            return back();
    }

    public function configureDelete($id){
        ConfigureAttribute::find($id)->delete();
        return back();
    }
}
