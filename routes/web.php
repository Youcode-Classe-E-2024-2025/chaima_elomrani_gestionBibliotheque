<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BooksController;
use App\Http\Controllers\ProfileController;

Route::get('register', [AuthController::class, 'showRegisterForm']);
Route::post('register', [AuthController::class, 'register']);
Route::get('login', [AuthController::class, 'showLoginForm']);
Route::post('login', [AuthController::class, 'Login']);
Route::get('/profile', [ProfileController::class, 'index']);
// Route::get('/profile', [AuthController::class, 'profile']);
Route::get('/', [HomeController::class, 'index']);
Route::get('/books', [BooksController::class, 'index']);



// Route::post('register', [AuthController::class, 'register']);:


    // Route::middleware('check')->group(function () {
    //     Route::post('register', [AuthController::class, 'register']);
    // });