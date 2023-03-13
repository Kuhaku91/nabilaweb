<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class registercontroller extends Controller
{
    public function index()
    {
        return view ('layout/register');
    }
    public function daftar(Request $daftar)
    {
        $data=User::create([
            'name' => $daftar->name,
            'email'=> $daftar->email,
            'password'=>Hash::make($daftar->password),
            'role'=>'User',
        ]);
        // dd($daftar,$data);
        return redirect('login');
        # code...
    }
}
