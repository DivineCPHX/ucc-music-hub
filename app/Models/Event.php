<?php

namespace App\Models;

use App\Models\Artist;
use App\Models\EventType;
use App\Models\TicketType;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{

    public $fillable = [
        'event_type_id',
        'artist_id',
        'name',
        'venue',
        'location',
        'day',
        'month',
        'year',
        'time',
        'is_active',
    ];
    public function getEventDateAttribute(): Carbon
    {
        return Carbon::create($this->year, $this->month, $this->day)
            ->setTimeFromTimeString($this->time);
    }

    public function eventType()
    {
        return $this->belongsTo(EventType::class);
    }

    public function artist()
    {
        return $this->belongsTo(Artist::class);
    }

    public function ticketTypes()
    {
        return $this->hasMany(TicketType::class);
    }
}
