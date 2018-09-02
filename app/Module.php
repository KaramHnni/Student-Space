<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    public function absences(){
        return $this->hasMany('App\Absence','module_id','id');
    }
    
    public function year(){
        return $this->hasOne('\App\Year','id','year_id');
    }
    public function seances(){
        return $this->hasMany('\App\Seance','module_id','id');
    }

    

    public function getFullNameAttribute(){
        return "$this->name$this->semestre" ;
    }

}
