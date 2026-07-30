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
        'is_featured',
        'playlist_photo',
        'playlist_creator',
        'playlist_duration',
        'playlist_followers',
        'timestamps',
    ];

    public function getFormattedDurationAttribute(): string
    {
        $seconds = $this->songs->sum('song_duration');

        $hours = floor($seconds / 3600);
        $minutes = floor(($seconds % 3600) / 60);
        $seconds = $seconds % 60;

        if ($hours > 0) {
            return sprintf('%d:%02d:%02d', $hours, $minutes, $seconds);
        }

        return sprintf('%d:%02d', $minutes, $seconds);
    }

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

    public function playlistLinks()
    {
        return $this->hasMany(PlaylistLinks::class);
    }
}
