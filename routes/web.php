<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/profile', function () {
    $name = 'Firmansyah';
    // return view('profile', ['name' => $name]);
    return view('profile', compact('name'));
})->name('profile');

$appName = 'Laravel is awesome';
// Route::view('/home', 'home', ['appName' => $appName]);
Route::view('/home', 'home', compact('appName'))->name('home');

Route::view('/series/index', 'series.index');
Route::view('/series/show', 'series.show');
