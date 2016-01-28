@foreach( $person->roles as $role )
   <div class="row cast">
      <div class="col-xs-5">{{$role->name}}</div>
      <div class="col-xs-3"><i>{{$role->pivot->character}}</i></div>
      <div class="col-xs-2">
         <a class="btn btn-block btn-default btn-xs" onclick="editMovieRole({{$role->pivot->cast_id}})" href="javascript:void(0)"><i class="ft icon-edit"></i> edit</a>
      </div>
      <div class="col-xs-2">
         <a class="btn btn-block btn-danger-outline btn-xs" onclick="removeMovieRole({{$role->pivot->cast_id}})" href="javascript:void(0)"><i class="ft icon-fail"></i> remove</a>
      </div>
   </div>
@endforeach
