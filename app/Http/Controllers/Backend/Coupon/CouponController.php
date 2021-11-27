<?php

namespace App\Http\Controllers\Backend\Coupon;

use App\Http\Controllers\Controller;
use App\Models\Coupon;
use App\Models\Currency;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class CouponController extends Controller
{
    public function index(){
        $coupon=[];
        $coupons = Coupon::all();
        return view('Backend.coupon.index',compact('coupons','coupon'));
    }

    public function store(Request $request){
        $request->validate([
            'name'=>'required',
            'discount'=>'required',

        ]);

        Coupon::create([
            'name'=>$request->name,
            'discount'=>$request->discount,
        ]);
        return back();
    }

    public function updateCoupon(Request $request,$coupon_id){

        $request->validate([
            'name'=>'required',
            'discount'=>'required',

        ]);

        Coupon::find($coupon_id)->update([
            'name'=>$request->name,
            'discount'=>$request->discount,
        ]);
        return  back();
    }

    public function edit($id){
        $coupons = Coupon::all();
        $coupon = Coupon::find($id);
        return view('Backend.coupon.index',compact('coupons','coupon'));
    }

    public function destroy($id){
        Coupon::find($id)->delete();
        return back();
    }


    /**
     * Currency
     */
    public function currencyIndex(){
        $currency=[];
        $currencys = Currency::all();
        return view('Backend.currency.index',compact('currencys','currency'));
    }

    public function updateCurrency(Request $request){
        $request->validate([
            'dollar'=>'required',
            'euro'=>'required',

        ]);
        Currency::find(1)->update([
            'dollar'=>$request->dollar,
            'euro'=>$request->euro,
        ]);

        Toastr::success('message', 'Updated');
        return  back();
    }
    public function updateSelectedCurrency(Request $request, $currency){

        Currency::find(1)->update([
            'selected_currency' => $currency
        ]);

        Toastr::success('message', 'Updated');

        return redirect(route('welcome')) ;

    }

    public function updateSelectedLanguage(Request $request, $language){

        Currency::find(1)->update([
            'selected_language' => $language
        ]);

        Toastr::success('message', 'Updated');
        return redirect(route('welcome')) ;
    }


}
