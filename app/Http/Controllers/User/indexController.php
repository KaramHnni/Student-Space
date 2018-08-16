<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class indexController extends Controller
{
    public function redirectToDashboard(){

        return redirect( route('user.dashboard') );
     }
}
