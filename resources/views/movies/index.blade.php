@extends('app')

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
                     <img class="img-responsive img-rounded lazy" src="{{asset('images/mymdb.jpg')}}" data-original="{{asset('images/covers/'.$movie->image)}}"  />
                     <span class="title-wrapper hidden-xs">{{$movie->name}} @if($movie->duplicate) ({{$movie->released}}) @endif</span>
                  </a>
               </li>
            @endforeach
         </ul>
      </div>
   </div>

   @include('segments.layout.padding')

   <div class="row">
      <div class="col-xs-12 text-center">
         <ul class="pagination pagination-lg">
         {!! $movies->render() !!}
      </ul>
      </div>
   </div>

   @include('segments.layout.padding')

@stop
