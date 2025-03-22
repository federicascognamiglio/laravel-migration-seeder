<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{

    // Ritorno la view home
    public function index()
    {
        // Prelevo i treni che devono partire da oggi in poi e li ordino per orario di partenza
        $trains = Train::where('departure_time', '>=', Carbon::today())
            ->orderBy('departure_time')
            ->get();
        
        return view('home', compact('trains'));
    }
}
