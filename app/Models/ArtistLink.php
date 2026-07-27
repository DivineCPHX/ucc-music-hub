<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ArtistLink extends Model
{
    protected $fillable = [
        'artist_id',
        'name',
        'icon',
        'url',
    ];

    public function artist()
    {
        return $this->belongsTo(Artist::class);
    }
}
