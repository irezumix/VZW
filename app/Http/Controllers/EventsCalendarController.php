<?php

namespace App\Http\Controllers;

use App\EventsCalendar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use MaddHatter\LaravelFullcalendar\Facades\Calendar;

class EventsCalendarController extends Controller
{
    public function index()
    {
        $eventsCalender = EventsCalendar::get();
        $events_list = [];
        foreach ($eventsCalender as $key => $event) {
            $events_list[] = Calendar::event(
                $event->event_name,
                true,
                new \DateTime($event->start_date),
                new \DateTime($event->end_date . '+1day')
            );
        }
        $calendar_details = Calendar::addEvents($events_list);

        return view('calendar.calendar', compact('calendar_details'));
    }
    public function add()
    {
        $event = new Calendar;
        return view('calendar.add');
    }

    public function addEvent(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'event_name' => 'required',
            'user_id' => 'required',
            'start_date' => 'required|before:end_date',
            'end_date' => 'required|after:start_date',
        ]);

        if ($validator->fails()) {
            \Session::flash('warning', 'Er is een foute ingave, probeer opnieuw');
            return redirect()->route('calendar.add')->withInput()->withErrors($validator);
        }

        $query = DB::table('events_calendars')->whereDate('end_date', '>=', $request->start_date)->whereDate('start_date', '<=', $request->end_date);
        if ($query->exists()) {
            \Session::flash('warning', 'Deze data is bezet!');
            return redirect()->route('calendar.add')->withInput()->withErrors($validator);

        }

        $eventcalendar = new EventsCalendar;
        $eventcalendar->event_name = $request->event_name;
        $eventcalendar->user_id = $request->user_id;
        $eventcalendar->start_date = $request->start_date;
        $eventcalendar->end_date = $request->end_date;

        $eventcalendar->save();

        \Session::flash('success', 'Event added successfully');
        return redirect()->route('calendar.index');
    }

    public function eventIndex()
    {
        $events = Auth::user()->calendarEvents()->get();
        return view('calendar.show', compact('events'));
    }

    public function edit($id)
    {
        $events = EventsCalendar::find($id);
        return view('calendar.edit', compact('events'));
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'event_name' => 'required',
            'user_id' => 'required',
            'start_date' => 'required|before:end_date',
            'end_date' => 'required|after:start_date',
        ]);

        if ($validator->fails()) {
            \Session::flash('warning', 'Er is een foute ingave, probeer opnieuw');
            return redirect()->route('calendar.add')->withInput()->withErrors($validator);
        }

        // USER MAG WEL ZIJN EIGEN DATA OVERSCHRIJVEN!!

        // $query = DB::table('events_calendars')->whereDate('end_date', '>=', $request->start_date)->whereDate('start_date', '<=', $request->end_date);
        // if ($query->exists()) {
        //     \Session::flash('warning', 'Deze data is bezet!');
        //     return redirect()->route('calendar.add')->withInput()->withErrors($validator);
        // }

        $eventcalendar = EventsCalendar::find($id);
        $eventcalendar->event_name = $request->event_name;
        $eventcalendar->user_id = $request->user_id;
        $eventcalendar->start_date = $request->start_date;
        $eventcalendar->end_date = $request->end_date;
        $eventcalendar->save();

        \Session::flash('success', 'Event added successfully');
        return redirect()->route('calendar.show');
    }
    public function delete($id)
    {
        $event = EventsCalendar::find($id);
        $event->delete();
        return redirect()->route('calendar.show');
    }
}
