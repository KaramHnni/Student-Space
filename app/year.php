<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Year extends Model
{
    public function GetFullNameAttribute(){

        return strtoupper($this->name). " YEAR";
    }

    public function students(){
        return $this->hasMany('\App\Student','year_id','id');
    }

    public function speciality(){
        return $this->hasOne('\App\Speciality','id','speciality_id');
    }

    public function modules(){
        return $this->hasMany('\App\Year','year_id','id');
    }
   


}
