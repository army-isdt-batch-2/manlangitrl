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


Route::get('/table', [
    App\Http\Controllers\LoginController::class,
    'table'
]);

Route::get('/layout', [
    App\Http\Controllers\LoginController::class,
    'layout'
]);


Route::get('/departments', [
    App\Http\Controllers\DepartmentController::class,
    'index'
]);
Route::get('/departments/create', [
    App\Http\Controllers\DepartmentController::class,
    'create'
]);

// EMPLOYEE FUNCTIONS
Route::get('/employees', [
    App\Http\Controllers\EmployeeController::class,
    'index'
]);

Route::get('/employees/create', [
    App\Http\Controllers\EmployeeController::class,
    'create'
]);
 // END EMPLOYEE FUNCTIONS

// LOANS FUNCTIONS
Route::get('/loans', [
    App\Http\Controllers\LoanController::class,
    'index'
]);
Route::get('/loans/create', [
    App\Http\Controllers\LoanController::class,
    'create'
]);

// END LOANS FUNCTIONS

// LEAVES FUNCTIONS
Route::get('/leaves', [
    App\Http\Controllers\LeaveController::class,
    'index'
]);

Route::get('/leaves/create', [
    App\Http\Controllers\LeaveController::class,
    'create'
]);
//END LEAVES FUNCTIONS

// MANDATORY DEDUCTIONS FUNCTIONS
Route::get('/mandatory-deductions', [
    App\Http\Controllers\MandatoryDeductionController::class,
    'index'
]);
Route::get('/mandatory-deductions/create', [
    App\Http\Controllers\MandatoryDeductionController::class,
    'create'
]);
// END MANDATORY DEDUCTIONS FUNCTIONS

// TIME KEEPING FUNCTIONS
Route::get('/timekeeping', [
    App\Http\Controllers\TimeKeepingController::class,
    'index'
]);
Route::get('/timekeeping/create', [
    App\Http\Controllers\TimeKeepingController::class,
    'create'
]);
Route::get('/timekeeping/view', [
    App\Http\Controllers\TimeKeepingController::class,
    'timeview'
]);
//END  TIME KEEPING FUNCTIONS

// PAYSLIPS FUNCTIONS
Route::get('/payslips', [
    App\Http\Controllers\PayslipController::class,
    'index'
]);
Route::get('/payslips/create', [
    App\Http\Controllers\PayslipController::class,
    'create'
]);
Route::get('/payslip/view', [
    App\Http\Controllers\PayslipController::class,
    'view'
]);
// END PAYSLIPS FUNCTIONS

Route::get('/settings', [
    App\Http\Controllers\SettingController::class,
    'index'
]);
