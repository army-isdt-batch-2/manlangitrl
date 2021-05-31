<?php

use Illuminate\Support\Facades\Route;


// LOANS FUNCTIONS
Route::get('/loans', [
    App\Http\Controllers\LoanController::class,
    'index'
])->name('loans');

Route::get('/loans/create', [
    App\Http\Controllers\LoanController::class,
    'create'
])->name('loans.create');

// END LOANS FUNCTIONS