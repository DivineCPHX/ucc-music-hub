<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlaylistController extends Controller
{
    public function playlists()
    {
        return view('playlists.index');
    }
    public function playlistsDetails()
    {
        return view('playlists.details');
    }
}
