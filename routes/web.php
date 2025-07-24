<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// })->name('welcome');

Route::middleware('guest')->group(function () {
  Route::get('/', [AuthController::class, 'login'])->name('login');
  Route::post('/authenticate', [AuthController::class, 'authenticate'])->name('authenticate');

  // Route::get('/register', [AuthController::class, 'register'])->name('register.form');
});

Route::middleware('auth')->group(function () {
  Route::get('/home', [AuthController::class, 'home'])->name('home');
  Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
  Route::get('/admin', [AuthController::class, 'admin'])->name('admin.dashboard');
});
  
Route::post('/register', [AuthController::class, 'store'])->name('store');
