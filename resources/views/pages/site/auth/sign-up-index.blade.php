@extends('layouts.site')

@section('page-title')
Sign Up
@endsection

@section('main-content')
<div class="w-3/5 mx-auto  my-16 text-center px-4 bg-white shadow rounded py-4">

<div>
<a href="{{route('site.sign-up.student')}}" class="rounded px-8  my-16  text-center py-4 bg-blue-light text-white font-bold inline-block">Sign Up As Student</a>
</div>
<div>
    <a href="{{route('site.sign-up.teacher')}}" class="rounded px-8  my-16  text-center py-4 bg-blue-light text-white font-bold inline-block">Sign Up As Teacher</a>
</div>
</div>
@endsection
