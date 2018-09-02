<?php

namespace App\Http\Controllers\Site\Auth;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Student;
use App\Teacher;
use App\City;
use App\Departement;
use App\Year;
use App\Module;
use App\Speciality;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class SignUpController extends Controller
{
    public function show(){
        return view('pages.site.auth.sign-up-index');
    }
    public function showStudent( ){
        return view('pages.site.auth.sign-up-student');
    }
    public function showTeacher( ){
        return view('pages.site.auth.sign-up-teacher');
    }

    public function registerStudent(Request $request){

        $type='student';
        $user= new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->type = $type;
        $user->save();
        if(Auth::attempt(['email' =>$request->email ,'password' =>$request->password])){
         return redirect(route('site.sign-up.student.info'));

        }
        


}
public function showStudentInfo(){
    
    return view('pages.user.auth.student.sign-up-student',[

        "cities" => City::all(),
        "specialities" => Speciality::all()
    ]);
}
public function registerStudentInfo(Request $request){
    $student=new Student;
    $student->user_id = auth()->user()->id;
    $student->first_name=$request->first_name;
    $student->last_name=$request->last_name;
    $student->city_id=$request->place_of_birth;
    $student->date_of_birth=$request->date_of_birth;
    $student->phone=$request->phone;
    $student->year_id = $request->year;
    $student->email=auth()->user()->email;
    $student->save();
    return redirect()->intended('/user/dashboard');
}


public function registerTeacher(Request $request){

    $type='teacher';
    $user= new User;
    $user->name = $request->name;
    $user->email = $request->email;
    $user->password = Hash::make($request->password);
    $user->type = $type;
    $user->save();
    if(Auth::attempt(['email' =>$request->email ,'password' =>$request->password])){
        
        return redirect(route('site.sign-up.teacher.info'));
    }


}


public function showTeacherInfo(){
    return view('pages.user.auth.teacher.sign-up-teacher',[

        "cities" => City::all(),
        "departements" => Departement::all(),
    ]);
}
public function registerTeacherInfo(Request $request){

    $teacher=new Teacher;
    $teacher->user_id = auth()->user()->id;
    $teacher->first_name=$request->first_name;
    $teacher->last_name=$request->last_name;
    $teacher->place_of_birth=$request->place_of_birth;
    $teacher->date_of_birth=$request->date_of_birth;
    $teacher->Grade = $request->grade;
    $teacher->phone=$request->phone;
    $teacher->speciality=$request->speciality;
    $teacher->save();
    return redirect()->intended('/user/dashboard');

}
}
