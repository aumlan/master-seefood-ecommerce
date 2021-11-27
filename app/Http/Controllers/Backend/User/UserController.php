<?php

namespace App\Http\Controllers\Backend\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $users = User::all();
        return view('Backend.users.user_list',compact('users'));
    }

    public function destroy($userID){
        $user=User::find($userID);
        $user->delete();
        return back();
    }


}
