<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departement extends Model
{
    public function GetFullNameAttribute(){

        return "$this->abbreviation"." : "."$this->name";
    }
    public function specialities(){
        return $this->hasMany('\App\Speciality','departement_id','id');
    }
}
