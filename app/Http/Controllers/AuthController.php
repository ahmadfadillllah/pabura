<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login()
    {
        return view('Auth.login');
    }

    public function processlogin(Request $request)
    {
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password]))
        {
            return redirect()->route('home');
        }

        return redirect()->route('login')->with('salah', 'Email / Password Salah');
    }

    public function register()
    {
        return view('Auth.register');
    }

    public function processregister(Request $request)
    {
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

        return redirect()->route('login')->with('notification', 'Berhasil Terdaftar');
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('dashbaord');
    }
}
