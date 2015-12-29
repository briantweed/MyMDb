<?php

   $left_column  = "col-xs-12 col-sm-4 col-md-4 col-lg-3";
   $right_column = "col-xs-12 col-sm-8 col-md-8 col-lg-offset-1 col-lg-8";
   $label_class  = "col-xs-12 col-sm-4 col-md-4 col-lg-3";
   $input_class  = "col-xs-12 col-sm-8 col-md-8 col-lg-9";
   $role_film    = "col-xs-12 col-sm-4 col-md-4 col-lg-4";
   $role_char    = "col-xs-12 col-sm-4 col-md-4 col-lg-4";
   $role_date    = "col-xs-12 col-sm-4 col-md-4 col-lg-4";

?>

@extends('app')

{{-- Page Title --}}
@section('title')
   {{$person->person_forename}} {{$person->person_surname}}
@stop

{{-- Subnav --}}
@section('subnav-left')
   @include('segments.links.back')
   @include('segments.links.add_person')
   @include('segments.links.edit_person')
@stop

@section('subnav-right')

@stop


{{-- Main Body --}}
@section('content')

   @if (session('status'))
       <div class="alert alert-success">
           {{ session('status') }}
       </div>
   @endif

   <div class="row movie">

      {{-- left column --}}
      <div class="{{$left_column}}">

         {{-- cover image --}}
         <div class="row">
            <div class="col-xs-12">
               @if($person->img_count == 1)
                  <img class="img-responsive img-rounded" src="http://placehold.it/300x450/cccccc/ffffff?text={{$person->img}}" />
               @else
                  <img class="img-responsive img-rounded" src="{{asset('images/people/')}}/{{$person->img}}" />
               @endif
            </div>
         </div>

         <hr/>

         <div class="side-buttons">
            {{-- back button --}}
            @include('segments.buttons.home')

            {{-- edit button --}}
            {{-- @include('segments.buttons.edit') --}}

            {{-- padding --}}
            @include('segments.layout.padding')

         </div>

      </div> {{-- end of left column --}}

      {{-- right column --}}
      <div class="{{$right_column}}">

         {{-- person title --}}
         <div class="row">
            <div class="col-xs-12"><h1>{{$person->person_forename}} {{$person->person_surname}}<br/></h1></div>
         </div>

         {{-- birthday --}}
         <div class="row">
            <div class="{{$label_class}}"><b>Born</b></div>
            <div class="{{$input_class}}">{{$person->birthday}}</div>
         </div>

         {{-- age --}}
         <div class="row">
            <div class="{{$label_class}}"><b>Age</b></div>
            <div class="{{$input_class}}">{{$person->age}}</div>
         </div>

         {{-- description --}}
         <div class="row">
            <div class="col-xs-12"><p>{{$person->person_bio}}</p></div>
         </div>

         {{-- padding --}}
         @include('segments.layout.padding')

         {{-- acting roles --}}
         @if(count($roles)!==0)
            <div class="row">
               <div class="col-xs-12"><h3>Roles</h3></div>
            </div>

            @foreach($roles as $role)
               <div class="row">
                  <div class="{{$role_film}}"><a href="{{ action('MovieController@show', $role->movie_id) }}"><b>{{$role->movie_name}}</b></a><br/></div>
                  <div class="{{$role_char}}"><i>{{$role->character_name}}</i><br/></div>
                  <div class="{{$role_date}}">{{$role->released}}</div>
               </div>
            @endforeach

            {{-- padding --}}
            @include('segments.layout.padding')

         @endif

      </div> {{-- end of right column --}}

   </div> {{-- end of person row --}}

@stop
