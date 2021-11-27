<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Coupon;
use App\Models\Manufacture;
use App\Models\Order;
use App\Models\Product;
use Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function dashboard()
    {
        $orders = Order::where('user_id', Auth::id())->with('products')->get();

        if(!MoBileView()){
            return view('userProfile', compact('orders'));
        }else{
            return view('mobile.userProfile', compact('orders'));
        }

    }

    public function order_details($orderID)
    {
        // $customer = Auth::user();
        $ordersDetails = Order::with('products','products.product')->findOrFail($orderID);

        if(!MoBileView()){
            return view('orderDetails', compact('ordersDetails'));
        }else{
            return view('mobile.orderDetails', compact('ordersDetails'));
        }



    }

    public function redeem_coupon($coupon_value)
    {
        $discount = 0;
        $coupons = Coupon::all();
        $message = 0;
        foreach ($coupons as $coupon){
            if (strtolower($coupon->name) == trim(strtolower($coupon_value))  ){
                $discount =  (int)$coupon->discount;
                $message = 1;
                break;
            }else{
                $message = 0;
            }
        }

        $data['cart'] = Cart::content()->toArray();
        $data['total'] = array_sum(array_column($data['cart'],'subtotal'));

        $discount_after_coupon = $data['total'] * ($discount/100);
        $total_after_coupon = $data['total'] - $discount_after_coupon;

        $data['total_after_coupon'] = $total_after_coupon;
        $data['message']= $message;
        return response()->json($data );
    }

    public function brand_products($brand_id, $slug)
    {
        $products = Product::with('productImage', 'category','brand')
            ->where('brand_id', $brand_id)
            ->get();

        $brand = Brand::find($brand_id);

        if(!MoBileView()){
            return view('brand_products', compact('products','brand'));
        }else{
            return view('mobile.brand_products', compact('products','brand'));
        }


    }

    public function category_products($category_id, $slug)
    {
        $products = Product::with('productImage', 'category','brand')
            ->where('category_id', $category_id)
            ->get();

        $category = Category::find($category_id);

        if(!MoBileView()){
            return view('category_products', compact('products','category'));
        }else{
            return view('mobile.category_products', compact('products','category'));
        }


    }

    public function manufacturers_products($manufacturers_id, $slug)
    {
        $products = Product::with('productImage', 'category','brand')
            ->where('manufacture_id', $manufacturers_id)
            ->get();

        $manufacturers = Manufacture::find($manufacturers_id);

        if(!MoBileView()){
            return view('manufacturers_products', compact('products','manufacturers'));
        }else{
            return view('mobile.manufacturers_products', compact('products','manufacturers'));
        }


    }

}
