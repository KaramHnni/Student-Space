<?php

namespace App\Http\Controllers\User\profile;
use App\User;
use App\Student;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    public function show(){
        $student = Student::where('user_id',auth()->user()->id)->get()->first();
        return view('pages.user.profile.show')->with('student',$student);

    }
}
