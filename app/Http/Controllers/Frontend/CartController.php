<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Currency;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Cart;

class CartController extends Controller
{
    public function AddToCart($product_id, $qty=1,$size,$color){
        // Cart::destroy();

        $product = Product::where('id',$product_id)->first();

        if($product->discount_price){
            $price = $product->discount_price;
        }else{
            $price = $product->sales_price_aed;
        }

        $cart=Cart::add(['id' =>$product->id, 'name' => $product->name, 'qty' => $qty,'tax'=>0,'price' =>$price,'weight'=>0,'options' => ['image' => $product->productImage[0]->image,'slug'=>$product->slug,'size'=>$size,'color'=>$color ]]);

//        dd($cart);
        return response()->json($cart);

    }

    public function AddToCartDirect($product_id, $qty=1, $rowID){

        $cart= Cart::update($rowID, ['qty' => $qty]);
//        $cart = Cart::content();
        return response()->json($cart);

    }

    public function decreaseToCart($product_id,$qty,$rowId){

        $decreaseQty = $qty-1;
       $cart= Cart::update($rowId,['qty'=> $decreaseQty]);
        return response()->json($cart);

    }

    public function RemoveToCart($rowId){
        Cart::remove($rowId);

//        return redirect()->action([CartController::class, 'list']);

        return redirect('/shopping/cart/list');
    }

    public function count(){
        return response()->json(['cart_count'=>Cart::count(),'cart_total'=>Cart::total()]);
    }

    public function list(){

        $carts=Cart::content();

        if(!MoBileView()){
            return view('cart_mymorich',compact('carts'));
        }else{
            return view('mobile.cart',compact('carts'));
        }
    }

    public function cart_empty(){
         Cart::destroy();
        return redirect('/shopping/cart/list');
    }

    public function checkOut()
    {
        if (!auth()->user()){
            return redirect()->route('login');
        }

        $carts =Cart::content();
        $sub_total=0;
        foreach ($carts as $cart){
            $sub_total =$sub_total + ($cart->price * $cart->qty);
        }
        $users= auth()->user();

        if(!MoBileView()){
            return view('checkout', compact('carts','users','sub_total'));
        }else{
            return view('mobile.checkout', compact('carts','users','sub_total'));
        }
        return view('');
//        // $id = Auth::id();
        // $carts = Cart::where('user_id', $id)->get();
        // $ship = Shipping::where('status', '=', 1)->get();
        // $sum = Cart::where('user_id', $id)->sum('subtotal');
        // $isOnlinePayment = 0;
        // foreach ($carts as $row) {
        //     if ($row->product->online_payment == 1) {
        //         $isOnlinePayment = 1;
        //     }
        // }
        // if (count($carts) < 1) {
        //     return Redirect()->route('view.cart')->with('success', 'Shopping cart is Empty Please Add Some product');
        // }
        // $users = Auth::user();

        // return view('frontend.checkout', compact('users', 'carts', 'ship', 'sum', 'isOnlinePayment'));
    }

    public function placeOrder(Request $request)
    {
        $data['cart'] = Cart::content()->toArray();
        $data['total'] = array_sum(array_column($data['cart'],'subtotal'));

        $order = Order::create([
            'user_id' => auth()->user()->id,
            'customer_name' => $request->name,
            'customer_phone_number' => $request->phone,
            'email' => $request->email,
            'address' => $request->address,
            'city' => $request->city,
            'postal_code' => $request->zip,
//            'total' =>$data['total'],
            'total' => $request->after_coupon_total,
            'payment_method' => 'COD',

        ]);

        foreach ($data['cart'] as $product_id=>$product){
            $order->products()->create([
                'product_id' => $product['id'],
                'quantity' => $product['qty'],
                'price' => $product['price'],
                'sub_total' => $product['subtotal'],
                'size' => $product['options']['size'],
                'color' => $product['options']['color'],

            ]);
        }

        //Destroy Cart
        Cart::destroy();

        if ($order){
            return redirect(route('user.dashboard'));
        }
    }

}
