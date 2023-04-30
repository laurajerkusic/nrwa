<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SalariesController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\EmployeesController;
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
    return view('welcome');
});
Route::resource('product', App\Http\Controllers\ProducttController::class);


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// routes/web.php


Route::resource('departments', DepartmentController::class);


Route::get('/employees', [EmployeesController::class, 'index'])->name('employees.index');
Route::get('/employees/create', [EmployeesController::class, 'create'])->name('employees.create');
Route::post('/employees', [EmployeesController::class, 'store'])->name('employees.store');
Route::get('/employees/{emp_no}/edit', [EmployeesController::class, 'edit'])->name('employees.edit');
Route::put('/employees/{emp_no}', [EmployeesController::class, 'update'])->name('employees.update');
Route::delete('/employees/{emp_no}', [EmployeesController::class, 'destroy'])->name('employees.destroy');




Route::get('/salaries', [SalariesController::class, 'index'])->name('salaries.index');
Route::get('/salaries/create', [SalariesController::class, 'create'])->name('salaries.create');
Route::post('/salaries', [SalariesController::class, 'store'])->name('salaries.store');
Route::get('/salaries/{salary}', [SalariesController::class, 'show'])->name('salaries.show');
Route::get('/salaries/{salary}/edit', [SalariesController::class, 'edit'])->name('salaries.edit');
Route::put('/salaries/{salary}', [SalariesController::class, 'update'])->name('salaries.update');
Route::delete('/salaries/{salary}', [SalariesController::class, 'destroy'])->name('salaries.destroy');