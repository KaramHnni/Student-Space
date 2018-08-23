<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Absence extends Model
{
    public function student(){
       return  $this->hasOne('\App\Student','id','student_id');
    }
    public function seance(){
      return  $this->hasOne('\App\Seance','id','seance_id');
    }
}
