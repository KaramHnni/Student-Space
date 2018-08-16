@extends('layouts.site')
@section('page-title')
    Dashboard
@endsection
@section('main-content')

Welcome Home {{auth()->user()->name}}

@endsection