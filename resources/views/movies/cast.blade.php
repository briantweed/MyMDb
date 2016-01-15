<div id="cast-list">
   @foreach( $movie->cast as $actor )
      <div class="row">
         <div class="col-xs-4">{{$actor->forename}} {{$actor->surname}}</div>
         <div class="col-xs-4">{{$actor->pivot->character}}</div>
         <div class="col-xs-2">
            <a class="btn btn-block btn-default btn-xs" onclick="editCastMember({{$actor->pivot->cast_id}})" href="javascript:void(0)"><i class="ft icon-edit"></i> <span class="hidden-xs hidden-sm">edit</span></a>
         </div>
         <div class="col-xs-2">
            <a class="btn btn-block btn-danger-outline btn-xs" onclick="removeCastMember({{$actor->pivot->cast_id}})" href="javascript:void(0)"><i class="ft icon-fail"></i> <span class="hidden-xs hidden-sm">remove</span></a>
         </div>
      </div>
   @endforeach
</div>
