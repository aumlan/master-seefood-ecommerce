<?php

namespace App\Http\Controllers\Backend\Product;

use App\Http\Controllers\Controller;
use App\Models\Attribute;
use App\Models\ConfigureAttribute;
use App\Models\Shipping;
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

    public function type($id){
        $attribute = Attribute::find($id);
        $configure= ConfigureAttribute::where('attribute_id',$id)->get();
        return view('Backend.product.attribute_configure.configure',compact('attribute','configure'));
    }

    public function fob($id){
        $attribute = Attribute::find($id);
        $configure= ConfigureAttribute::where('attribute_id',$id)->get();
        return view('Backend.product.attribute_configure.configure',compact('attribute','configure'));
    }

    public function shipping_index(){
        $attribute = ConfigureAttribute::where('attribute_id',5)->get();
        $configure= Shipping::all();
        return view('Backend.product.attribute_configure.shipping',compact('attribute','configure'));
    }

    public function shipping_store(Request $request){
        $request->validate([
            'destination'=>'required',
        ]);
        $charge_sea = 0;
        $charge_air = 0;
        if($request->charge_sea){
            $charge_sea = $request->charge_sea;
        }
        if($request->charge_air){
            $charge_air = $request->charge_air;
        }

        Shipping::create([
            'destination_name'=>$request->destination,
            'by_sea'=>$charge_sea,
            'by_air'=>$charge_air,
        ]);
        return back();
    }

    public function configureStore(Request $request,$attibute_id){
            $request->validate([
                'name'=>'required'
            ]);
        $charge = 0;
        if($request->charge){
            $charge = $request->charge;
//            $imageName = 'images/attributes/'.time().'.'.$request->icon->extension();
//            $request->icon->move(public_path('images/attributes'), $imageName);
        }else{
            $charge = 0;
//            $imageName=null;
        }

        ConfigureAttribute::create([
            'name'=>$request->name,
            'attribute_id'=>$attibute_id,
            'icon'=>$charge,
            'description'=>$request->description,
        ]);
        return back();
    }

    public function configureDelete($id){
        ConfigureAttribute::find($id)->delete();
        return back();
    }
}
