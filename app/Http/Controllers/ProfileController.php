<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function __invoke()
    {
        $name = 'firmansyah';
        return view('profile', compact('name'));
    }
}
