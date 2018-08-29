<?php

namespace App\Http\Controllers\User\Absences;
use App\Absence;
use App\Justification;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class JustificationsController extends Controller
{
    public function show($id){
        $absence = Absence::where('id',$id)->first();
        return view('pages.user.absence.justify')->with('absence',$absence);
    }


    public function store(Request $request){

        $justification = new justification;
        $justification =$justification->store($request);
        
        return redirect('user/absence');



    }
}

