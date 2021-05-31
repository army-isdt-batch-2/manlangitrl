
<?php

use Illuminate\Support\Facades\Route;


// PAYSLIPS FUNCTIONS
Route::get('/payslips', [
    App\Http\Controllers\PayslipController::class,
    'index'
])->name('payslips');

Route::get('/payslips/create', [
    App\Http\Controllers\PayslipController::class,
    'create'
])->name('payslips.create');

Route::get('/payslip/view', [
    App\Http\Controllers\PayslipController::class,
    'view'
])->name('payslips.view');
// END PAYSLIPS FUNCTIONS
