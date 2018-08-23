@extends('layouts.user')
@section('page-title')

Absences
@endsection
@section('main-content')
<p>You Have {{$absences->count()}} absences</p>
@foreach($absences as $absence)

{{$absence->module->name}}

@endforeach

@endsection