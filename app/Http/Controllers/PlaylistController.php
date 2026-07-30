<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Playlist;
use Illuminate\Http\Request;

class PlaylistController extends Controller
{
    public function playlists()
    {
        $playlists = Playlist::with(['artist', 'album', 'songs'])
            ->withCount('songs')
            ->latest()
            ->get();

        return view('playlists.index', compact('playlists'));
    }

    public function playlistsDetails(Playlist $playlist)
    {
        $playlist = Playlist::with([
            'artist',
            'album',
            'songs.artist',
            'songs.genre',
        ])->findOrFail($playlist->id);

        $playlist->load('playlistLinks');

        return view('playlists.details', compact('playlist'));
    }

}
