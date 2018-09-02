<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    public function GetFullNameAttribute(){

        return "$this->CityCode   $this->name";
    }

    public function getCityCodeAttribute(){
        if($this->code >0 && $this->code < 9){
            return "0$this->code";

        }
        else{
            return $this->code;
        }
    }
    public function students(){
        return $this->hasMany('App\Students','city_id','id');
    }
}
