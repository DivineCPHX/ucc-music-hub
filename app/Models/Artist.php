<?php

namespace App\Models;

use App\Models\Genre;
use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    protected $fillable = [
        'genre_id',
        'name',
        'slug',
        'email',
        'bio',
        'password',
        'artist_photo',
        'website',
        'is_featured',
        'artist_label',
        'artist_location',
        'artist_listeners',
        'active_since',
        'email_verified_at'

    ];

    protected $hidden = [
        'password',
    ];

    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'website' => 'array',
            'is_featured' => 'boolean',
            'artist_listeners' => 'string',
            'active_since' => 'integer',
        ];
    }

    public function genre()
    {
        return $this->belongsTo(Genre::class);
    }

    public function artist_link()
    {
        return $this->belongsToMany(ArtistLink::class);
    }
}
