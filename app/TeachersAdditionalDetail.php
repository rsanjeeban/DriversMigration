<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TeachersAdditionalDetail extends Model
{
    public function Users(){
        return $this->belongsTo('users','id');
    }
}
