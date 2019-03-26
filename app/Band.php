<?php

namespace App;

use App\Event;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class band extends Model
{
    public function events()
    {
        return $this->hasMany('App\Event');
    }
}
