<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seance extends Model
{
    public function absences(){
        return $this->hasMany('App\Absence','seance_id','id');
    }
}
