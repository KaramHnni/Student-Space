@extends('layouts.site')

@section('page-title')
Sign Up
@endsection

@section('main-content')

<a href="{{route('site.sign-up.student')}}" class="block">Sign Up As Student</a>
<a href="{{route('site.sign-up.teacher')}}">Sign Up As Teacher</a>

@endsection
