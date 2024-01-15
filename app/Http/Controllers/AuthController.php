<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    function login () {
        return view('auth.login');
    }

    public function postLogin(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            // Authentication passed...

            // Check the user's role
            $user = Auth::user();
            if ($user->role === 'admin') {
                return redirect()->route('home')->with('status', 'Welcome ' . $user->name);
            } elseif ($user->role === 'customers') {
                return redirect()->route('home')->with('status', 'Welcome ' . $user->name);
            }
        }

        return back()->with('status', 'Email atau password salah',);
    }

    public function logout()
    {
        auth()->logout();
        return redirect()->route('login')->with('statusLogout', 'Logout Success!');
    }
}
