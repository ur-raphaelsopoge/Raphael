<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TalaogonController;

// Public Routes
Route::get('/', [TalaogonController::class, 'index'])->name('home');

// Auth Routes
Route::get('/login', [TalaogonController::class, 'showLogin'])->name('login');
Route::post('/login', [TalaogonController::class, 'login'])->name('login.post');

Route::get('/signup', [TalaogonController::class, 'showSignup'])->name('signup');
Route::post('/signup', [TalaogonController::class, 'signup'])->name('signup.post');

Route::get('/logout', [TalaogonController::class, 'logout'])->name('logout');

// User Account
Route::get('/account', [TalaogonController::class, 'account'])->name('account');

// Admin Routes Group
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [TalaogonController::class, 'admin'])->name('index');
    Route::get('/edit/{id}', [TalaogonController::class, 'edit'])->name('edit');
    Route::post('/update/{id}', [TalaogonController::class, 'update'])->name('update');
    Route::get('/delete/{id}', [TalaogonController::class, 'delete'])->name('delete');
});