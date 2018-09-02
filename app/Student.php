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

    public function year(){
        return $this->hasOne('\App\Year','id','year_id');
    }

    public function updateDetails($request){
        
        $this->first_name=$request->first_name;
        $this->last_name=$request->last_name;
        $this->place_of_birth=$request->place_of_birth;
        $this->date_of_birth=$request->date_of_birth;
        $this->phone=$request->phone;
        $this->departement=$request->departement;
        $this->year_of_study=$request->year_of_study;
        $this->save();
    }
    
}
