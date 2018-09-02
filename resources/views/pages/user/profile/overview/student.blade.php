@extends('layouts.user')

@section('page-title')

{{auth()->user()->details->fullName}}


@endsection

@section('main-content')

<div class="lg:w-2/3 mx-auto my-16 bg-white shadow  rounded ">
<div class="flex justify-between items-center mb-8">
<div class="w-1/5 h-32 border border-solid"><img src="{{asset('/assets/images/39858858-medical-wallpapers.jpg')}}"></div>
    <h1 class="">{{auth()->user()->details->fullName}}</h1>
    <a href="{{Route('user.profile.edit.details')}}" class="cursor-pointer inline-block px-4 py-2 mb-4 bg-blue shadow rounded text-white">Edit Profile</a><br/>
</div>

<div class="px-8 flex items-center py-4 border-b-2 border-solid border-grey-lighter">
    <h3>First Name</h3>
    <p class="flex-grow text-center">{{auth()->user()->details->first_name}}</p>
</div>
<div class="px-8 flex items-center py-4 border-b-2 border-solid border-grey-lighter">
    <h3>Last Name</h3>
    <p class="flex-grow text-center">{{auth()->user()->details->last_name}}</p>
</div>
<div class="px-8 flex items-center py-4 border-b-2 border-solid border-grey-lighter">
    <h3>Date Of Birth</h3>
    <p class="flex-grow text-center">{{auth()->user()->details->date_of_birth}}</p>
</div>
<div class="px-8 flex items-center py-4 border-b-2 border-solid border-grey-lighter">
    <h3>Place Of Birth</h3>
    <p class="flex-grow text-center">{{auth()->user()->details->city->CityCode}} {{auth()->user()->details->city->name}} </p>
</div>
<div class="px-8 flex items-center py-4 border-b-2 border-solid border-grey-lighter">
    <h3>Phone Number</h3>
    <p class="flex-grow text-center">{{auth()->user()->details->PhoneNumber}}</p>
</div>
<div class="px-8 flex items-center py-4 border-b-2 border-solid border-grey-lighter">
    <h3>Departement</h3>
    <p class="flex-grow text-center">{{auth()->user()->details->year->speciality->departement->name }}</p>
</div>
<div class="px-8 flex items-center py-4 border-b-2 border-solid border-grey-lighter">
    <h3>Speciality</h3>
    <p class="flex-grow text-center">{{auth()->user()->details->year->speciality->name}}</p>
</div>
<div class="px-8 flex items-center py-4 border-b-2 border-solid border-grey-lighter">
    <h3>Year Of Study</h3>
    <p class="flex-grow text-center">{{auth()->user()->details->year->FullName}}</p>
</div>
   




@endsection