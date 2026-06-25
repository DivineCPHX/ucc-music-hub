<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlbumController extends Controller
{
    public function albums()
    {
        return view('albums.index');
    }
    public function albumsDetails()
    {
        return view('albums.details');
    }
}
