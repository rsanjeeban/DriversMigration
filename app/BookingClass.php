<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BookingClass extends Model
{
    public function Users(){
        return $this->belongsTo('App\users','id');
    }
}
