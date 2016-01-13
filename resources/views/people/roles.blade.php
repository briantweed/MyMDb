<div id="role-list">
   @foreach( $person->movies as $movie )
      <div class="row cast">
         <div class="col-xs-6">{{$movie->name}}</div>
         <div class="col-xs-3"><i>{{$movie->pivot->character}}</i></div>
         <div class="col-xs-3">
            <a class="btn btn-danger-outline btn-xs" onclick="removeMovieRole({{$movie->pivot->cast_id}})" href="javascript:void(0)"><i class="ft icon-fail"></i> remove</a>
         </div>
      </div>
   @endforeach
</div>
