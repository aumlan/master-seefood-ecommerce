<?php

namespace App\Http\Controllers\Backend\Product;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Currency;
use App\Models\Manufacture;
use App\Models\Product;
use App\Models\Software;
use App\Models\SoftwareProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Intervention\Image\ImageManagerStatic as Image;

class SoftwareProductController extends Controller
{

    /**
     * Software [alt of category]
     */
    public function index(){
        $softwares = Category::where('type','software')->get();
        return view('Backend.software.index',compact('softwares'));
    }


    /**
     * Software Products [alt of products]
     */

    public function software_product_index(){
        $softwares= Category::where('type','software')->get();
        $manufactures= Manufacture::all();
        $currency = Currency::find(1);
        return view('Backend.softwareProduct.index',compact('softwares','manufactures','currency'));
    }

    public function list(){
        $products = Product::orderBy('id','DESC')
            ->where('product_type','software')
            ->get();


        return view('Backend.softwareProduct.product_list',compact('products'));

    }






}
