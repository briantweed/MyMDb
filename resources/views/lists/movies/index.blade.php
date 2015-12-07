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

   <div class="row">
      @foreach( $movies as $movie )
         <div class="movie columns small-6 medium-3 large-2">
            <a href="{{ action('MovieController@show', $movie->movie_id) }}">
               <img src="{{ URL::asset('images/covers/') }}/{{$movie->cover}}  " /><br/>
               <i class="ft icon-movie"></i> {{ $movie->name }} ({{ date( 'Y', strtotime( $movie->release_date ) ) }})
            </a>
         </div>
      @endforeach
   </div>

@stop
