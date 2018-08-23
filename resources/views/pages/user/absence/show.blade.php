@extends('layouts.user')
@section('page-title')

Absences
@endsection
@section('main-content')
<p>You Have {{$absences->count()}} absences</p>
@foreach($absences as $absence)
<p>
{{$absence->module->getFullNameAttribute()}}
{{$absence->seance->name}}
{{$absence->getStatus()}}
@if($absence->status == 0)
<a href="#">Justify</a>
@endif

</p>
@endforeach

@endsection