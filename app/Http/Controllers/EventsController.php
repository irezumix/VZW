<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;

class EventsController extends Controller
{
    public function index()
    {
        $events = Event::get();
        return view('events/index', compact('events'));
    }
    public function create()
    {
        $new_event = new Event;
        return view('events.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'titel' => 'required',
            'datum' => 'required|after:today',
            'prijs' => 'required|integer',
            'tickets' => 'required',
            'genre' => 'required',
            'description' => 'required',
            'file' => 'required',
        ]);
        $new_event = new Event;
        $new_event->titel = $request->titel;
        $new_event->datum = $request->datum;
        $new_event->time = $request->time;
        $new_event->prijs = $request->prijs;
        $new_event->tickets = $request->tickets;
        $new_event->genre = $request->genre;
        $new_event->description = $request->description;
        $new_event->file = $request->file;
        $new_event->save();
        return redirect()->route('events');
    }

    public function details($id)
    {
        $events_details = Event::find($id);
        return view('events.detail', compact('events_details'));
    }

    public function edit($id)
    {
        $event = Event::find($id);
        return view('events.edit', compact('event'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'titel' => 'required',
            'datum' => 'required|after:today',
            'prijs' => 'required|integer',
            'tickets' => 'required',
            'genre' => 'required',
            'description' => 'required',
        ]);

        $new_event = Event::find($id);
        $new_event->titel = $request->titel;
        $new_event->datum = $request->datum;
        $new_event->prijs = $request->prijs;
        $new_event->tickets = $request->tickets;
        $new_event->genre = $request->genre;
        $new_event->description = $request->description;
        $new_event->save();
        // terug naar overzicht
        return redirect()->route('events');
    }
}
