<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomAuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function register()
    {
        return view('auth.registration');
    }

    public function registerUser(Request $request){
        $request()->validate([
            'name' => ['required', 'max:255'],
            'email' => ['required', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'min:8'],
        ])
    }
}
