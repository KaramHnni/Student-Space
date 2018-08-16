<?php

namespace App\Http\Controllers\Site\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class SignInController extends Controller
{
    public function show(){
        return view('pages.site.auth.login');
    }
    

    public function authentificate(Request $request){

        $credentials = $request->only('email','password');

        if(Auth::attempt($credentials)){
          
            return redirect()->intended('home');
        }

    }
}
