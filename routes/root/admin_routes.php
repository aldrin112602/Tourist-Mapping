<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

Route::prefix('admin')->group(function() {
    // Route::get('login', [AdminController::class, 'login'])->name('admin.login');
    // Route::post('login', [AdminController::class, 'handleLogin'])->name('admin.handleLogin');


    Route::middleware('auth:admin')->group(function () {



    });
});