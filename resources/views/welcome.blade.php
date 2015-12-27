@extends('app')

{{-- Page Title --}}
@section('title')
   MyMDb
@stop

{{-- Subnav --}}
@section('subnav-left')
   &nbsp;
@stop

@section('subnav-right')

@stop

{{-- Main Body --}}
@section('content')

   <div class="row">
      <div class="col-xs-12">
         <h4>Recently Purchased</h4>
      </div>
   </div>

   <div class="row">
      <div class="col-xs-12">
         <div class="slick">
            @foreach($most_recent as $movie)
               <div>
                  <a href="{{ action('MovieController@show', $movie->movie_id) }}">
                     @if($movie->cover_count == 1)
                        <img class="img-rounded" src="http://placehold.it/300x450/cccccc/ffffff?text={{$movie->cover}}"  />
                     @else
                        <img class="img-rounded" src="{{asset($movie->cover)}}"  />
                     @endif
                  </a>
               </div>
            @endforeach
         </div>
      </div>
   </div>

   {{-- padding --}}
   @include('segments.layout.padding')
   {{-- padding --}}

   @include('segments.layout.padding')
   {{-- second row --}}

   <div class="row">
      {{-- top rated movies --}}
      <div class="col-xs-12 col-sm-offset-2 col-sm-8 col-md-offset-0 col-md-6 col-lr-6">
         <div class="row">
            <div class="col-xs-12">
               <h4>Top Rated</h4>
            </div>
         </div>

         @foreach($top_rated as $movie)
            <div class="row movie">
               <div class="col-xs-12 col-sm-8">
                  <a href="{{ action('MovieController@show', $movie->movie_id) }}">{{$movie->name}} ({{$movie->released}})</a>
               </div>
               <div class="col-xs-12 col-sm-4">
                  <span class="rating-display @if($movie->rating==10) top-rated @endif" data-toggle='tooltip' data-placement='top' title='{{$movie->rating}} / 10'>{!!$movie->rating_display!!}</span>
               </div>
            </div>
         @endforeach

         {{-- padding --}}
         @include('segments.layout.padding')

      </div> {{-- end of top rated --}}

      {{-- worst rated movies --}}
      <div class="col-xs-12 col-sm-offset-2 col-sm-8 col-md-offset-0 col-md-6 col-lr-6">

         <div class="row">
            <div class="col-xs-12">
               <h4>Lowest Rated</h4>
            </div>
         </div>

         @foreach($worst_rated as $movie)
            <div class="row movie">
               <div class="col-xs-12 col-sm-8 col-md-9">
                  <a href="{{ action('MovieController@show', $movie->movie_id) }}">{{$movie->name}} ({{$movie->released}})</a>
               </div>
               <div class="col-xs-12 col-sm-4 col-md-3">
                  <span class="rating-display @if($movie->rating==10) top-rated @endif" data-toggle='tooltip' data-placement='top' title='{{$movie->rating}} / 10'>{!!$movie->rating_display!!}</span>
               </div>
            </div>
         @endforeach

         {{-- padding --}}
         @include('segments.layout.padding')

      </div> {{-- end of worst rated --}}

   </div> {{-- end of second row --}}

   @include('segments.layout.padding')

</div> {{-- end of container --}}

</div> {{-- end of main content --}}

<div style="background:#40515d;color:#f0f0f0">
<div class="container">

   @include('segments.layout.padding')
   {{-- second row --}}

   <div class="row movie">
      <div class="col-xs-2 col-sm-3 col-md-2 col-lg-offset-1 col-lg-2">
         <a href="{{ action('MovieController@show', $highlight->movie_id) }}">
            @if($highlight->cover_count == 1)
               <img class="img-rounded" src="http://placehold.it/300x450/cccccc/ffffff?text={{$highlight->cover}}"  />
            @else
               <img style="box-shadow: 1px 1px 4px #888" class="img-rounded img-responsive" src="{{asset($highlight->cover)}}"  />
            @endif
         </a>
      </div>
      <div class="col-xs-10 col-sm-9 col-md-10 col-lg-8">
         <h4>{{$highlight->name}} ({{$highlight->released}}) </h4>
         <span class="rating-display @if($movie->rating==10) top-rated @endif" data-toggle='tooltip' data-placement='top' title='{{$movie->rating}} / 10'>{!!$movie->rating_display!!}</span>
         <br><br>{{$highlight->description}}<br><br>
         <a href="javascript:void(0)" class="btn btn-lg btn-info-outline"> view </a>
      </div>
   </div>
   {{-- padding --}}
   @include('segments.layout.padding')

</div>
</div>


   {{-- padding --}}
   @include('segments.layout.padding')

@stop

@section('extensions')
   {!! Html::script('js/slick.js') !!}
   {!! Html::script('js/welcome.js') !!}
@stop
