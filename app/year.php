<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Year extends Model
{
    public function GetFullNameAttribute(){

        return strtoupper($this->name). " YEAR";
    }

   


}
