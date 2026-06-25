<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SongController extends Controller
{
    public function songs()
    {
        return view('songs.index');
    }
    public function songsDetails()
    {
        return view('songs.details');
    }
}
