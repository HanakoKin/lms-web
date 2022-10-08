<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('entry.login.index', [
            'title' => 'Login',
        ]);
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            if (auth()->user()->role == 'admin') {
                $request->session()->regenerate();

                return redirect()->intended('/dashboard/admins');
            } elseif (auth()->user()->role == 'teacher') {
                $request->session()->regenerate();

                return redirect()->intended('/dashboard/teachers');
            } elseif (auth()->user()->role == 'student') {
                $request->session()->regenerate();

                return redirect()->intended('/dashboard/students');
            }
        }

        return back()->with('loginError', 'Login Failed!');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->flush();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
