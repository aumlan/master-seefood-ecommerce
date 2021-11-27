<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardContrller extends Controller
{
    public function dashboard(){
        // return Auth::guard('admin')->user()->name;

        return view('Backend.dashboard');
    }
}
