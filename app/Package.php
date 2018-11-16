<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    public function StudentPackages(){
        return $this->hasMany('App\StudentBookedPackage','PackageId');
    }
    public function Package(){
        return $this->hasMany('App\users','PackageId');
    }
    
}
