<?php

namespace App\Models;

use App\Models\Album;
use App\Models\Artist;
use Illuminate\Database\Eloquent\Model;

class Playlist extends Model
{
    protected $fillable = [
        'id',
        'artist_id',
        'album_id',
        'title',
        'slug',
        'description',
        'playlist_photo',
        'playlist_creator',
        'playlist_duration',
        'playlist_followers',
        'timestamps',
    ];

    public function artist()
    {
        return $this->belongsTo(Artist::class);
    }

    public function album()
    {
        return $this->belongsTo(Album::class);
    }

    public function songs()
    {
        return $this->belongsToMany(Song::class)
            ->withPivot('order')
            ->orderBy('playlist_song.order');
    }
}
