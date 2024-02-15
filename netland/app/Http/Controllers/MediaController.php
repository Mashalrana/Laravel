<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Media;

class MediaController extends Controller
{
    // Methode om alle films op te halen en weer te geven
    public function films()
    {
        $films = Media::where('is_movie', true)->get();
        return view('films', compact('films'));
    }

    // Methode om alle series op te halen en weer te geven
    public function series()
    {
        $series = Media::where('is_movie', false)->get();
        return view('series', compact('series'));
    }

    // Methode om details van een film of serie op te halen en weer te geven
    public function show($id)
    {
        $media = Media::findOrFail($id);
        return view('media', compact('media'));
    }
}
