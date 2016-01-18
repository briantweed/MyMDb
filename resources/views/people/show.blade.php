<?php

   $label_class  = "col-xs-12 col-sm-4 col-md-4 col-lg-3";
   $input_class  = "col-xs-12 col-sm-8 col-md-8 col-lg-9";
   $role_film    = "col-xs-12 col-sm-6 col-md-6 col-lg-6";
   $role_char    = "col-xs-12 col-sm-4 col-md-4 col-lg-4";
   $role_date    = "col-xs-12 col-sm-2 col-md-2 col-lg-2";

?>

@extends('app')

{{-- Page Title --}}
@section('title')
   {{$person->forename}} {{$person->surname}}
@stop

{{-- Subnav --}}
@section('subnav-left')
   @include('segments.links.add_person')
   @include('segments.links.edit_person')
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
      <div class="{{env('LEFT_COLUMN')}}">

         {{-- cover image --}}
         <div class="row">
            <div class="col-xs-12">
               @if($person->cover_count == 1)
                  <img class="img-responsive img-rounded" src="http://placehold.it/300x450/cccccc/ffffff?text={{$person->image}}"  />
               @else
                  <img class="img-responsive img-rounded" src="{{asset($person->image)}}" />
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
      <div class="{{env('RIGHT_COLUMN')}}">
         {{-- person title --}}
         <div class="row">
            <div class="col-xs-12"><h1>{{$person->forename}} {{$person->surname}}<br/></h1></div>
         </div>

         {{-- birthday --}}
         <div class="row">
            <div class="{{$label_class}}"><b>Born</b></div>
            <div class="{{$input_class}}">{{$person->birthday}}</div>
         </div>

         @if($person->deceased)
            {{-- deceased --}}
            <div class="row">
               <div class="{{$label_class}}"><b>Died</b></div>
               <div class="{{$input_class}}">{{$person->deceased}}</div>
            </div>
         @endif

         {{-- age --}}
         <div class="row">
            <div class="{{$label_class}}"><b>Age</b></div>
            <div class="{{$input_class}}">{{$person->age}}</div>
         </div>

         {{-- description --}}
         <div class="row">
            <div class="col-xs-12"><p>{!! $person->bio !!}</p></div>
         </div>

         {{-- padding --}}
         @include('segments.layout.padding')

         {{-- acting roles --}}
         @if(count($person->roles)!==0)
            <div class="row">
               <div class="col-xs-12"><h4>Roles</h4></div>
            </div>

            @foreach($person->roles as $role)
               <div class="row">
                  <div class="{{$role_film}}"><a href="{{ action('MovieController@show', $role->movie_id) }}"><b>{{$role->name}}</b></a><br/></div>
                  <div class="{{$role_char}}"><i>{{$role->pivot->character}}</i><br/></div>
                  <div class="{{$role_date}}">{{$role->released}}</div>
               </div>
            @endforeach

            {{-- padding --}}
            @include('segments.layout.padding')

         @endif

         {{-- roles --}}
         @if(count($person->directed)!==0)
            <div class="row">
               <div class="col-xs-12"><h4>Directed</h4></div>
            </div>

            @foreach($person->directed as $job)
               <div class="row">
                  <div class="{{$role_film}}"><a href="{{ action('MovieController@show', $job->movie_id) }}"><b>{{$job->name}}</b></a><br/></div>
                  <div class="{{$role_char}}"><i>{{$job->pivot->position}}</i><br/></div>
                  <div class="{{$role_date}}">{{$job->released}}</div>
               </div>
            @endforeach
            {{-- padding --}}
            @include('segments.layout.padding')
         @endif

         @if(count($person->produced)!==0)
            <div class="row">
               <div class="col-xs-12"><h4>Produced</h4></div>
            </div>

            @foreach($person->produced as $job)
               <div class="row">
                  <div class="{{$role_film}}"><a href="{{ action('MovieController@show', $job->movie_id) }}"><b>{{$job->name}}</b></a><br/></div>
                  <div class="{{$role_char}}"><i>{{$job->pivot->position}}</i><br/></div>
                  <div class="{{$role_date}}">{{$job->released}}</div>
               </div>
            @endforeach
            {{-- padding --}}
            @include('segments.layout.padding')
         @endif

         @if(count($person->scripted)!==0)
            <div class="row">
               <div class="col-xs-12"><h4>Screenplay</h4></div>
            </div>

            @foreach($person->scripted as $job)
               <div class="row">
                  <div class="{{$role_film}}"><a href="{{ action('MovieController@show', $job->movie_id) }}"><b>{{$job->name}}</b></a><br/></div>
                  <div class="{{$role_char}}"><i>{{$job->pivot->position}}</i><br/></div>
                  <div class="{{$role_date}}">{{$job->released}}</div>
               </div>
            @endforeach
            {{-- padding --}}
            @include('segments.layout.padding')
         @endif

         @if(count($person->scored)!==0)
            <div class="row">
               <div class="col-xs-12"><h4>Composer</h4></div>
            </div>

            @foreach($person->scored as $job)
               <div class="row">
                  <div class="{{$role_film}}"><a href="{{ action('MovieController@show', $job->movie_id) }}"><b>{{$job->name}}</b></a><br/></div>
                  <div class="{{$role_char}}"><i>{{$job->pivot->position}}</i><br/></div>
                  <div class="{{$role_date}}">{{$job->released}}</div>
               </div>
            @endforeach
            {{-- padding --}}
            @include('segments.layout.padding')
         @endif

      </div> {{-- end of right column --}}

   </div> {{-- end of person row --}}

@stop
