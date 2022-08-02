<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/profile', function () {
    $name = 'Firmansyah';
    // return view('profile', ['name' => $name]);
    return view('profile', compact('name'));
});

$appName = 'Laravel is awesome';
// Route::view('/home', 'home', ['appName' => $appName]);
Route::view('/home', 'home', compact('appName'));
