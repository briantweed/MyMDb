@if($user!=false && $user->level==1)
   <a href="{{ action('PersonController@show',[$person->person_id]) }}">
      <i style="font-size:1.5em" class="ft icon-view-user"></i>
      <span class="hidden-xs hidden-sm"> View Person</span>
   </a>
@endif
