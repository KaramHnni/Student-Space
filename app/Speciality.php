<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Speciality extends Model
{


    public function getFullNameAttribute(){

        return "$this->name ($this->abbreviation)";
    }
    public function departement(){
        return $this->hasOne('\App\Departement','id','departement_id');
    }

    public function years(){
        return $this->hasMany('\App\Year','speciality_id','id');
    }
}
