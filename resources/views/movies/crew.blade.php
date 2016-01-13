<div id="crew-list">
   @foreach($movie->crew as $emp)
      <div class="row">
         <div class="col-xs-3">{{$emp->forename}}</div>
         <div class="col-xs-3">{{$emp->surname}}</div>
         <div class="col-xs-3">{{$emp->pivot->position}}</div>
         <div class="col-xs-3">
            <a class="btn btn-danger-outline btn-xs" onclick="removeCrewMember({{$emp->pivot->crew_id}})" href="javascript:void(0)"><i class="ft icon-fail"></i> remove</a>
         </div>
      </div>
   @endforeach
</div>
