<?php

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
   @include('segments.links.add_movie')
   @include('segments.links.edit_movie')
@stop



{{-- Main Body --}}
@section('content')

   {!! Html::script('js/facebook-sdk.js') !!}

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
               @if($movie->cover_count == 1)
                  <img class="img-responsive img-rounded" src="http://placehold.it/300x450/cccccc/ffffff?text={{$movie->cover}}"  />
               @else
                  <img class="img-responsive img-rounded" src="{{asset($movie->cover)}}" />
               @endif
            </div>
         </div>

         <hr/>

         <div class="side-buttons">

            <div
              class="fb-like"
              data-share="true"
              data-width="450"
              data-show-faces="true">
           </div><br/>
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
      <div class="{{env('RIGHT_COLUMN')}}">
         {{-- film title --}}
         <div class="row">
            <div class="col-xs-12"><h1>{{$movie->name}}<br/></h1></div>
         </div>

         {{-- description --}}
         <div class="row">
            <div class="col-xs-12"><p>{{$movie->bio}}</p></div>
         </div>

         {{-- star rating --}}
         <div class="row">
            <div class="{{$label_class}}"><b>Rating</b></div>
            <div class="{{$input_class}}"><span class="rating-display @if($movie->rating==10) top-rated @endif" data-toggle='tooltip' data-placement='right' title='{{$movie->rating}} / @if($movie->movie_id==176) 11 @else 10 @endif'>{!!$movie->rating_display!!}</span></div>
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
            <div class="{{$input_class}}">@if($movie->certificate){{$movie->certificate->title}}@endif</div>
         </div>

         {{-- format --}}
         <div class="row">
            <div class="{{$label_class}}"><b>Format</b></div>
            <div class="{{$input_class}}">@if($movie->format){{$movie->format->type}}@endif</div>
         </div>

         {{-- studio --}}
         <div class="row">
            <div class="{{$label_class}}"><b>Studio</b></div>
            <div class="{{$input_class}}">@if($movie->studio){{$movie->studio->name}}@endif</div>
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

         @if($movie->last_viewed !== NULL)

            <div class="row">
               <div class="{{$label_class}}">
                  <b>Last Viewed</b>
               </div>

               <div class="{{$input_class}}">
                  {{$movie->last_viewed}}
               </div>
            </div>

         @endif

         {{-- crew --}}
         @if(count($movie->crew) != 0)

            {{-- padding --}}
            @include('segments.layout.padding')

            <div class="row">
               <div class="col-xs-12"><h4>Crew</h4></div>
            </div>

            @foreach($movie->crew as $emp)
               <div class="row">
                  {{-- actor --}}
                  <div class="{{$label_class}}">
                     <a href="{{ action('PersonController@show', $emp->person_id) }}">{{$emp->forename}} {{$emp->surname}}</a>
                  </div>
                  {{-- character --}}
                  <div class="{{$input_class}}">
                     {{$emp->pivot->position}}
                  </div>
               </div>
            @endforeach

         @endif

         {{-- cast --}}
         @if(count($movie->cast) != 0)

            {{-- padding --}}
            @include('segments.layout.padding')

            <div class="row">
               <div class="col-xs-12"><h4>Cast</h4></div>
            </div>
            @foreach( $movie->cast as $actor )
               <div class="row">
                  {{-- actor --}}
                  <div class="{{$label_class}}">
                     <a href="{{ action('PersonController@show', $actor->person_id) }}">{{$actor->forename}} {{$actor->surname}}</a>
                  </div>
                  {{-- character --}}
                  <div class="{{$input_class}}">
                     <em>{{$actor->pivot->character}}</em>
                  </div>
               </div>
            @endforeach

         @endif

         {{-- padding --}}
         @include('segments.layout.padding')

      </div> {{-- end of right column --}}

   </div> {{-- end of movie row --}}

@stop

@section('extensions')
   {!! Html::script('js/show_movie.js') !!}
@stop
