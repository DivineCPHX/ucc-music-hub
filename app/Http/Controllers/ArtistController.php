<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Album;
use App\Models\Artist;
use App\Models\Genre;
use Illuminate\Http\Request;

class ArtistController extends Controller
{

    public function artists(Request $request)
    {
        $artists = Artist::query()
        ->when($request->search, function ($query, $search) {
            $query->where('name', 'like', "%{$search}%");
        })
        ->when($request->genre, function ($query, $genre) {
            $query->where('genre_id', $genre);
        })
        ->when($request->sort === 'newest', fn ($q) => $q->latest())
        ->when($request->sort === 'az', fn ($q) => $q->orderBy('name'))
        ->when(!$request->filled('sort') || $request->sort === 'popular', fn ($q) => $q->latest())
        ->paginate(12)
        ->withQueryString();

        $genres = Genre::orderBy('name')->get();

        return view('artists.index', compact('artists', 'genres'));
    }

    public function artistsDetails(Artist $artist)
    {
        // $artist->load('genre', 'artistLink', 'albums');
        $artist->load('albums');
        $artist = Artist::with('genre', 'artistLinks', 'albums')->findOrFail($artist->id);
        return view('artists.details', compact('artist'));
    }
}
