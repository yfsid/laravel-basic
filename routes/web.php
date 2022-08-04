<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\EmployeeController;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/profile', [ProfileController::class, '__invoke'])->name('profile');

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::view('/series/index', 'series.index');
Route::view('/series/show', 'series.show');

Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'create'])->name('contact.create');

// Route::get('/employees', [EmployeeController::class, 'index'])->name('employees');
// Route::get('/employees/create', [EmployeeController::class, 'create'])->name('employees.create');
// Route::post('/employees', [EmployeeController::class, 'store'])->name('employees.store');
// Route::get('/employees/{id}/edit', [EmployeeController::class, 'edit'])->name('employees.edit');
// Route::put('/employees/{id}', [EmployeeController::class, 'update'])->name('employees.update');

Route::resource('employee', EmployeeController::class);
Route::resource('user', UserController::class);
