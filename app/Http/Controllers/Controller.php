<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function homeContent()
    {
        $events = Event::get();
        $now = Event::latest()->first();
        return view('frontpage', compact('events', 'now'));
    }

    public function Contact()
    {
        return view('contact');
    }
    public function About()
    {
        return view('about');
    }
    public function Facilities()
    {
        return view('Facilities');
    }
}
