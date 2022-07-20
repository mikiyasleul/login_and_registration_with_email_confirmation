<?php

use Illuminate\Support\Facades\Route;

// authentication route with named routing
Route::get('/', function () {return view('login');})->name('login');

Route::get('/register', function () {return view('login');})->name('register');

Route::get('/forget_password', function () {return view('login');})->name('forgetPassword');

//logout route if u need to logout from a home page
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
