<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PlaylistLinks extends Model
{
    protected $fillable = [
        'playlist_id',
        'name',
        'icon',
        'url',
        'timestamps',
    ];

    public function playlist()
    {
        return $this->belongsTo(Playlist::class);
    }
}
