<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    public function getFullNameAttribute(){
        return "$this->first_name $this->last_name";
    }

    

    public function updateDetails($request){
        $this->first_name=$request->first_name;
        $this->last_name=$request->last_name;
        $this->place_of_birth=$request->place_of_birth;
        $this->date_of_birth=$request->date_of_birth;
        $this->phone=$request->phone;
        $this->speciality=$request->speciality;
        $this->Grade = $request->grade;
        $this->save();
    }
}
