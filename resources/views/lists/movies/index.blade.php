@extends('app')


{{-- ---Page Title--- --}}
@section('title')
   All Movies
@stop


{{-- ---Page Heading--- --}}
@section('heading')
   <h1>Movies</h1>
@stop


{{-- ---Page Content--- --}}
@section('content')

   <div class="row">
      <div class="col-xs-12">
         <ul class="xs-block-grid-3 sm-block-grid-6 md-block-grid-8 lg-block-grid-10">
            @foreach($movies as $movie)
               <li class="movie">
                  <a href="{{ action('MovieController@show', $movie->movie_id) }}">
                     <img class="img-responsive img-rounded" src="{{asset('images/covers/')}}/{{$movie->cover}}" />
                     <span>{{$movie->name}} ({{date( 'Y', strtotime($movie->release_date))}})</span>
                  </a>
               </li>
            @endforeach
         </ul>
      </div>
   </div>

@stop
