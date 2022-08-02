<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view('/home', 'home');

Route::get('/profile', function () {
    $name = 'Firmansyah';
    // return view('profile', ['name' => $name]);
    return view('profile', compact('name'));
});
