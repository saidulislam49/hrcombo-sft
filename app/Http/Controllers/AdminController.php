<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class AdminController extends Controller
{
    // Show Admin Dashboard
    public function index(){

        if (Gate::allows('is_employee')) {
            return redirect()->route('employee.dashboard');
        }
        return view('admin.dashboard');
    }
}
