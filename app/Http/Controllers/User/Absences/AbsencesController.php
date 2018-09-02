<?php

namespace App\Http\Controllers\User\Absences;
use App\Student;
use App\Absence;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AbsencesController extends Controller
{
    public function show(){
        $absences = Student::where('user_id',auth()->user()->id)->get()->first()->absences;
        return view('pages.user.absence.show')->with('absences',$absences);
    }
}
