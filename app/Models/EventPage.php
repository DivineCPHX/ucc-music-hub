<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EventPage extends Model
{
    protected $table = 'event_pages';
    protected $fillable = ['page_sm_tag', 'page_hd_tag', 'current_year'];

    public static function current(): self
    {
        return static::firstOrCreate([], [
            'page_sm_tag' => 'Upcoming',
            'page_hd_tag' => 'Tour Dates',
            'current_year' => now()->year,
        ]);
    }
}
