<?php

use App\Models\Country;
use App\Models\Language;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\UserController;
use App\Models\Employee;
use App\Models\User;

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
});

// Admin Routes
Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'can:manage_all']], function () {

    // Route for admin dashboard
    Route::get('dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    // Route for User lists
    Route::get('users', [UserController::class, 'index'])->name('admin.users');
    // Route for User creation
    Route::get('users/create', [UserController::class, 'create'])->name('admin.users.create');
    Route::post('users/create', [UserController::class, 'store'])->name('admin.users.store');
    // Route for User Update
    Route::get('users/edit/{id}', [UserController::class, 'edit'])->name('admin.users.edit');
    Route::post('users/update/{id}', [UserController::class, 'update'])->name('admin.users.update');
    // Route for User delete
    Route::post('users/delete/{id}', [UserController::class, 'destroy'])->name('admin.users.delete');
    // My Profile
    Route::get('my-profile', [UserController::class, 'my_profile'])->name('admin.myprofile');
    Route::post('my-profile', [UserController::class, 'my_profile_update'])->name('admin.myprofile_update');
    // user logout
    Route::post('logout', [UserController::class, 'logout'])->name('admin.logout');

    // Route for employee
    Route::resource('employee', EmployeeController::class);
});

// Employees Routes
Route::group(['prefix' => 'employee',], function () {
    Route::get('dashboard', function () {
        return 'Your are an employee';
    })->name('employee.dashboard');
});


// Route for guest who is not logged in yet
Route::group(['middleware' => 'guest'], function () {

    Route::get('login', [AuthController::class, 'login'])->name('login');
    Route::post('login', [AuthController::class, 'login_post'])->name('loginPost');
});
