<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/register', [AuthController::class, 'showRegister'])->name('register')->middleware('guest');
Route::post('/register',[AuthController::class,'register'])->middleware('guest');

Route::get('/login',[AuthController::class, 'showLogin'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'login'])->middleware('guest');

Route::post('/logout',[AuthController::class,'logout'])->name('logout')->middleware('auth');

// Route::get('/dashboard', ...)->middleware('auth');

// Route::resource('products', ProductController::class)->only(['index']);

// Route::middleware(['auth','admin'])->group(function(){
//     Route::resource('products',ProductController::class)->only(['create', 'store', 'edit', 'update', 'destroy']);

// });