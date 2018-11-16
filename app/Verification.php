<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Verification extends Model
{
    public function Users(){
        return $this->hasOne('App\users','foreign_key');
    }
}
