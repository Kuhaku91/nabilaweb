<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class logincontroller extends Controller
{
    public function index()
    {
        return view('layout.login');
    }
    public function login (Request $request){
        // dd($request);
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])){
            $request->session()->regenerate();
            return redirect()->intended('aadmin');
    		// dd(Auth(),'admin');
        }
        return redirect('login');
    }

    public function Logout(){
        Auth::logout();
        return redirect('/');
    }
    //
}
