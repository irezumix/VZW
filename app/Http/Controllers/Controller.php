<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function home()
    {
        return view('frontpage');
    }

    public function homeContent()
    {
        $events = Event::get();
        return view('frontpage', compact('events'));
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
