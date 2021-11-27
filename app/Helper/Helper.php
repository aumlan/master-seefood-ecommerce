<?php

use App\Models\Attribute;
use App\Models\Banner;
use App\Models\Brand;
use App\Models\Category;
use App\Models\ConfigureAttribute;
use App\Models\Manufacture;
use App\Models\Product;
use App\Models\Slider;
use Jenssegers\Agent\Agent;

function products(){
    $products = Product::OrderBy('id','DESC')->limit(8);
    return $products;
}

function Category(){
    return Category::all();
}

function Brand(){
    return Brand::all();
}

function slider(){
    return Slider::all();
}

function Manufactures(){
    return Manufacture::all();
}


function attribute(){
  $attr = Attribute::all();
  return $attr;
}

function featuredBanner(){
    $featuredBanner= Banner::where('type_of_banner','Main Banner')->orderBy('id','DESC')->first();
    return $featuredBanner;
}

function SecondFeatured(){
    $featuredBanner= Banner::where('type_of_banner','Second Banner')->orderBy('id','DESC')->offset(0)->limit(2)->get();
    return $featuredBanner;
}

function ThirdFeatured(){
    $featuredBanner= Banner::where('type_of_banner','Third Banner')->orderBy('id','DESC')->first();
    return $featuredBanner;
}


function featuredProduct(){
    $products = Product::all();
    $arrayShowingPlace=json_decode($products->productShowingPlace);
    return $arrayShowingPlace;
}

function isSize($attr_id){
      $size = ConfigureAttribute::where('id',$attr_id)->where('attribute_id',1)->first();
      return $size;
}

function isColor($attr_id){
    $color = ConfigureAttribute::where('id',$attr_id)->where('attribute_id',2)->first();
    return $color;
}
function search_in_array($value,$arr){
    if($arr!=Null){
        $result = in_array($value,$arr,true);
        if (!empty($result)) {
            return true;
        }else{
            return false;
        }
    }else{
        return false;
    }
}

function mediumImage($name){
    $mediumPath= asset('/images/products/medium_image/'.$name);
    return $mediumPath;
}
function thumbnail($name){
    $thumbnailPath = asset('/images/products/thumbnail/'.$name);
    return $thumbnailPath;
}
function MoBileView(){
    $agent = new Agent();
    $mobileView =$agent->isMobile();
    return $mobileView;
}
