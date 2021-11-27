<?php

namespace App\Http\Controllers\Backend\Settings;

use App\Http\Controllers\Controller;
use App\Models\SocialSetting;
use Illuminate\Http\Request;

class SocialSettingsController extends Controller
{
    public function index(){
        $socialSettings=SocialSetting::first();
        return view('Backend.settings.FrontendSettings',compact('socialSettings'));
    }

    public function update(Request $request){
        $settings = SocialSetting::find(1)->update($request->all());
        return redirect()->back();
    }
}
