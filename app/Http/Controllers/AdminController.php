<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    // Show Admin Dashboard
    public function index(){

        return view('admin.dashboard');
    }
}