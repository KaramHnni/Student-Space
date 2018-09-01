@extends('layouts.user')

@section('page-title')
Edit Profile 
@endsection

@section('main-content')
<div class="lg:w-2/3 mx-auto mt-16 bg-blue-lightest pb-4 shadow text-center rounded ">
    <h1 class="py-4 bg-white font-semibold text-xl">Edit Your Profile </h1>
<form action="{{Route('user.profile.edit.details.teacher')}}" method="POST">
    {{ csrf_field() }}
    <div class="flex justify-around">
                        
<input type="text" placeholder="first name" class="focus:border focus:border-solid focus:border-blue-light block mx-auto rounded w-2/5 px-4 py-4 my-8 border border-solid" name="first_name" value="{{auth()->user()->details->first_name}}">
<input type="text" placeholder="last name" class="focus:border focus:border-solid focus:border-blue-light block mx-auto rounded w-2/5 px-4 py-4 my-8 border border-solid" name="last_name" value="{{auth()->user()->details->last_name}}">
    </div>
<select name="place_of_birth" class="focus:border appearence-none focus:border-solid focus:border-blue-light block mx-auto rounded w-4/5 px-4 py-4 my-8 border border-solid">

    @foreach($cities as $city)
<option value="{{$city->id}}" class="block">{{$city->getFullNameAttribute()}}</option>
@endforeach
</select>
<input type="date" class="focus:border appearence-none focus:border-solid focus:border-blue-light block mx-auto rounded w-4/5 px-4 py-4 my-8 border border-solid" name="date_of_birth" value="{{auth()->user()->details->date_of_birth}}">
<select name="grade" class="focus:border appearence-none focus:border-solid focus:border-blue-light block mx-auto rounded w-4/5 px-4 py-4 my-8 border border-solid">
    <option value="MCA">Maitre de Conference</option>
    <option value="MA">Maitre Assistant </option>
    <option value="DR">Docteur </option>
    <option value="PR">Professeur</option>


</select>
<input type="text" class="focus:border appearence-none focus:border-solid focus:border-blue-light block mx-auto rounded w-4/5 px-4 py-4 my-8 border border-solid" placeholder="Phone Number"  name="phone" value="{{auth()->user()->details->phone}}">
<select class="focus:border appearence-none focus:border-solid focus:border-blue-light block mx-auto rounded w-4/5 px-4 py-4 my-8 border border-solid" name="speciality">
    <option value="">Select Your Specialty</option>
    @foreach($departements as $departement)
            <optgroup label="{{$departement->getFullNameAttribute()}}"></option>
                @foreach($departement->specialities as $speciality)

                    <option value="{{$speciality->abbreviation}}">{{$speciality->name}}</option>

                @endforeach
            
    @endforeach
</select>


<input type="submit" value="Edit" class=" cursor-pointer inline-block px-4 py-2 mb-4 bg-blue shadow rounded text-white">


</form>

@endsection