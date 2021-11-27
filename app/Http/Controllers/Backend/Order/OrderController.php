<?php

namespace App\Http\Controllers\Backend\Order;

use App\Http\Controllers\Controller;
use App\Models\Attribute;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Manufacture;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class OrderController extends Controller
{
    public function index(){
        $orders = Order::with('products')->get();
        return view('Backend.order.order_list',compact('orders'));
    }

    public function edit($order_id){
//        $brands= Brand::all();
//        $attributes= Attribute::all();
//        $categories= Category::all();
//        $manufactures= Manufacture::all();
//        $product=Product::find($product_id);
//        return view('Backend.product.product_edit',compact('manufactures','product','brands','categories','attributes'));
    }
    public function show($order_id){

        $ordersDetails = Order::with('products','products.product')->findOrFail($order_id);
        return view('Backend.order.order_details', compact('ordersDetails'));

//        $product = Product::find($product_id);
//        return view('Backend.product.product_show',compact('product'));
    }

    public function destroy($orderID){


        $order=Order::find($orderID);

        $order->delete();
//         if($order){
//             toastr()->success('Order Deleted', 'Success');
//         }
        return back();
    }

    public function statusChange(Request $request, $id)
    {
        $update= Order::where('id',$id)->update([
            'status' => $request->status
        ]);

        return response()->json('Order Status Updated!!');
    }

}
