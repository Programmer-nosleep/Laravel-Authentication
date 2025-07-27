<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ScheduleController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\AirbaseController;
use App\Http\Controllers\Auth\AuthController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Guest Routes
|--------------------------------------------------------------------------
*/
Route::middleware('guest')->group(function () {
    Route::get('/', [AuthController::class, 'login'])->name('login');
    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/authenticate', [AuthController::class, 'authenticate'])->name('authenticate');
});

/*
|--------------------------------------------------------------------------
| Authenticated Routes
|--------------------------------------------------------------------------
*/
Route::middleware('auth')->group(function () {
    // Auth & Admin
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/admin', [AdminController::class, 'admin'])->name('admin.dashboard');
    Route::get('/admin/users', [UserController::class, 'users'])->name('admin.users');
    Route::get('/admin/users/create', [UserController::class, 'create'])->name('admin.users.create');
    Route::get('/admin/schedule', [ScheduleController::class, 'schedule'])->name('admin.schedule');

    // Airbase
    Route::get('/home', [AirbaseController::class, 'index'])->name('airbases.home');
    Route::get('/home', [AirbaseController::class, 'index'])->name('home');
});

/*
|--------------------------------------------------------------------------
| Register Store
|--------------------------------------------------------------------------
*/
Route::post('/register', [AuthController::class, 'store'])->name('store');
