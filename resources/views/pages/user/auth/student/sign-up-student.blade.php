@extends('layouts.user')

@section('page-title')

Complete Sign Up

@endsection
@section('main-content')
<form action="{{route('site.sign-up.student.info')}}" method="POST">
        {{ csrf_field() }}
<input type="text" placeholder="first name" class="block border border-solid" name="first_name">
<input type="text" placeholder="last name" class="block border-border-solid" name="last_name">
<select name="place_of_birth">
        @foreach($cities as $city)
<option value="{{$city->id}}" class="block">{{$city->getFullNameAttribute()}}</option>
@endforeach
</select>
<input type="date" class="block" name="date_of_birth">
<input type="text" class="block" placeholder="Phone Number" class="block" name="phone">
<select class="block" name="departement">
@foreach($departements as $departement)
        <option value="{{$departement->id}}">{{$departement->getFullNameAttribute()}}</option>
@endforeach
        </select>

<select class="block" name="year_of_study">
@foreach($years as $year)
<option value="{{$year->id}}">{{$year->getFullNameAttribute()}}</option>
@endforeach
</select> <input type="submit" value="Sign Up" class="inline-block ">


    </form>


@endsection