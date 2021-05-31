<?php

use Illuminate\Support\Facades\Route;

// EMPLOYEE FUNCTIONS
Route::get('/employees', [
    App\Http\Controllers\EmployeeController::class,
    'index'
])->name('employees');

Route::get('/employees/create', [
    App\Http\Controllers\EmployeeController::class,
    'create'
])->name('employees.create');
 // END EMPLOYEE FUNCTIONS