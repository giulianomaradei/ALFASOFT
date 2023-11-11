<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function loginForm()
    {
        return view('Login');
    }

    public function registerForm()
    {
        return view('Register');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);


        if (Auth::attempt($credentials)){
            return redirect()->route('contacts.index');
        }
        return redirect()->back()->withErrors([
            'email' => 'Invalid credentials'
        ]);
    }

    public function register(Request $request)
    {
        $credentials = $request->only(['email', 'password']);
        $credentials['password'] = Hash::make($credentials['password']);
        User::create($credentials);

        return redirect()->route('contacts.index');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->back();
    }
}
