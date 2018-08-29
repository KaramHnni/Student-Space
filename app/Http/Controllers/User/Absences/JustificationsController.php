<?php

namespace App\Http\Controllers\User\Absences;
use App\Absence;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class JustificationsController extends Controller
{
    public function show($id){
        $absence = Absence::where('id',$id)->first();
        return view('pages.user.absence.justify')->with('absence',$absence);
    }
}
