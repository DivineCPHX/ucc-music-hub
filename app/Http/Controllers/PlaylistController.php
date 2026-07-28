<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Playlist;
use Illuminate\Http\Request;

class PlaylistController extends Controller
{
    public function playlists()
    {
        $playlists = Playlist::with(['artist', 'album'])->get();
        return view('playlists.index', compact('playlists'));
    }
    public function playlistsDetails()
    {
        return view('playlists.details');
    }
}
