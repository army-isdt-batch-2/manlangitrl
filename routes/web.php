<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('login');
});


Route::get('/login', [
    App\Http\Controllers\LoginController::class,
    'index'
]);


Route::get('/departments', [
    App\Http\Controllers\DepartmentController::class,
    'index'
])->name('departments');

Route::get('/departments/create', [
    App\Http\Controllers\DepartmentController::class,
    'create'
])->name('departments.create');

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
])->name('timekeeping.view');;
//END  TIME KEEPING FUNCTIONS

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


