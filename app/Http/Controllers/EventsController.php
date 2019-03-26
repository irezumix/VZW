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
        // $request->validate([
        //     'inkomend' => 'required|numeric',
        //     'factuurnummer' => 'required|numeric',
        //     'datum' => 'required',
        //     'vervaldatum' => 'required',
        //     'bedrag_excl' => 'required|numeric',
        //     'btw' => 'required|numeric',
        //     'betaald' => 'required|numeric'
        // ]);
        $new_event = new Event;
        $new_event->titel = $request->titel;
        $new_event->datum = $request->datum;
        $new_event->prijs = $request->prijs;
        $new_event->tickets = $request->tickets;
        $new_event->genre = $request->genre;
        $new_event->description = $request->description;
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
        // $request->validate([
        //     'inkomend' => 'required|numeric',
        //     'factuurnummer' => 'required|numeric',
        //     'datum' => 'date',
        //     'vervaldatum' => 'date',
        //     'bedrag_excl' => 'required|numeric',
        //     'btw' => 'required|numeric',
        //     'betaald' => 'required|numeric'
        // ]);
        // formulier data seven in databank
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
