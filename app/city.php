<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    public function GetFullNameAttribute(){

        return "$this->code   $this->name";
    }
}
