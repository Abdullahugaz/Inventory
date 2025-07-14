<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| This file defines web routes for your application.
| By default, it redirects guests to the login page.
*/

// Redirect root URL to login
Route::redirect('/', '/login')->name('home');

// Protected dashboard route for authenticated & verified users
Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Include additional route files
require __DIR__ . '/settings.php';   



require __DIR__ . '/auth.php';
