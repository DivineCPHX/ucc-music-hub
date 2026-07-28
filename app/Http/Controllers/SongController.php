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
        $song = Song::with(['genre', 'artist', 'album'])->findOrFail($song->id);
        $song->load('songLinks');

        $relatedSongs = Song::where('artist_id', '=', $song->artist_id, 'and')
        ->where('id', '!=', $song->id, 'and')
        ->limit(4)
        ->get();

        return view('songs.details', compact('song', 'relatedSongs'));
    }
}
