<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class users extends Model
{
    public function Club(){
        return $this->belongsTo('App\Club','ClubId');
    }
    public function Card(){
        return $this->hasMany('App\CardDetail','UserId');
    }
    public function PasswordReset(){
        return $this->hasOne('App\password_reset','UserId');
    }
    public function TeacherProfile(){
        return $this->hasOne('App\TeachersAdditionalDetail','id');
    }
    public function BookingClass(){
        return $this->hasMany('App\BookingClass','StudentId');
    }
    public function StudentPackages(){
        return $this->hasMany('App\StudentBookedPackage','StudentId');
    }
}
