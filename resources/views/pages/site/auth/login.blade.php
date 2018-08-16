@extends('layouts.site')

@section('page-title')
Sign In
@endsection

@section('main-content')

<form class="ml-4" method="POST" action="{{Route('site.sign-in')}}" >
        @csrf
<input class=" block mb-4 border border-solid" type="email" name="email" placeholder="email">
<input type=" password" class=" block mb-4 border border-solid" name="password" placeholder="password">
<input type="submit">
</form>

@endsection
