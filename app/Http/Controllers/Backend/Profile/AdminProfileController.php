<?php

namespace App\Http\Controllers\Backend\Profile;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class AdminProfileController extends Controller
{
    public function index(){

        return view('Backend.profile.profile');
    }

    public function update(Request $request,$admin_id){

       $image = $request->file('image');


       if($image){
           
            $oldData = Admin::find($admin_id);
            // old image delete
            if(file_exists($oldData->image)) {
                File::delete($oldData->image);
            }
            $name=Str::slug($request->name,'-');
            $imageName = 'images/profile/'.uniqid().'-'.$name.'-'.time().'.'.$request->image->extension();
            $request->image->move(public_path('images/profile'), $imageName);

            $data = $request->all();
            $data['image']=$imageName;

            Admin::find($admin_id)->update($data);

       }else{
           Admin::find($admin_id)->update($request->all());
       }

       return redirect()->back();

    }
}
