<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TeacherBookingClass extends Model
{
    public function ClassList(){
        return $this->belongsTo('App\ClassList','ClassId');
    }
    public function Club(){
        return $this->belongsTo('App\Club','ClubId');
    }
    public function Teachers(){
        return $this->belongsTo('App\users','TeacherId');
    }
    public function Students(){
        return $this->belongsTo('App\users','StudentId');
    }
    public function Package(){
        return $this->belongsTo('App\users','PackageId');
    }
}
