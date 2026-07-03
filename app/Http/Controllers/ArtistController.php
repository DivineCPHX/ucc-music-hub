<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Artist;
use Illuminate\Http\Request;

class ArtistController extends Controller
{

    public function artists()
    {
        return view('artists.index', [
            'artists' => Artist::all(),
        ]);
    }
    public function artistsDetails(Artist $artist)
    {
        return view('artists.details', compact('artist'));
    }
}
