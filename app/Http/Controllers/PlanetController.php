<?php

namespace App\Http\Controllers;

use App\Models\Planet;
use Illuminate\Http\Request;

class PlanetController extends Controller
{
    public function index()
    {
        // Gebruik Eloquent om alle planeten op te halen
        $planets = Planet::all();
        dd($planets);
        return view('planets.index', ['planets' => $planets]);
    }

    public function show($planet)
    {
        // Gebruik Eloquent om een planeet op te halen op basis van de naam
        $planetData = Planet::where('name', $planet)->first();

        if (!$planetData) {
            return redirect('/planets');
        }

        return view('planets.show', ['planet' => $planetData]);
    }
}
