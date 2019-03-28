<?php

namespace App;

use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;

class EventsCalendar extends Model
{



    public function user()
    {
        return $this->hasMany('App\Users');
    }
}
