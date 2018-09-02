@extends('layouts.user')
@section('page-title')
    Dashboard
@endsection
@section('main-content')

Welcome Home {{auth()->user()->Details->FullName}}

<p>The modules you are responsible of are for the First Year are  : </p>

@foreach(auth()->user()->details->seances as $seance)

@if($seance->module->year->name == 'First')
<p>{{$seance->name}} {{$seance->module->name}}</p>
@endif
@if($seance->module->year->name == 'Second')
<p>{{$seance->name}} {{$seance->module->name}}</p>
@endif




@endforeach

the list of students you are responsible of are : 




@endsection