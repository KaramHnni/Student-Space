<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    public function absences(){
        return $this->hasMany('App\Absence','module_id','id');
    }
    public function speciality(){
        return $this->hasOne('\App\Speciality','id','speciality_id');
    }

    public function getFullNameAttribute(){
        return "$this->name$this->semestre" ;
    }

}
