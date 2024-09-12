<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;

Route::get('/', function () {
    return view('login');
});

Route::get('/login', [UsersController::class, 'index'])->name('login');
Route::get('/dashboard', [UsersController::class, 'dashboard'])->name('dashboard');
Route::post('/login', [UsersController::class, 'login'])->name('login.submit');
