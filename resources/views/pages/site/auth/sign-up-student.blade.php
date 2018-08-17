@extends('layouts.site')

@section('page-title')
Sign Up
@endsection

@section('main-content')

<form class="ml-4" method="POST" action="{{Route('site.sign-up.student')}}" >
        @csrf
        <input class="block mb-4 border border-solid" type="text" name="name" placeholder="name">      
<input class=" block border mb-4 border-solid" type="email" name="email" placeholder="email">
<input type="password" class="mb-4 block border border-solid" name="password" placeholder="password">
<input type="submit">
</form>

@endsection
