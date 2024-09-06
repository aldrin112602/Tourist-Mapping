<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('tourist.login');

Route::get('/signup', function () {
    return view('signup');
})->name('tourist.signup');

