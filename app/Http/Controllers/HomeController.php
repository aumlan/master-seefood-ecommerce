<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Product;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

//        Auth::logout();
      $sliders = Slider::orderBy('id','DESC')->get();
       $brands = Brand::orderBy('id','DESC')->get();
       $best_selling = Product::orderBy('id','DESC')->where('productShowingPlace','Best Selling Product')->limit(8)->get();
       $Special_offers = Product::orderBy('id','DESC')->where('productShowingPlace','Special Offers')->limit(8)->get();
       $new_arrivals = Product::orderBy('id','DESC')->where('productShowingPlace','New Arrival')->limit(8)->get();
       $free_shipping = Product::orderBy('id','DESC')->where('productShowingPlace','Free Express Shipping')->limit(8)->get();
       if(!MoBileView()){
       return view('welcome',compact('Special_offers','free_shipping','best_selling','new_arrivals','brands','sliders'));
       }else{
        return view('mobile.welcome',compact('brands','Special_offers','best_selling','new_arrivals','free_shipping'));
       }

    }
}
