<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    //Method for login and register
    public function login() {

        return view('auth.authentication');
    }
}