<?php

namespace App\Http\Controllers;

use App\Models\Train;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PageController extends Controller
{

    // Ritorno la view home
    public function index()
    {
        // Prelavo la data corrente
        $today = Carbon::today();

        // Prelevo i treni che devono partire da oggi in poi e li ordino per orario di partenza
        $trains = Train::where('departure_time', '>=', $today)
            ->orderBy('departure_time')
            ->get();
        
        return view('home', compact('trains', 'today'));
    }
}
