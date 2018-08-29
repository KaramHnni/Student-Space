@extends('layouts.site')

@section('page-title')
Sign Up
@endsection

@section('main-content')
<div class="lg:w-2/3 mx-auto my-16 bg-blue-lightest pb-4 shadow text-center rounded ">

        <h1 class="py-4 bg-white font-semibold text-xl">Sign Up </h1>

        <form  method="POST" action="{{Route('site.sign-up.student')}}" >
                @csrf
                <input class="focus:border focus:border-solid focus:border-blue-light block mx-auto rounded w-4/5 px-4 py-4 my-8 border border-solid" type="text" name="name" placeholder="name">      
                <input class=" focus:border focus:border-solid focus:border-blue-light block mx-auto rounded w-4/5 px-4 py-4 my-8 border border-solid" type="email" name="email" placeholder="email">
                <input type="password" class="focus:border focus:border-solid focus:border-blue-light block mx-auto rounded w-4/5 px-4 py-4 my-8 border border-solid" name="password" placeholder="password">
                <input type="submit" value="Sign Up" class=" cursor-pointer inline-block px-4 py-2 mb-4 bg-blue shadow rounded text-white">
        </form>
</div>

@endsection
