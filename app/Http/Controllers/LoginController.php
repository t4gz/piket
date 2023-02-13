<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function authenticate(Request $request)
    {
        $data=$request->validate([
            'nisn' => ['required'],
            'password' => ['required']
        ]);

        if (Auth::attempt($data)) {
            $request->session()->regenerate();

            if(auth()->user()->role=='admin'){
                return redirect()->intended('/admin');
            }

            if(auth()->user()->role=='siswa'){
                return redirect()->intended('/siswa');
            }
        }

        return back()->withErrors([
            'nisn' => 'NISN atau Password Salah!!',
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
