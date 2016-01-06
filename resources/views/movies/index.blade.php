@extends('app')

{{-- Page Title --}}
@section('title')
   All Movies
@stop

{{-- Page Heading --}}
@section('heading')
   <h1>Movies</h1>
@stop

{{-- Subnav --}}
@section('subnav-left')
   @include('segments.links.add_movie')
@stop

{{-- Main Body --}}
@section('content')

   {{-- paginatin --}}
   {{-- <div class="row">
      <div class="col-xs-12">
         {!! $movies->render() !!}
      </div>
   </div> --}}

   {{-- padding --}}
   {{-- @include('segments.layout.padding') --}}

   <div class="row">
      <div class="col-xs-12">
         <ul class="xs-block-grid-3 sm-block-grid-6 md-block-grid-8 lg-block-grid-8">
            @foreach($movies as $movie)
               <li class="movie text-center">
                  <a href="{{ action('MovieController@show', $movie->movie_id) }}">
                     @if($movie->cover_count == 1)
                        <img class="img-responsive img-rounded lazy" data-original="http://placehold.it/300x450/cccccc/ffffff?text={{$movie->cover}}"  />
                     @else
                        <img class="img-responsive img-rounded lazy" src="http://placehold.it/300x450/cccccc/ffffff?text=MyMDb" data-original="{{asset($movie->cover)}}"  />
                     @endif
                     <span class="title-wrapper hidden-xs">{{$movie->name}} @if($movie->duplicate) ({{$movie->released}}) @endif</span>
                  </a>
               </li>
            @endforeach
         </ul>
      </div>
   </div>

   {{-- paginatin --}}
   <div class="row">
      <div class="col-xs-12">
         {!! $movies->render() !!}
      </div>
   </div>

   {{-- padding --}}
   @include('segments.layout.padding')

@stop
