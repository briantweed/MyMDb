<?php

   $label_class  = "col-xs-12 col-sm-6 col-md-4 col-lg-3";
   $input_class  = "col-xs-12 col-sm-6 col-md-8 col-lg-9"

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

{{-- Main Body --}}
@section('content')

   @if (session('status'))
       <div class="alert alert-success">
           {{ session('status') }}
       </div>
   @endif

   <div class="row movie">

      {{-- left column --}}
      <div class="col-xs-12 hidden-sm col-sm-4 col-md-3 col-lg-3">

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

            @include('segments.buttons.home')

            @include('segments.buttons.edit')

            @include('segments.buttons.view')

            @if($movie->imdb_id)
               <div class="row">
                  <div class="col-xs-12">
                     <a href="http://www.imdb.com/title/{{$movie->imdb_id}}" target="_blank" class="btn btn-warning btn-lg btn-block" href="javascript:void(0);"><i class="ft icon-imdb"></i> IMDb Page</a>
                  </div>
               </div>
            @endif

            @include('segments.layout.padding')

         </div>

      </div> {{-- end of left column --}}

      {{-- right column --}}
      <div class="col-xs-12 col-sm-12 col-md-9 col-lg-offset-1 col-lg-8">

         <h1>{{$movie->name}}<br/></h1>

         <div class="row">
            <div class="col-sm-4 visible-sm-block" style="padding-top:10px">
               @if($movie->cover_count == 1)
                  <img class="img-responsive img-rounded" src="http://placehold.it/300x450/cccccc/ffffff?text={{$movie->cover}}"  />
               @else
                  <img class="img-responsive img-rounded" src="{{asset($movie->cover)}}" />
               @endif
               <ul class="sm-block-grid-4">
                  <li style="padding:0.2em"><a style="padding:6px 0" class="btn btn-primary btn-block" href="{{ action('WelcomeController@index') }}"><i class="ft icon-home"></i></a></li>
                  @if($user!=false && $user->level==1)
                     <li style="padding:0.2em"><a style="padding:6px 0" class="btn btn-info btn-block" href="{{ action('MovieController@edit',[$movie->movie_id]) }}"><i class="ft icon-edit"></i></a></li>
                     <li style="padding:0.2em"><a style="padding:6px 0" onclick="showModal('viewing')" class="btn btn-info btn-block" href="javascript:void(0);"><i class="ft icon-view"></i></a></li>
                  @endif
                  <li style="padding:0.2em"><a style="padding:6px 0" href="http://www.imdb.com/title/{{$movie->imdb_id}}" target="_blank" class="btn btn-warning  btn-block" href="javascript:void(0);"><i class="ft icon-imdb"></i></a></li>
               </ul>
            </div>
            <div class="col-xs-12 col-sm-8 col-md-12">
               <p>{{$movie->bio}}</p>
            </div>
         </div>

         <div class="row visible-sm-inline">
            <h4>Details</h4>
         </div>

         <div class="row">
            <div class="{{$label_class}}"><b>Rating</b></div>
            <div class="{{$input_class}}">
               <span class="rating-display @if($movie->rating==10) top-rated @endif"
                  data-toggle='tooltip' data-placement='right' title='{{$movie->rating}} /
                  @if($movie->movie_id==176) 11 @else 10 @endif'>{!!$movie->rating_display!!}
               </span>
            </div>
         </div>

         <div class="row">
            <div class="{{$label_class}}"><b>Released</b></div>
            <div class="{{$input_class}}">{{$movie->released}}</div>
         </div>

         <div class="row">
            <div class="{{$label_class}}"><b>Running Time</b></div>
            <div class="{{$input_class}}">{{$movie->running_time}} mins</div>
         </div>

         <div class="row">
            <div class="{{$label_class}}"><b>Certificate</b></div>
            <div class="{{$input_class}}">@if($movie->certificate){{$movie->certificate->title}}@endif</div>
         </div>

         <div class="row">
            <div class="{{$label_class}}"><b>Format</b></div>
            <div class="{{$input_class}}">@if($movie->format){{$movie->format->type}}@endif</div>
         </div>

         <div class="row">
            <div class="{{$label_class}}"><b>Studio</b></div>
            <div class="{{$input_class}}">@if($movie->studio){{$movie->studio->name}}@endif</div>
         </div>

         @if(count($movie->genres) != 0)
            <div class="row">
               <div class="{{$label_class}}">
                  <b>Genres</b>
               </div>
               <div class="{{$input_class}}">
                  @foreach( $movie->genres as $genre )
                     {{$genre->type}};
                  @endforeach
               </div>
            </div>
         @endif

         @if(count($movie->tags) != 0)
            <div class="row">
               <div class="{{$label_class}}">
                  <b>Tags</b>
               </div>
               <div class="{{$input_class}}">
                  @foreach($movie->tags as $tag)
                     {{$tag->word}};
                  @endforeach
               </div>
            </div>
         @endif

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

         @if(count($movie->crew) != 0)

            @include('segments.layout.padding')

            <div class="row">
               <div class="col-xs-12"><h4>Crew</h4></div>
            </div>

            @foreach($movie->crew as $emp)
               <div class="row">
                  <div class="{{$label_class}}">
                     <a href="{{ action('PersonController@show', $emp->person_id) }}">{{$emp->forename}} {{$emp->surname}}</a>
                  </div>
                  <div class="{{$input_class}}">
                     {{$emp->pivot->position}}
                  </div>
               </div>
            @endforeach

         @endif

         @if(count($movie->cast) != 0)

            @include('segments.layout.padding')

            <div class="row">
               <div class="col-xs-12"><h4>Cast</h4></div>
            </div>

            @foreach( $movie->cast as $actor )
               <div class="row">
                  <div class="{{$label_class}}">
                     <a href="{{ action('PersonController@show', $actor->person_id) }}">{{$actor->forename}} {{$actor->surname}}</a>
                  </div>
                  <div class="{{$input_class}}">
                     <em>{{$actor->pivot->character}}</em>
                  </div>
               </div>
            @endforeach

         @endif

         @include('segments.layout.padding')

      </div> {{-- end of right column --}}

   </div> {{-- end of movie row --}}

@stop

@section('extensions')
   {!! Html::script('js/show_movie.js') !!}
@stop
