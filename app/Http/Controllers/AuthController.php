<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AuthController extends Controller
{
    public function login()
    {
        return view('login');
    }
    public function signin(Request $request)
    {
        if(auth()->attempt($request->only('email', 'password')))
        {
            return redirect('/dashboard');
        }
        return redirect('/login');
    }
    public function register()
    {
        return view('register');
    }
    public function signup(Request $request)
    {
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);
        return view('/login');
    }
    public function logout()
    {
        auth()->logout();
        return redirect('/login');
    }
}
