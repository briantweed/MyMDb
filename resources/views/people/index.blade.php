@extends('app')


{{-- Page Title --}}
@section('title')
   All People
@stop


{{-- Subnav --}}
@section('subnav-left')
   @include('segments.links.back')
   @include('segments.links.add_person')
@stop

@section('subnav-right')

@stop


{{-- Main Body --}}
@section('content')

   <div class="row">
      <div class="col-xs-12">
         <ul class="xs-block-grid-1">
            @foreach($people as $person)
               <li>
                  <a href="{{ action('PersonController@show', $person->person_id) }}">{{$person->person_forename}} {{$person->person_surname}}</a>
               </li>
            @endforeach
         </ul>
      </div>
   </div>

@stop
