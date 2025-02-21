<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BooksController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;


//user
Route::get('/', [HomeController::class, 'index']);
Route::get('register', [AuthController::class, 'showRegisterForm']);
Route::post('register', [AuthController::class, 'register']);
Route::get('login', [AuthController::class, 'showLoginForm']);
Route::post('login', [AuthController::class, 'Login']);
Route::get('/profile', [ProfileController::class, 'index']);


//books
Route::get('/admin', [BooksController::class, 'adminIndex']);
Route::get('/books', [BooksController::class, 'index']);
Route::post('/books', [BooksController::class, 'store'])->name('books.store');
Route::delete('/books/{id}', [BooksController::class, 'delete'])->name('books.delete');
