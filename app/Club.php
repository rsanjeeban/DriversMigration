<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Club extends Model
{
    public function Users(){
        return $this->hasMany('App\users','id');
    }
    public function TeacherBookingClass(){
        return $this->hasMany('App\TeacherBookingClass','id');
    }
    
}
