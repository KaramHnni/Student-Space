@extends('layouts.user')
@section('page-title')

Absences
@endsection
@section('main-content')
@if( $absences->where('status','0')->count() > 0)
@component('components.alert',['type'=>'danger'])
@slot('content')
You have {{$absences->where('status','0')->count()}} Unjustified Absence

@endslot
@endcomponent
@endif
<table class="table-fixed border-collapse w-3/5 mx-auto mt-16 border border-solid border-grey-light bg-white">
    <tr class="bg-grey-lightest">
   
    <th>Date</th>
    <th>Module</th>
    <th>Seance</th>
    <th>Status</th>
    <th>Justify</th>
    </tr>

@foreach($absences as $absence)
<tr>
<td>{{$absence->Date}}</td>
<td>{{$absence->module->name}}</td>
<td>{{$absence->seance->name}}</td>
<td>{{$absence->getStatus()}}</td>
<td>
    @if($absence->status == 0)
<a href="absence/{{$absence->id}}/justify" class=" inline-block px-4 py-2  bg-blue shadow rounded text-white">Justify</a>
    @elseif($absence->status == 2)
    <p class=" inline-block px-2 py-2  bg-green-dark  rounded text-white">waiting ..</p>
    @else
        <p class=" inline-block px-2 py-2  bg-grey  rounded text-white">Justified</p>
    @endif
    
</td>
</tr>

@endforeach
</table>
@endsection