<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TouristController;

Route::prefix('tourist')->group(function() {
    // Route::get('login', [TouristController::class, 'login'])->name('tourist.login');
    Route::post('login', [TouristController::class, 'handleLogin'])->name('tourist.handleLogin');


    Route::middleware('auth:tourist')->group(function () {



    });
});