<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //Method for login and register
    public function login() {

        return view('auth.authentication');
    }

    // Method for login functionality
    public function login_post(Request $request)
    {
        $user = $request->validate([
            'email' => 'required|email|exists:users',
            'password' => 'required|min:8'
        ]);

        if (Auth::attempt($user)) {
            return redirect(route('admin.dashboard'));
        } else {
            return view('auth.authentication');
        }
    }
}