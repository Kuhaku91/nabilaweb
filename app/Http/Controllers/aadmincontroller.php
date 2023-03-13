<?php

namespace App\Http\Controllers;

use App\Models\aadmin;
use App\Models\User;
use Illuminate\Http\Request;

class aadmincontroller extends Controller
{
    public function index()
    {
        $data=[
            'user'=>User::all(),
        ];
        return view('Admin/aadmin', compact('data'));
    }
    //
}
