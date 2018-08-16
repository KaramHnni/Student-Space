<?php

namespace App\Http\Controllers\Site\Ressources;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AboutController extends Controller
{
    public function show(){
        return view('pages.site.ressources.about');
    }
}
