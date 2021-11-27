<?php

namespace App\Http\Controllers\Backend\Auth;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = RouteServiceProvider::ADMIN;
    public function showLoginForm(){
        return view('Backend.auth.login');
    }

    public function login(Request $request){

        // validate login data
        $request->validate([
                'email'=>'required|email|max:50',
                'password'=>'required|min:8',
            ]);

            if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password,'status'=>1], $request->remember)) {
                // Redirect to dashboard
                session()->flash('success', 'Successully Logged in !');
                return redirect()->intended(route('admin.dashboard'));
            }else{
                session()->flash('login_error','Ivalid Email and Password');
                return back();
            }
        
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login');
    }
}
