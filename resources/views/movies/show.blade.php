<?php

   $left_column  = "col-xs-12 col-sm-4 col-md-4 col-lg-3";
   $right_column = "col-xs-12 col-sm-8 col-md-8 col-lg-offset-1 col-lg-8";
   $label_class  = "col-xs-12 col-sm-4 col-md-4 col-lg-3";
   $input_class  = "col-xs-12 col-sm-8 col-md-8 col-lg-9"

?>

@extends('app')

{{-- Page Title --}}
@section('title')
   {{$movie->name}}
@stop

{{-- Subnav --}}
@section('subnav-left')
   @include('segments.links.back')
   @include('segments.links.add_movie')
   @include('segments.links.edit_movie')
@stop

@section('subnav-right')
   @include('segments.layout.search_movies')
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
               @if($movie->cover_count == 1)
                  <img class="img-responsive img-rounded" src="http://placehold.it/300x450/cccccc/ffffff?text={{$movie->cover}}"  />
               @else
                  <img class="img-responsive img-rounded" src="{{asset($movie->cover)}}" />
               @endif
            </div>
         </div>

         <hr/>

         <div class="side-buttons">
            {{-- back button --}}
            @include('segments.buttons.home')

            {{-- edit button --}}
            @include('segments.buttons.edit')

            {{-- view button --}}
            @include('segments.buttons.view')

            {{-- padding --}}
            @include('segments.layout.padding')

         </div>

      </div> {{-- end of left column --}}

      {{-- right column --}}
      <div class="{{$right_column}}">

         {{-- film title --}}
         <div class="row">
            <div class="col-xs-12"><h1>{{$movie->name}}<br/></h1></div>
         </div>

         {{-- description --}}
         <div class="row">
            <div class="col-xs-12"><p>{{$movie->description}}</p></div>
         </div>

         {{-- star rating --}}
         <div class="row">
            <div class="{{$label_class}}"><b>Rating</b></div>
            <div class="{{$input_class}}"><span class="rating-display @if($movie->rating==10) top-rated @endif" data-toggle='tooltip' data-placement='right' title='{{$movie->rating}} / 10'>{!!$movie->rating_display!!}</span></div>
         </div>

         {{-- released --}}
         <div class="row">
            <div class="{{$label_class}}"><b>Released</b></div>
            <div class="{{$input_class}}">{{$movie->released}}</div>
         </div>

         {{-- running time --}}
         <div class="row">
            <div class="{{$label_class}}"><b>Running Time</b></div>
            <div class="{{$input_class}}">{{$movie->running_time}} mins</div>
         </div>

         {{-- certifiate --}}
         <div class="row">
            <div class="{{$label_class}}"><b>Certificate</b></div>
            <div class="{{$input_class}}">{{$movie->certificate}}</div>
         </div>

         {{-- format --}}
         <div class="row">
            <div class="{{$label_class}}"><b>Format</b></div>
            <div class="{{$input_class}}">{{$movie->format}}</div>
         </div>

         {{-- studio --}}
         <div class="row">
            <div class="{{$label_class}}"><b>Studio</b></div>
            <div class="{{$input_class}}">{{$movie->studio}}</div>
         </div>

         {{-- genres --}}
         @if(count($movie->genres) != 0)

            <div class="row">
               <div class="{{$label_class}}">
                  <b>Genres</b>
               </div>
               {{-- genre list --}}
               <div class="{{$input_class}}">
                  @foreach( $movie->genres as $genre )
                     {{$genre->type}};
                  @endforeach
               </div>
            </div>

         @endif

         {{-- tags --}}
         @if(count($movie->tags) != 0)

            <div class="row">
               <div class="{{$label_class}}">
                  <b>Tags</b>
               </div>
               {{-- tag list --}}
               <div class="{{$input_class}}">
                  @foreach($movie->tags as $tag)
                     {{$tag->word}};
                  @endforeach
               </div>
            </div>

         @endif

         {{-- last watched --}}
         @if($movie->viewed !== NULL)

            <div class="row">
               <div class="{{$label_class}}">
                  <b>Last Viewed</b>
               </div>

               <div class="{{$input_class}}">
                  {{$movie->viewed}};
               </div>
            </div>

         @endif

         {{-- crew --}}
         @if(count($movie->crew) != 0)

            {{-- padding --}}
            @include('segments.layout.padding')

            <div class="row">
               <div class="col-xs-12"><h3>Crew</h3></div>
            </div>

            @foreach($movie->crew as $emp)
               <div class="row">
                  {{-- actor --}}
                  <div class="{{$label_class}}">
                     <a href="{{ action('PersonController@show', $emp->person_id) }}">{{$emp->forename}} {{$emp->surname}}</a>
                  </div>
                  {{-- character --}}
                  <div class="{{$input_class}}">
                     {{$emp->position}}
                  </div>
               </div>
            @endforeach

         @endif

         {{-- cast --}}
         @if(count($movie->cast) != 0)

            {{-- padding --}}
            @include('segments.layout.padding')

            <div class="row">
               <div class="col-xs-12"><h3>Cast</h3></div>
            </div>

            @foreach( $movie->cast as $actor )
               <div class="row">
                  {{-- actor --}}
                  <div class="{{$label_class}}">
                     <a href="{{ action('PersonController@show', $actor->person_id) }}">{{$actor->forename}} {{$actor->surname}}</a>
                  </div>
                  {{-- character --}}
                  <div class="{{$input_class}}">
                     <em>{{$actor->character_name}}</em>
                  </div>
               </div>
            @endforeach

         @endif

         {{-- padding --}}
         @include('segments.layout.padding')

      </div> {{-- end of right column --}}

   </div> {{-- end of movie row --}}

@stop
