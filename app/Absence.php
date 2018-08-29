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
    public function module(){
        return  $this->hasOne('\App\Module','id','module_id');
      }
      public function Justification(){
        return $this->hasOne('\App\Justification');
      }

      public function getStatus(){
        if($this->status == 0){
          return "Not Justified";
          
        }
        if($this->status ==1){
          return "Justified";
        }
        if($this->status==2){
          return "waiting for approval";
        }
      }

      public function fetchLatestAbsences(){

       
      }
      

    
}
