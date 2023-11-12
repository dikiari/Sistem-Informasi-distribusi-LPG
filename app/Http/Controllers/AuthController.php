<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    function index()
    {
        return view('login');
    }
    function loginPost(Request $request)
    {
        // Validasi input
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Coba login
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Jika berhasil, redirect ke halaman yang diinginkan
            return redirect()->intended('dashboard');
        }

        return back()->with(['error','Email atau Password Salah']);
    }
    function logout()
    {
        Auth::logout(); // Logout user
        return redirect('/login'); // Redirect ke halaman login setelah logout
    }
}
