<?php

use Illuminate\Support\Facades\Route;


// TIME KEEPING FUNCTIONS
Route::get('/timekeeping', [
    App\Http\Controllers\TimeKeepingController::class,
    'index'
])->name('timekeeping');

Route::get('/timekeeping/create', [
    App\Http\Controllers\TimeKeepingController::class,
    'create'
])->name('timekeeping.create');

Route::get('/timekeeping/view', [
    App\Http\Controllers\TimeKeepingController::class,
    'timeview'
])->name('timekeeping.view');


//END  TIME KEEPING FUNCTIONS