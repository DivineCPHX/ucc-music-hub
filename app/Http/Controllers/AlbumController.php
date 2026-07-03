<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Album;
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
        return view('albums.details', compact('album'));
    }
}
