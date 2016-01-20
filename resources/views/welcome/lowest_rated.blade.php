
<div class="row">
   <div class="col-xs-12">
      <h4>Lowest Rated</h4>
   </div>
</div>

@foreach($details->lowest_rated as $movie)
   <div class="row lowest-rated">
      <div class="col-xs-12 col-sm-8 col-md-9">
         <a href="{{ action('MovieController@show', $movie->movie_id) }}">{{$movie->name}} ({{$movie->released}})</a>
      </div>
      <div class="col-xs-12 col-sm-4 col-md-3">
         <span class="rating-display @if($movie->rating==10) top-rated @endif" data-toggle='tooltip' data-placement='top'
            title='{{$movie->rating}} / @if($movie->movie_id==176) 11 @else 10 @endif'>{!!$movie->rating_display!!}
         </span>
      </div>
   </div>
@endforeach

@include('segments.layout.padding')
