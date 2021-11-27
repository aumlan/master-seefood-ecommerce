<?php

namespace App\Http\Controllers\Backend\Brand;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\BrandModel;
use App\Models\BrandModelYear;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class BrandController extends Controller
{
    public function index(){
        $brand=null;
        $brands = Brand::all();
        return view('Backend.brand.index',compact('brands','brand'));
    }

    public function store(Request $request){
        $request->validate([
                'name'=>'required'
        ]);
        if($request->icon){
            $imageName = 'images/brand/'.time().'.'.$request->icon->extension();
            $request->icon->move(public_path('images/brand'), $imageName);
        }else{
            $imageName=null;
        }
        Brand::create([
            'name'=>$request->name,
            'icon'=>$imageName,
            'description'=>$request->description,
        ]);
        return back();
    }

    public function updateBrand(Request $request,$brand_id){

        $request->validate([
                'name'=>'required'
        ]);
        if($request->icon){
            $oldData = Brand::find($brand_id);
            // old image delete
            if(file_exists($oldData->icon)) {
                File::delete($oldData->icon);
            }
            $imageName = 'images/brand/'.time().'.'.$request->icon->extension();
            $request->icon->move(public_path('images/brand'), $imageName);
        }else{
            $imageName=null;
        }
        Brand::find($brand_id)->update([
            'name'=>$request->name,
            'icon'=>$imageName,
            'description'=>$request->description,
        ]);

        return  redirect(route('admin.brand.index')) ;
    }

    public function edit($id){
        $brands = Brand::all();
        $brand = Brand::find($id);
        return view('Backend.brand.index',compact('brands','brand'));
    }

    public function distroy($id){
        Brand::find($id)->delete();
        return back();
    }


    /**
     * Brand Model
     */

    public function brandModel_index(){
        $brandModel=null;
        $brandModels = BrandModel::all();
        $brands = Brand::all();
        return view('Backend.brandModel.index',compact('brandModels','brandModel', 'brands'));
    }

    public function brandModel_store(Request $request){
        $request->validate([
            'name'=>'required',
            'brand_id'=>'required'
        ]);

        BrandModel::create([
            'brand_id' => $request->brand_id,
            'name'=>$request->name,
        ]);
        return back();
    }

    public function getSubModel($id){
        $subModel= BrandModel::where('brand_id',$id)->get();
        return response()->json($subModel);
    }

    public function brandModel_update(Request $request,$brandModel_id){
        $request->validate([
            'name'=>'required',
            'brand_id'=>'required'
        ]);

        BrandModel::find($brandModel_id)->update([
            'name'=>$request->name,
            'brand_id'=>$request->brand_id,
        ]);
        return redirect(route('admin.brandModel.index')) ;
    }

    public function brandModel_edit($id){
        $brands = Brand::all();
        $brandModels = BrandModel::all();
        $brandModel = BrandModel::find($id);
        return view('Backend.brandModel.index',compact('brandModels','brandModel','brands'));
    }

    public function brandModel_distroy($id){
        BrandModel::find($id)->delete();
        return back();
    }


    /**
     * Brand Model Year
     */

    public function brandModelYear_index(){
        $brandModelYear=null;
        $brandModelYears = BrandModelYear::all();
        $brands = Brand::all();
        $brandModels = BrandModel::all();
        return view('Backend.brandModelYear.index',compact('brandModelYears','brandModelYear', 'brands','brandModels'));
    }

    public function brandModelYear_store(Request $request){
        $request->validate([
            'year'=>'required',
            'sub_model_id'=>'required'
        ]);

        BrandModelYear::create([
            'brand_model_id' => $request->sub_model_id,
            'year'=>$request->year,
        ]);
        return back();
    }

    public function getSubModelYear($id){
        $subModelYear= BrandModelYear::where('brand_model_id',$id)->get();
        return response()->json($subModelYear);
    }

    public function brandModelYear_update(Request $request,$brandModelYear_id){

        $request->validate([
            'year'=>'required',
            'sub_model_id'=>'required'
        ]);

        BrandModelYear::find($brandModelYear_id)->update([
            'year'=>$request->year,
            'brand_model_id'=>$request->sub_model_id,
        ]);
        return redirect(route('admin.brandModelYear.index')) ;

    }

    public function brandModelYear_edit($id){
        $brands = Brand::all();
        $brandModels = BrandModel::all();
        $brandModelYears = BrandModelYear::all();
        $brandModelYear = BrandModelYear::with('brandModel')->find($id);
        return view('Backend.brandModelYear.index',compact('brandModels','brandModelYears','brandModelYear','brands'));
    }

    public function brandModelYear_distroy($id){
        BrandModelYear::find($id)->delete();
        return back();
    }
}
