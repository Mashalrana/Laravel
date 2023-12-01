<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
use App\Models\Planet;
use Illuminate\Http\Request;
=======
use Illuminate\Support\Facades\DB;
>>>>>>> fd24093e6042b128f7028b5a421462523ed16839

class PlanetController extends Controller
{
    public function index()
    {
<<<<<<< HEAD
        // Gebruik Eloquent om alle planeten op te halen
        $planets = Planet::all();
        dd($planets);
=======
        $planets = DB::table('planets')->get();
>>>>>>> fd24093e6042b128f7028b5a421462523ed16839
        return view('planets.index', ['planets' => $planets]);
    }

    public function show($planet)
    {
<<<<<<< HEAD
        // Gebruik Eloquent om een planeet op te halen op basis van de naam
        $planetData = Planet::where('name', $planet)->first();
=======
        $planetData = DB::table('planets')->where('name', $planet)->first();
>>>>>>> fd24093e6042b128f7028b5a421462523ed16839

        if (!$planetData) {
            return redirect('/planets');
        }

        return view('planets.show', ['planet' => $planetData]);
    }
}
