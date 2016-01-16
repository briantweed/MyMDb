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

   @if (session('status'))
      <div class="col-xs-12 alert alert-dismissible alert-success">
         <button type="button" class="close" >
            <span aria-hidden="true">&times;</span>
         </button>
         {{ session('status') }}
      </div>
   @endif

   <div class="row">
      <div class="col-xs-12">
         <ul class="xs-block-grid-3 sm-block-grid-6 md-block-grid-8 lg-block-grid-8">
            @foreach($movies as $movie)
               <li class="image-thumbnail text-center">
                  <a href="{{ action('MovieController@show', $movie->movie_id) }}">
                     @if($movie->cover_count == 1)
                        <img class="img-responsive img-rounded lazy" src="http://placehold.it/300x450/cccccc/ffffff?text={{$movie->cover}}"  />
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

   {{-- pagination --}}
   <div class="row">
      <div class="col-xs-12">
         {!! $movies->render() !!}
      </div>
   </div>

   @include('segments.layout.padding')

@stop
