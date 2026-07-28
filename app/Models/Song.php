<?php

namespace App\Models;

use App\Models\Album;
use App\Models\Artist;
use App\Models\Genre;
use App\Models\Playlist;
use App\Models\SongLinks;
use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    protected $fillable = [
        'genre_id',
        'artist_id',
        'album_id',
        'playlist_id',
        'title',
        'slug',
        'song_photo',
        'release_month',
        'release_year',
        'song_bpm',
        'song_key',
        'description',
        'song_lyrics',
        'song_duration',
        'social_links',
        'is_featured',
        'timestamps',
    ];

    public function getFormattedDurationAttribute(): string
    {
        $seconds = $this->song_duration;

        $hours = floor($seconds / 3600);
        $minutes = floor(($seconds % 3600) / 60);
        $seconds = $seconds % 60;

        if ($hours > 0) {
            return sprintf('%d:%02d:%02d', $hours, $minutes, $seconds);
        }

        return sprintf('%d:%02d', $minutes, $seconds);
    }

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

    public function playlist()
    {
        return $this->belongsToMany(Playlist::class);
    }

    public function songLinks()
    {
        return $this->hasMany(SongLinks::class);
    }
}
