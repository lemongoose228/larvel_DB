<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('index_task');
});

Route::get('tasks/create', [App\Http\Controllers\TaskController::class, 'create'])->name('create_task');
Route::prefix('tasks')->group(function() {
    Route::get('', [App\Http\Controllers\TaskController::class, 'index'])->name("index_task");
    Route::post('', [App\Http\Controllers\TaskController::class, 'store'])->name("store_task");
    Route::get('{task}', [App\Http\Controllers\TaskController::class, 'edit'])->name('edit_task');
    Route::post('{task}', [App\Http\Controllers\TaskController::class, 'update'])->name('update_task');
    Route::delete('{task}', [App\Http\Controllers\TaskController::class, 'destroy'])->name('delete_task');
});

Route::get('staff/create', [App\Http\Controllers\EmployeeController::class, 'create'])->name('create_employee');
Route::prefix('staff')->group(function() {
    Route::get('', [App\Http\Controllers\EmployeeController::class, 'index'])->name("index_employee");
    Route::post('', [App\Http\Controllers\EmployeeController::class, 'store'])->name("store_employee");
    Route::get('{employee}', [App\Http\Controllers\EmployeeController::class, 'edit'])->name('edit_employee');
    Route::post('{employee}', [App\Http\Controllers\EmployeeController::class, 'update'])->name('update_employee');
    Route::delete('{employee}', [App\Http\Controllers\EmployeeController::class, 'destroy'])->name('delete_employee');
});