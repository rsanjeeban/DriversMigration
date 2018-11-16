<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentBookedPackage extends Model
{
    public function Teachers(){
        return $this->hasMany('App\users','id');
    }
    public function Students(){
        return $this->hasMany('App\users','id');
    }
    public function Packages(){
        return $this->hasMany('App\Package','id');
    }
    // public function Packages(){
    //     return $this->hasOne('App\Package','id');
    // }

}
