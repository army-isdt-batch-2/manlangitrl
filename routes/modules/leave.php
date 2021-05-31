<?php

use Illuminate\Support\Facades\Route;


// LEAVES FUNCTIONS
Route::get('/leaves', [
    App\Http\Controllers\LeaveController::class,
    'index'
])->name('leaves');

Route::get('/leaves/create', [
    App\Http\Controllers\LeaveController::class,
    'create'
])->name('leaves.create');
//END LEAVES FUNCTIONS