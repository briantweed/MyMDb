@if($user!=false && $user->level==1)
   <a href="{{ action('MovieController@destroy') }}">
      <i style="font-size:1.5em" class="ft icon-add-movie"></i>
      <span class="hidden-xs"> Add Movie</span>
   </a>
@endif
