@if($user!=false && $user->level==1)
   <div class="row">
      <div class="col-xs-12">
         <a class="btn btn-info btn-lg btn-block" href="{{ action('MovieController@edit',[$movie->movie_id]) }}"><i class="ft icon-edit"></i> edit</a>
      </div>
   </div>
@endif
