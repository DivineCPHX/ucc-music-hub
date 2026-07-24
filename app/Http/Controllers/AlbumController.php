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
        return view('albums.index', [
            'albums' => Album::all(),
        ]);
    }
    public function albumsDetails(Album $album)
    {
        $album = Album::with('artist', 'songs',)->findOrfail($album->id);
        $artist = Artist::findOrFail($album->artist_id);
        return view('albums.details', compact('album', 'artist'));
    }
}
