@if($user!=false && $user->level==1)
   <a href="{{ action('MovieController@show',[$movie->movie_id]) }}">
      <i style="font-size:1.5em" class="ft icon-view-movie"></i>
      <span class="hidden-xs hidden-sm"> View Movie</span>
   </a>
@endif
