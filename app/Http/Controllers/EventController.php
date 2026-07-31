<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\EventPage;
use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function events()
    {
        $eventPage = EventPage::current();

        $events = Event::with(['eventType', 'artist'])
            ->where('is_active', true)
            ->orderBy('year')
            ->orderBy('month')
            ->orderBy('day')
            ->orderBy('time')
            ->get();

        return view('events.index', compact('eventPage', 'events'));
    }
}
