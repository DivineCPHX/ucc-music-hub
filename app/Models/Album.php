<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $fillable = [
        'artist_id',
        'slug',
        'name',
        'description',
        'photo',
        'release_month',
        'release_year',
        'is_featured',
        'created_at',
        'updated_at'
    ];

    protected function casts(): array
    {
        return [
            'release_year' => 'integer',
            'is_featured' => 'boolean',
        ];
    }

    public function artist()
    {
        return $this->belongsTo(Artist::class);
    }
}
