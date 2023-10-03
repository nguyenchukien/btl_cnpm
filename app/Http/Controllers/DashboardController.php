<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function login(){
        $this->logout();
        return view('login');
    }

    public function authLogin(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        $credentials = $request->only('email', 'password');
        if(Auth::attempt($credentials)){
            return redirect()->route('sachs.index');
        }
        return redirect()->route('login')->with('Lỗi!,email hoặc mật khẩu không đúng.');
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }
}
