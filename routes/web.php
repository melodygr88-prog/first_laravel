<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

// Public home page
Route::get('/', function () {
    return view('welcome');
})->name('home');

// Lessons page (public)
Route::get('/lessons', function () {
    return view('lessons');
})->name('lessons');

// Guest routes (for non-authenticated users)
Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
    Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
    Route::post('/register', [AuthController::class, 'register']);
});

// Protected routes (for authenticated users only)
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});