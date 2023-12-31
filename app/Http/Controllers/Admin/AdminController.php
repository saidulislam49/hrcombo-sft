<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    // Show Admin Dashboard
    public function index()
    {

        if (Gate::allows('is_employee')) {
            return redirect()->route('employee.dashboard');
        }
        return view('admin.dashboard');
    }
}
