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
}
