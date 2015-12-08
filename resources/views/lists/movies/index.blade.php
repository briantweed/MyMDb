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

<?php
   $count = 0;
?>
   @foreach( $movies as $movie )
<?php
      if($count%6==0) echo '<div class="row">';
?>
      <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
         <div class="row margin-bottom">
            <div class="col-xs-12">
               <a href="{{ action('MovieController@show', $movie->movie_id) }}">
                  <img class="img-responsive img-rounded" src="{{asset('images/covers/')}}/{{$movie->cover}}  " />
               </a>
            </div>
            <div class="col-xs-12">
               <a href="{{ action('MovieController@show', $movie->movie_id) }}">
                  {{ $movie->name }} ({{date( 'Y', strtotime($movie->release_date))}})
               </a>
            </div>
         </div>
      </div>
<?php
      if($count%6==5) echo '</div>';
      $count++;
?>

   @endforeach

@stop
