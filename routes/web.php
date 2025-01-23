<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/teste', function () {
    Inertia::render('Teste', [
        'name' => 'Purgato',
    ]);
});
