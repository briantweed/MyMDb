@extends('app')


{{-- Page Title --}}
@section('title')

@stop

{{-- Page Heading --}}
@section('heading')

@stop


{{-- Subnav --}}
@section('subnav-left')
   @include('segments.links.back')
@stop


{{-- Main Body --}}
@section('content')

<div class="row">

   @if(count($movies) || count($people) || count($tags))

      @if(count($movies))
         <div class="col-xs-12">
            <h4>Movies ({{count($movies)}})</h4>
            <ul  id="movie-filter-results" class="xs-block-grid-3 sm-block-grid-6 md-block-grid-8 lg-block-grid-8">
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
      @endif

      @if(count($tags))
         <div class="col-xs-12">
            <h4>By Tag ({{count($tags)}})</h4>
            <ul  id="movie-filter-results" class="xs-block-grid-3 sm-block-grid-6 md-block-grid-8 lg-block-grid-8">
               @foreach($tags as $movie)
                  <li class="image-thumbnail text-center">
                     <a href="{{ action('MovieController@show', $movie->movie_id) }}">
                        <img class="img-responsive img-rounded lazy" src="{{asset('images/mymdb.jpg')}}" data-original="{{asset('images/covers/'.$movie->image)}}"  />
                        <span class="title-wrapper hidden-xs">{{$movie->name}} @if($movie->duplicate) ({{$movie->released}}) @endif</span>
                     </a>
                  </li>
               @endforeach
            </ul>
         </div>
      @endif

      @if(count($people))
         <div class="col-xs-12">
            <h4>People ({{count($people)}})</h4>
            <ul id="people-filter-results"class="xs-block-grid-3 sm-block-grid-6 md-block-grid-8 lg-block-grid-8">
               @foreach($people as $person)
                  <li class="image-thumbnail text-center">
                     <a href="{{ action('PersonController@show', $person->person_id) }}">
                        <img class="img-responsive img-rounded lazy" src="{{asset('images/mymdb.jpg')}}" data-original="{{asset('images/people/'.$person->image)}}"  />
                        <span class="title-wrapper hidden-xs">{{$person->forename}} {{$person->surname}} </span>
                     </a>
                  </li>
               @endforeach
            </ul>
         </div>
      @endif

   @else

      <div class="col-xs-10 col-xs-offset-1 text-center">
         <br/><br/>
         <p class="error-quote">"{{$quote->text}}"</p>
         <p class="error-link"><a href="{{ action('MovieController@show', $quote->movie_id) }}">{{$quote->name}} ({{$quote->released}})</a></p>
      </div>

   @endif

</div>

@stop
