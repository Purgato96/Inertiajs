<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return view('welcome');
})->name('site.home');

Route::get('/teste', function () {
    return Inertia::render('Teste', [
        'school' => 'test',
    ]);
})->name('site.teste');

Route::get('/ziggy/{param}', function () {
    echo "Teste";
})->name('site.ziggy');
