<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Album;
use App\Models\Artist;
use Illuminate\Http\Request;

class AlbumController extends Controller
{
    public function albums()
    {
        $albums = Album::with(['artist', 'albumLinks', 'songs'])->get();
        return view('albums.index', compact('albums'));
    }
    public function albumsDetails(Album $album)
    {
        $artist = Artist::findOrFail($album->artist_id);
        $album->load('albumLinks');
        return view('albums.details', compact('album', 'artist'));
    }
}
