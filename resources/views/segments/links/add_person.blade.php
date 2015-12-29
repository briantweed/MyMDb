@if($user!=false && $user->level==1)
   <a href="{{ action('PersonController@create') }}">
      <i style="font-size:1.5em" class="ft icon-add-user"></i>
      <span class="hidden-xs hidden-sm"> Add Person</span>
   </a>
@endif
