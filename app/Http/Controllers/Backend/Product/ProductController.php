<?php

namespace App\Http\Controllers\Backend\Product;

use App\Http\Controllers\Controller;
use App\Models\Attribute;
use App\Models\Brand;
use App\Models\BrandModel;
use App\Models\BrandModelYear;
use App\Models\Category;
use App\Models\Currency;
use App\Models\Manufacture;
use App\Models\Product;
use App\Models\ProductAttribute;
use App\Models\ProductImage;
use App\Models\ProductSpecification;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Intervention\Image\ImageManagerStatic as Image;
class ProductController extends Controller
{
    public function index(){
        $attributes= Attribute::all();
        $categoris= Category::all();
        $brands= Brand::all();
        $manufactures= Manufacture::all();
        $currency = Currency::find(1);
        return view('Backend.product.index',compact('attributes','categoris','brands','manufactures','currency'));
    }


    public function getSubCategory($id){
        $subCategory= SubCategory::where('category_id',$id)->get();
        return response()->json($subCategory);
    }


    public function list(){
        $products = Product::orderBy('id','DESC')
            ->get();


        return view('Backend.product.product_list',compact('products'));

    }


    public function show($product_id){

        $product = Product::find($product_id);
        return view('Backend.product.product_show',compact('product'));
    }

    public function filterByCategory($category_id){
        $category= Category::find($category_id);
        $products = Product::where('category_id',$category_id)->get();
        return view('Backend.product.filter_product.filter_product',compact('products','category'));
    }


    public function store(Request $request){

        $request->validate([
            'name'=>'required',
//            'short_description'=>'required',
//            'sales_price_aed'=>'required',
//            'discount_price'=>'required',
//            'stock_status'=>'required',
//            'sku'=>'required',

        ]);

        // if(count($request->product_showing)>0){
        //     $productShowingPlace = json_encode($request->product_showing);
        // }else{
        //     $productShowingPlace = null;
        // }
        $slug = Str::slug($request->name, '-');
         $product  = new Product();
         $product->name=$request->name;
         $product->slug=$slug;
         $product->description=$request->content;
         $product->short_description=$request->short_description;
         $product->sales_price_aed=$request->sales_price_aed;
         $product->discount_price=$request->discount_price;
         $product->tax=$request->tax;
         $product->sku=$request->sku;
         $product->productShowingPlace=$request->product_showing;
         $product->qty=$request->productQty;
         $product->stock_status=$request->stock_status;
         $product->category_id=$request->category_id;
         $product->sub_category_id=$request->sub_category_id;
         $product->brand_id=$request->brand_id;
         $product->save();

        if ($request->hasFile('images')){
            $productId= $product->id;
            foreach ($request->file('images') as $key=>$file){
                $ext=$file->getClientOriginalName();
                $t=time();
                $filename=($key+1).'-'.$t.'-'.Str::slug($request->title).uniqid().'.'.'webp';

                $thumbnailPath = public_path('/images/products/thumbnail');
                $mediumPath = public_path('/images/products/medium_image');

                // image compress
                $img = Image::make($file->getRealPath());
                $medium_img = Image::make($file->getRealPath());

                // thumbnail image resize
                if($key<1){
                    $img->resize(260, 220, function ($constraint) {
                        $constraint->aspectRatio();
                    })->save($thumbnailPath.'/'.$filename);
                }

                // medium image resize
                $medium_img->encode('webp', 80)->save($mediumPath.'/'.$filename);
                ProductImage::create([
                    'product_id'=>$productId,
                    'image'=>$filename,
                ]);
            }
            if(count($request->attr)>0){

                foreach($request->attr as $key=>$attr){
                    ProductAttribute::create([
                        'configure_attribute_id'=>$attr,
                        'product_id'=>$product->id
                    ]);
                }
            }
        }

        return redirect()->back();
    }




    public function edit($product_id){
        $brands= Brand::all();
        $attributes= Attribute::all();
        $categories= Category::all();
        $manufactures= Manufacture::all();
        $product=Product::find($product_id);
        $currency = Currency::find(1);
        $sub_categories = SubCategory::all();
        return view('Backend.product.product_edit_copy',compact('manufactures','product','brands','categories','attributes','currency','sub_categories'));
    }


    public function update( Request $request, $product_id){

        $request->validate([
            'name'=>'required',
        ]);

        // if(count($request->product_showing)>0){
        //     $productShowingPlace = json_encode($request->product_showing);
        // }else{
        //     $productShowingPlace = null;
        // }
        $slug = Str::slug($request->name, '-');
        $product  =  Product::find($product_id);
        $product->name=$request->name;
        $product->slug=$slug;
        $product->description=$request->content;
        $product->short_description=$request->short_description;
        $product->sales_price_aed=$request->sales_price_aed;
        $product->discount_price=$request->discount_price;
        $product->tax=$request->tax;
        $product->sku=$request->sku;
        $product->productShowingPlace=$request->product_showing;
        $product->qty=$request->productQty;
        $product->stock_status=$request->stock_status;
        $product->category_id=$request->category_id;
        $product->sub_category_id=$request->sub_category_id;
        $product->brand_id=$request->brand_id;

         $product->save();

         if ($request->hasFile('images')){
            $productId= $product->id;
            foreach ($request->file('images') as $key=>$file){
                $t=time();
                    $filename=($key+1).'-'.$t.'-'.Str::slug($request->title).uniqid().'.'.'webp';

                    $thumbnailPath = public_path('/images/products/thumbnail');
                    $mediumPath = public_path('/images/products/medium_image');

                    // image compress
                    $img = Image::make($file->getRealPath());
                    $medium_img = Image::make($file->getRealPath());
                         // thumbnail image resize
                         if($key<1){
                            $img->resize(260, 220, function ($constraint) {
                                $constraint->aspectRatio();
                            })->save($thumbnailPath.'/'.$filename);
                        }

                        // medium image resize
                        $medium_img->encode('webp', 80)->save($mediumPath.'/'.$filename);
                        ProductImage::create([
                            'product_id'=>$productId,
                            'image'=>$filename,
                        ]);
                    }
                }
                if(!empty($request->attr)){
                    if(count($request->attr)>0){
                        $oldProduct = ProductAttribute::where('product_id',$product->id)->delete();
                        foreach($request->attr as $key=>$attr){
                            ProductAttribute::create([
                                'configure_attribute_id'=>$attr,
                                'product_id'=>$product->id
                            ]);
                        }
                    }
                }

            if(!empty($request->specs_name)){
                if(count($request->specs_name)>0){
                    $oldProduct = ProductSpecification::where('product_id',$product->id)->delete();
                    foreach($request->specs_name as $key=>$specs){
                        ProductSpecification::create([
                            'attribute_name'=>$request->specs_name[$key],
                            'attribute_description'=>$request->specs_value[$key],
                            'product_id'=>$product->id
                        ]);
                    }
                }
            }
            return redirect()->route('admin.product.list');
    }


    public function imageDelete($image_id){
        $image = ProductImage::find($image_id);
        if(File::exists($image->image)) {
            File::delete($image->image);
        }
        $image->delete();
        return back();
    }

    public function destroy($imageId){


        $product=Product::find($imageId);

        if (File::exists('images/products/medium_image/'.$product->image))
        {
            File::delete('images/products/medium_image/'.$product->image);
        }
        if (File::exists('images/products/thumbnail/'.$product->image))
        {
            File::delete('images/products/thumbnail/'.$product->image);
        }
        $product->delete();
        // if($carImage){
        //     toastr()->success('Car Image Deleted', 'Success');
        // }
        return back();
    }
}
