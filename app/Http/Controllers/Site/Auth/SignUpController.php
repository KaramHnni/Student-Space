<?php

namespace App\Http\Controllers\Site\Auth;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class SignUpController extends Controller
{
    public function show( ){
        return view('pages.site.auth.signup');
    }

    public function register(Request $request){

            $user= new User;
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->save();
            if(Auth::attempt(['email' =>$request->email ,'password' =>$request->password])){
                
             return redirect()->intended('home');

            }


    }
}
