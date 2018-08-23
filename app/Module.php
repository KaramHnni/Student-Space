<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    public function absences(){
        return $this->hasMany('App\Absence','module_id','id');
    }
}
