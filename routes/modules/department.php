<?php

use Illuminate\Support\Facades\Route;


Route::get('/departments', [
    App\Http\Controllers\DepartmentController::class,
    'index'
])->name('departments');

Route::get('/departments/create', [
    App\Http\Controllers\DepartmentController::class,
    'create'
])->name('departments.create');

Route::post('/departments/create/save', [
    App\Http\Controllers\DepartmentController::class,
    'save'
])->name('departments.create.save');

Route::get('/departments/edit/{id}', [
    App\Http\Controllers\DepartmentController::class,
    'edit'
])->name('departments.edit');

Route::post('/departments/update/{id}', [
    App\Http\Controllers\DepartmentController::class,
    'update'
])->name('departments.update');

Route::delete('/departments/delete/{id}', [
    App\Http\Controllers\DepartmentController::class,
    'destroy'
])->name('departments.delete');