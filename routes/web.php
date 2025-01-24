<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Home');
})->name('site.home');

Route::resource('users', UserController::class);
Route::get('/contato', function () {
    return Inertia::render('Contact');
})->name('site.contact');
