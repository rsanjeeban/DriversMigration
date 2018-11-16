<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClassList extends Model
{
    public function TeachersBookingClasses(){
        return $this->hasMany('App\TeacherBookingClass','ClassId');
    }
}
