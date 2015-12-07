@extends('app')


{{-- Page Title --}}
@section('title')
 All Movies
@stop


@section('heading')
   Movies
@stop


{{-- Page Content --}}
@section('content')

   @foreach( $movies as $movie )
      <div class="row align-center">
         <div class="movie columns small-11 medium-11 large-12">
            <a href="{{ action('MovieController@show', $movie->movie_id) }}">
               <i class="ft icon-movie"></i> {{ $movie->name }} ({{ date( 'Y', strtotime( $movie->release_date ) ) }})
            </a>
         </div>
      </div>
   @endforeach

@stop
