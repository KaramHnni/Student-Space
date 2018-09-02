@extends('layouts.user')

@section('page-title')
Edit Profile 
@endsection

@section('main-content')
<div class="lg:w-2/3 mx-auto mt-16 bg-blue-lightest pb-4 shadow text-center rounded ">
    <h1 class="py-4 bg-white font-semibold text-xl">Edit Your Profile </h1>
<form action="{{Route('user.profile.edit.details.student')}}" method="POST">
    {{ csrf_field() }}
    <div class="flex justify-around">
                        
<input type="text" placeholder="first name" class="focus:border focus:border-solid focus:border-blue-light block mx-auto rounded w-2/5 px-4 py-4 my-8 border border-solid" name="first_name" value="{{auth()->user()->details->first_name}}">
<input type="text" placeholder="last name" class="focus:border focus:border-solid focus:border-blue-light block mx-auto rounded w-2/5 px-4 py-4 my-8 border border-solid" name="last_name" value="{{auth()->user()->details->last_name}}">
    </div>
    <select name="place_of_birth" class="focus:border appearence-none focus:border-solid focus:border-blue-light block mx-auto rounded w-4/5 px-4 py-4 my-8 border border-solid">
        <option value="">Select Your City</option>
         @foreach($cities as $city)
                 <option value="{{$city->id}}" class="block">{{$city->FullName}}</option>
         @endforeach
 </select>
<input type="date" class="focus:border appearence-none focus:border-solid focus:border-blue-light block mx-auto rounded w-4/5 px-4 py-4 my-8 border border-solid" name="date_of_birth" value="{{auth()->user()->details->date_of_birth}}">
<input type="text" class="focus:border appearence-none focus:border-solid focus:border-blue-light block mx-auto rounded w-4/5 px-4 py-4 my-8 border border-solid" placeholder="Phone Number"  name="phone" value="{{auth()->user()->details->PhoneNumber}}">
<select class="focus:border appearence-none focus:border-solid focus:border-blue-light block mx-auto rounded w-4/5 px-4 py-4 my-8 border border-solid" name="year">
<option value="">Select Your Study</option>
        @foreach($specialities as $speciality)
                <optgroup label="{{$speciality->FullName}}"></option>
                    @foreach($speciality->years as $year)

                <option value="{{$year->id}}">{{$year->FullName}} ({{$speciality->abbreviation}})</option>

                    @endforeach
                
        @endforeach
</select>
<input type="submit" value="Edit" class=" cursor-pointer inline-block px-4 py-2 mb-4 bg-blue shadow rounded text-white">


</form>

@endsection