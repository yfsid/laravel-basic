<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $appName = 'Laravel is awesome';
        return view('home', compact('appName'));
    }
}
