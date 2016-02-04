<div class="row">
   <div class="col-xs-12">
      <h4>Top Rated</h4>
   </div>
</div>

@foreach($details->top_rated as $i=>$movie)
   <div class="row top-rated" style="background-color: {{ $i % 2 == 0 ? '#ffffff': '#f9f9f9' }};">
      <div class="col-xs-12 col-sm-8">
         <a href="{{ action('MovieController@show', $movie->movie_id) }}">{{$movie->name}} ({{$movie->released}})</a>
      </div>
      <div class="col-xs-12 col-sm-4">
         <span class="rating-display @if($movie->rating==10) top-rated @endif" data-toggle='tooltip' data-placement='top'
            title='{{$movie->rating}} / @if($movie->movie_id==176) 11 @else 10 @endif'>{!!$movie->rating_display!!}
         </span>
      </div>
   </div>
@endforeach

@include('segments.layout.padding')
