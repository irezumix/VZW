<?php

namespace App;

use App\Band;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    public function bands()
    {
        return $this->hasMany('App\Band');
    }
}
