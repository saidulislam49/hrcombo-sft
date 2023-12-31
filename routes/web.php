<?php

use App\Models\Country;
use App\Models\Language;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin;
use App\Http\Controllers\Employee;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('home_frontend');

// Admin Routes
Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'can:manage_all']], function () {

    // Route for admin dashboard
    Route::get('dashboard', [Admin\AdminController::class, 'index'])->name('admin.dashboard');
    // Route for User lists
    Route::get('users', [Admin\UserController::class, 'index'])->name('admin.users');
    // Route for User creation
    Route::get('users/create', [Admin\UserController::class, 'create'])->name('admin.users.create');
    Route::post('users/create', [Admin\UserController::class, 'store'])->name('admin.users.store');
    // Route for User Update
    Route::get('users/edit/{id}', [Admin\UserController::class, 'edit'])->name('admin.users.edit');
    Route::post('users/update/{id}', [Admin\UserController::class, 'update'])->name('admin.users.update');
    // Route for User delete
    Route::post('users/delete/{id}', [Admin\UserController::class, 'destroy'])->name('admin.users.delete');
    // My Profile
    Route::get('my-profile', [Admin\UserController::class, 'my_profile'])->name('admin.myprofile');
    Route::post('my-profile', [Admin\UserController::class, 'my_profile_update'])->name('admin.myprofile_update');
    // user logout
    Route::post('logout', [Admin\UserController::class, 'logout'])->name('admin.logout');

    // Route for employee
    Route::get('employees', [Admin\EmployeeController::class, 'index'])->name('admin.employees');
    Route::get('employees/{id}', [Admin\EmployeeController::class, 'show'])->name('admin.employees.show');

    // Route for leaves
    Route::get('leaves', [Admin\LeaveController::class, 'index'])->name('admin.leaves');
    Route::get('employees/{id}', [Admin\EmployeeController::class, 'show'])->name('admin.employees.show');

});

// Employees Routes
Route::group(['prefix' => 'employee', 'middleware' => ['auth']], function () {
    // Route for employee dashboard
    Route::get('dashboard', [Employee\EmployeeController::class, 'index'])->name('employee.dashboard');
    // Route for employee Attendance
    Route::get('attendance', [Employee\EmployeeController::class, 'attendance'])->name('employee.attendance');
    // Route for employee leave
    Route::get('leave', [Employee\EmployeeController::class, 'leave'])->name('employee.leave');
    // Route for employee holiday
    Route::get('holiday', [Employee\EmployeeController::class, 'holiday'])->name('employee.holiday');
    // Employee logout
    Route::post('logout', [Employee\EmployeeController::class, 'logout'])->name('employee.logout');

});


// Route for guest who is not logged in yet
Route::group(['middleware' => 'guest'], function () {

    Route::get('login', [AuthController::class, 'login'])->name('login');
    Route::post('login', [AuthController::class, 'login_post'])->name('loginPost');
});