<?php

use Illuminate\Support\Facades\Route;



Route::get('/login', [
    App\Http\Controllers\LoginController::class,
    'index'
])->name('login');