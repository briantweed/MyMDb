@if($user!=false && $user->level==1)
   <div class="row">
      <div class="col-xs-12">
         <a class="btn btn-success btn-lg btn-block" href="{{ action('PersonController@edit',[$person->person_id]) }}"><i class="ft icon-edit"></i> edit</a>
      </div>
   </div>
@endif
