<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|min:4|max:25',
            'password' => 'required|min:3|max:50'
        ]);

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            if(auth()->guest()){
                return redirect()->intended('RentalMobil/beranda');
            } elseif(!auth()->user()->is_admin){
                return redirect()->intended('RentalMobil/admin/dashboard');
            } return redirect()->intended('RentalMobil/beranda');
        }

        return back()->with('LoginError', 'Username atau Password Salah!');

    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('RentalMobil/beranda');
    }

}
