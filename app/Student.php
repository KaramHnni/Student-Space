<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public function getFullNameAttribute(){
        return "$this->first_name $this->last_name";
    }


    public function absences(){
        return $this->hasMany('\App\Absence','student_id','id');
    }
}
