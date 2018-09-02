<?php

namespace App\Http\Controllers\User\Profile;
use App\User;
use App\Student;
use App\City;
use App\Speciality;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DetailsController extends Controller
{
    public function show(){
        return view('pages.user.profile.edit.'.auth()->user()->type.'-details',[
            "cities" => City::all(),
            "specialities" => Speciality::all()

        ]);
    }

    public function updateStudent(Request $request){
        auth()->user()->details->updateDetails($request);
        return redirect(Route('user.profile'));
    }
    public function updateTeacher(Request $request){
        auth()->user()->details->updateDetails($request);
        return redirect(Route('user.profile'));
    }
}
