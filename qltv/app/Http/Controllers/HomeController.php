<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function login()
    {
        Auth::logout();
        return view("login");
    }

    //kiểm tra login
    public function authLogin(Request $request)
    {
        $request->validate([
            'txt_name'     =>  'required',
            'txt_pass'      =>  'required',
        ],[
            'txt_name.required' => 'username không được để trống.',
            'txt_pass.required' => 'Mật khẩu không được để trống.',
        ]);

        // so sánh thông tin nhập ở form xem có trùng với db hay không
        if(Auth::attempt(["name"=>$request->txt_name, "password"=>$request->txt_pass])){
            return redirect()->route("sachs.index");
        }
        return redirect()->route("login");
    }

}
