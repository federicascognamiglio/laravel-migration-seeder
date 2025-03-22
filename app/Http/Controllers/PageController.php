<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{

    // Ritorno la view home
    public function index()
    {
        return view('home');
    }
}
