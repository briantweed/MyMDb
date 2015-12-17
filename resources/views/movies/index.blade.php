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

@section('subnav-right')
   @include('segments.layout.search_bar')
@stop

{{-- Main Body --}}
@section('content')

   <div class="row">
      <div class="col-xs-12">
         <ul class="xs-block-grid-3 sm-block-grid-6 md-block-grid-8 lg-block-grid-8">
            @foreach($movies as $movie)
               <li class="movie text-center">
                  <a href="{{ action('MovieController@show', $movie->movie_id) }}">
                     @if($movie->cover_count == 1)
                        <img class="img-responsive img-rounded" src="http://placehold.it/300x450/cccccc/ffffff?text={{$movie->cover}}" alt="{{$movie->name}}" />
                     @else
                        <img class="img-responsive img-rounded" src="{{asset('images/covers/')}}/{{$movie->cover}}" alt="{{$movie->name}}" />
                     @endif
                     <span class="hidden-xs">{{$movie->name}} @if($movie->duplicate) ({{$movie->released}}) @endif</span>
                  </a>
               </li>
            @endforeach
         </ul>
      </div>
   </div>

   <div class="row">
      <div class="col-xs-12">
         {!! $movies->render() !!}
      </div>
   </div>

@stop

{{-- Jquery --}}
@section('jquery')
   {!! Html::script('js/pages/index_movie.js') !!}
@stop
