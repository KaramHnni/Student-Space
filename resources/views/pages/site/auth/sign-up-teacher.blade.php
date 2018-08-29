@extends('layouts.site')

@section('page-title')
Sign Up
@endsection

@section('main-content')
<div class="lg:w-2/3 mx-auto my-16 bg-blue-lightest pb-4 shadow text-center rounded ">
        <h1 class="py-4 bg-white font-semibold text-xl">Sign Up</h1>

        <form  method="POST" action="{{Route('site.sign-up.teacher')}}" >
                @csrf
                <input class="block mb-4 border border-solid" type="text" name="name" placeholder="name">      
                <input class=" block border mb-4 border-solid" type="email" name="email" placeholder="email">
                <input type="password" class="mb-4 block border border-solid" name="password" placeholder="password">
                <input type="submit">
        </form>

@endsection
