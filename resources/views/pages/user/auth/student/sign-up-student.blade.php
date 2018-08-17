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

<option name="algeria" class="block" value="Algeria">Algeria</option>
</select>
<input type="date" class="block" name="date_of_birth">
<input type="text" class="block" placeholder="Phone Number" class="block" name="phone">
<select class="block" name="departement">

        <option value="Electronic">Electronics</option>
        </select>
<select class="block" name="year_of_study">
<option value="first">1</option>
</select>
<select class="block" name="groupe">

        <option value="2">2</option>
        </select>

        <input type="submit" class="block">


    </form>


@endsection