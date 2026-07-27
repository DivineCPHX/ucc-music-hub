<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    protected $fillable = [
        'album_id',
        'artist_id',
        'genre_id',
        'title',
        'slug',
        'song_photo',
        'release_date',
        'song_bpm',
        'song_key',
        'description',
        'song_lyrics',
        'song_duration',
        'social_links',
        'created_at',
        'updated_at',
        'playlist_id',
    ];

    public function album()
    {
        return $this->belongsTo(Album::class);
    }

    public function artist()
    {
        return $this->belongsTo(Artist::class);
    }
    
    public function genre()
    {
        return $this->belongsTo(Genre::class);
    }
}
