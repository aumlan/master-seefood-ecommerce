<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Manufacture;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ManufacturesController extends Controller
{
    public function index(){
        $manufacture=null;
        $manufactures = Manufacture::all();
        return view('Backend.manufacture.index',compact('manufactures','manufacture'));
    }

    public function store(Request $request){
        $request->validate([
                'name'=>'required'
        ]);
        if($request->icon){
            $imageName = 'images/manufactures/'.time().'.'.$request->icon->extension();
            $request->icon->move(public_path('images/manufactures'), $imageName);
        }else{
            $imageName=null;
        }
        Manufacture::create([
            'name'=>$request->name,
            'icon'=>$imageName,
            'description'=>$request->description,
        ]);
        return back();
    }

    public function UpdateManufacture(Request $request,$manufacture_id){

        $request->validate([
                'name'=>'required'
        ]);
        $oldData = Manufacture::find($manufacture_id);
        if($request->icon){

            // old image delete
            if(file_exists($oldData->icon)) {
                File::delete($oldData->icon);
            }
            $imageName = 'images/manufactures/'.time().'.'.$request->icon->extension();
            $request->icon->move(public_path('images/manufactures'), $imageName);
        }else{
            $imageName=$oldData->icon;
        }
        Manufacture::find($manufacture_id)->update([
            'name'=>$request->name,
            'icon'=>$imageName,
            'description'=>$request->description,
        ]);
        return  redirect()->back();
    }

    public function edit($id){
        $manufactures = Manufacture::all();
        $manufacture = Manufacture::find($id);
        return view('Backend.manufacture.index',compact('manufactures','manufacture'));
    }

    public function destroy($id){
        $manufacture=Manufacture::find($id);
        if(file_exists($manufacture->icon)) {
            File::delete($manufacture->icon);
        }
        $manufacture->delete();
        return back();
    }
}
