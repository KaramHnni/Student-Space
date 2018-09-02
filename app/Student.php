<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public function getFullNameAttribute(){
        return "$this->first_name $this->last_name";
    }

    public function getPhoneNumberAttribute(){
        return "0$this->phone";
    }
    public function absences(){
        return $this->hasMany('\App\Absence','student_id','id');
    }

    public function year(){
        return $this->hasOne('\App\Year','id','year_id');
    }

    public function city(){
        return $this->hasOne('\App\City','id','city_id');
    }


    public function updateDetails($request){
        
        $this->first_name=$request->first_name;
        $this->last_name=$request->last_name;
        $this->city_id=$request->place_of_birth;
        $this->date_of_birth=$request->date_of_birth;
        $this->phone=$request->phone;
        $this->year_id=$request->year;
        $this->save();
    }
    
}
