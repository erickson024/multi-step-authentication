<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('pages.signup');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::post('/logout', function () {
    Auth::logout(); // log the user out
    request()->session()->invalidate(); // invalidate the session
    request()->session()->regenerateToken(); // regenerate CSRF token

    return redirect('/'); // redirect to home page or login
})->name('logout');
