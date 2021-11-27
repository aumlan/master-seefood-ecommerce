<?php

namespace App\Http\Controllers\Backend\Category;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        $categories = Category::all();
        return view('Backend.category.index',compact('categories'));
    }

    public function store(Request $request){
        $request->validate([
                'name'=>'required'
        ]);
        if($request->icon){
            $imageName = 'images/category/'.time().'.'.$request->icon->extension();
            $request->icon->move(public_path('images/category'), $imageName);
        }else{
            $imageName=null;
        }
        Category::create([
            'name'=>$request->name,
            'icon'=>$imageName,
            'description'=>$request->description,
            'type'=>$request->type,
        ]);
        return back();
    }

    public function distroy($id){
        Category::find($id)->delete();
        return back();
    }



    // sub category

    public function subCategoryIndex(){
        $sub_categories = SubCategory::all();
        $categories = Category::all();
        return view('Backend.category.subcategory',compact('categories','sub_categories'));
    }

    public function subCategoryStore(Request $request){
        $request->validate([
                'name'=>'required',
                'category_id'=>'required'
        ]);
        if($request->icon){
            $imageName = 'images/subcategory/'.time().'.'.$request->icon->extension();
            $request->icon->move(public_path('images/subcategory'), $imageName);
        }else{
            $imageName=null;
        }
        SubCategory::create([
            'name'=>$request->name,
            'category_id'=>$request->category_id,
            'icon'=>$imageName,
            'description'=>$request->description,
        ]);
        return back();
    }

    public function subCategorydistroy($id){
        SubCategory::find($id)->delete();
        return back();
    }


}
