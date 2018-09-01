<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Speciality extends Model
{
    public function departement(){
        return $this->hasOne('\App\Departement','id','departement_id');
    }

    public function modules(){
        return $this->hasMany('App\Departement','speciality_id','id');
    }
}
