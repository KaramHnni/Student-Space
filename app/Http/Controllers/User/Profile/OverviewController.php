<?php

namespace App\Http\Controllers\User\profile;
use App\User;
use App\Student;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OverviewController extends Controller
{
    public function show(){
        return view('pages.user.profile.overview.' . auth()->user()->type);

    }
}
