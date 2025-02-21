<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('register', [AuthController::class, 'showRegisterForm']);
Route::post('register', [AuthController::class, 'register']);
Route::get('login', [AuthController::class, 'showLoginForm']);
Route::get('/profile', [AuthController::class, 'profile']);
Route::get('/profile', [AuthController::class, 'profile']);
Route::get('/', [HomeController::class, 'index']);


// Route::post('register', [AuthController::class, 'register']);:


    // Route::middleware('check')->group(function () {
    //     Route::post('register', [AuthController::class, 'register']);
    // });