<div id="crew-list">
   @foreach($movie->crew as $emp)
      <div class="row">
         <div class="col-xs-3">{{$emp->forename}}</div>
         <div class="col-xs-3">{{$emp->surname}}</div>
         <div class="col-xs-3">{{$emp->pivot->position}}</div>
         <div class="col-xs-1">
            <a class="btn btn-danger btn-xs" onclick="removeCrewMember({{$emp->person_id}})" href="javascript:void(0)"><i class="ft icon-fail"></i></a>
         </div>
      </div>
   @endforeach
</div>
