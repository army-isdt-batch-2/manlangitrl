<?php

use Illuminate\Support\Facades\Route;



// MANDATORY DEDUCTIONS FUNCTIONS
Route::get('/mandatory-deductions', [
    App\Http\Controllers\MandatoryDeductionController::class,
    'index'
])->name('mandatorydeductions');

Route::get('/mandatory-deductions/create', [
    App\Http\Controllers\MandatoryDeductionController::class,
    'create'
])->name('mandatorydeductions.create');
// END MANDATORY DEDUCTIONS FUNCTIONS