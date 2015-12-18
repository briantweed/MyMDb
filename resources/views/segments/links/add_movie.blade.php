@if($user!=false && $user->level==1)
   <a href="{{ action('MovieController@create') }}">
      <i style="font-size:1.5em" class="ft icon-add-movie"></i>
      <span class="hidden-xs hidden-sm"> Add Movie</span>
   </a>
@endif
