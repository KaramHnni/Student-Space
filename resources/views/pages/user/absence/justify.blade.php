@extends('layouts.user')
@section('page-title')
page-title
@endsection

@section('main-content')

<div class=" w-4/5 mx-auto bg-white shadow rounded mt-16 py-8 lg:flex lg:justify-around lg:items-center px-4  ">

    <div>
            <table class="table-fixed border-collapse  mx-auto mt-16 border border-solid border-grey-light bg-white">
                <tr>
                    <th colspan="2" >Absence</th>
                </tr>
                <tr >
                <th class=" pr-4 border-r border-solid border-grey-light">Module</th>
                <td class="pr-4">{{$absence->module->name}}</td>
                <tr>
                <tr>
                <th class="pr-4 border-r border-solid border-grey-light">Seance</th>
                <td class="pr-4">{{$absence->seance->name}}</td>
                <tr>
                <tr>
                <th class="pr-4 border-r border-solid border-grey-light">Date</th>
                <td class="pr-4">{{$absence->Date}}</td>
                <tr>
            </table>
    </div>
    
<form method="POST" action="{{Route('user.absence.justified')}}">
    @csrf
            <div class="mb-8 mt-4">
                <label class="font-bold" for="Subject">Subject</label>
                <input  id="Subject" name="subject" type="text" class="focus:border ml-4 focus:border-solid focus:border-blue-light inline-block rounded  px-4 py-2 border border-solid">
            </div>
            <div class="mb-8">
                <label class="font-bold " for="justification">Justification</label>
            <textarea  id="justification" name="body" class=" mt-4 focus:border px-2 py-2 lg:ml-4 focus:border-solid focus:border-blue-light w-full h-64 rounded   border border-solid "placeholder="write your justification here ..."></textarea>
            </div>
            <div class="mb-8">
                    <label class="font-bold " for="upload">Justification File</label>
                
            </div>
        <input type="hidden" name="absence_id" value="{{$absence->id}}">
            <div class="text-center">
            <input type="submit" value="submit" class=" inline-block px-4 py-2  bg-blue shadow rounded text-white">
            </div>
        </form>
     



</div>


@endsection