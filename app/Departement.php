<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departement extends Model
{
    public function GetFullNameAttribute(){

        return "$this->abbreviation"." : "."$this->name";
    }
}
