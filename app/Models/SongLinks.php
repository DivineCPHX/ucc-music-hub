<?php

namespace App\Models;

use App\Models\Song;
use Illuminate\Database\Eloquent\Model;

class SongLinks extends Model
{
    protected $fillable = [
        'song_id',
        'name',
        'url',
        'icon',
        'timestamps',
    ];

    public function song()
    {
        return $this->belongsTo(Song::class);
    }

}
