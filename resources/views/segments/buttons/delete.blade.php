@if($user!=false && $user->level==1)
   <div class="row">
      <div class="col-xs-12">
         <a class="btn btn-danger-outline btn-lg btn-block" href="{{ action('MovieController@destroy',[$movie->movie_id]) }}"><i class="ft icon-delete"></i> delete</a>
      </div>
   </div>
@endif
