<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function authenticate(Request $request)
    {
        $data = $request->validate([
            'email' => ['required'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($data)) {
            $request->session()->regenerate();

            if (auth()->user()->roles->role == 'admin') {
                return redirect()->intended('/admin');
            }

            if (auth()->user()->roles->role == 'siswa') {
                return redirect()->intended('/siswa');
            }
        }

        // else {
        //     return $data;
        // }

        return back()->withErrors([
            'email' => 'Email Salah!!',
            'password' => 'Password Salah!!',
        ]);
    }



    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
}
