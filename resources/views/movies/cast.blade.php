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

   @if(isset($additional))

      @include('segments.layout.padding')

      <div class="row">
         <div class="col-xs-12"><h4>Additional Cast</h4></div>
      </div>

      @foreach( $additional as $actor )
         <div class="row">
            <div class="col-xs-4">{{$actor->actorName}}</div>
            <div class="col-xs-4">{{$actor->character}}</div>
            <div class="col-xs-2">
               <a class="btn btn-block btn-success-outline btn-xs" onclick="javascript:alert('{{$actor->actorId}}')" href="javascript:void(0)"><i class="ft icon-plus"></i> <span class="hidden-xs hidden-sm">add</span></a>
            </div>
            <div class="col-xs-2">
               <a class="btn btn-block btn-danger-outline btn-xs" onclick="javascript:$(this).parent().parent('div').slideUp()" href="javascript:void(0)"><i class="ft icon-fail"></i> <span class="hidden-xs hidden-sm">discard</span></a>
            </div>
         </div>
      @endforeach

   @endif

</div>
