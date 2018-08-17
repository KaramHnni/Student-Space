@extends('layouts.user')

@section('page-title')

{{$student->getFullNameAttribute()}}


@endsection

@section('main-content')
{{$student->first_name}}
{{$student->last_name}}
{{$student->date_of_birth}}
{{$student->place_of_birth}}
{{$student->departement}}
{{$student->groupe}}
{{$student->year_of_study}}
{{$student->created_at}}

@endsection