<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Song;
use Illuminate\Http\Request;

class SongController extends Controller
{
    public function songs()
    {
        $songs = Song::with(['genre', 'artist', 'album'])->get();
        return view('songs.index', compact('songs'));
    }
    public function songsDetails(Song $song)
    {
        $song->load('genre', 'artist', 'album');
        return view('songs.details', compact('genre', 'artist', 'album', 'song'));
    }
}
