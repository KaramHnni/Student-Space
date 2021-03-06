<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function getDetailsAttribute(){
        if($this->type == 'student'){
            return Student::where('user_id',$this->id)->first();
        }
        if($this->type == 'teacher'){
            return Teacher::where('user_id',$this->id)->first();
        }
        
    }
    
}

