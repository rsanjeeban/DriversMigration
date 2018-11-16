<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class password_reset extends Model
{
    public function Users(){
        return $this->hasOne('App\users');
    }
}
