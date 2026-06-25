<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArtistController extends Controller
{

    public function artists()
    {
        return view('artists.index');
    }
    public function artistsDetails()
    {
        return view('artists.details');
    }
}
