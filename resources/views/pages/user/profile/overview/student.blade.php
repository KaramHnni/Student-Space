@extends('layouts.user')

@section('page-title')

{{auth()->user()->details->fullName}}


@endsection

@section('main-content')
<a href="{{Route('user.profile.edit.details')}}">Edit Profile</a><br/>
{{auth()->user()->details->first_name}}<br/>
{{auth()->user()->details->last_name}}<br/>
{{auth()->user()->details->date_of_birth}}<br/>
{{auth()->user()->details->place_of_birth}}<br/>
{{auth()->user()->details->phone}}<br/>
{{auth()->user()->details->departement}}<br/>
{{auth()->user()->details->year_of_study}}<br/>
{{auth()->user()->details->group}}<br/>

@endsection