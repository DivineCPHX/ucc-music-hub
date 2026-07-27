<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AlbumLink extends Model
{
    protected $fillable = [
        'album_id',
        'name',
        'icon',
        'class_indicator',
        'url',
    ];

    public function albumLink()
    {
        return $this->belongsTo(Album::class);
    }
}
