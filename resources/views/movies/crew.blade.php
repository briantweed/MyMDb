@foreach($movie->crew as $emp)
   <div class="row">
      <div class="col-xs-4">{{$emp->forename}} {{$emp->surname}}</div>
      <div class="col-xs-4">{{$emp->pivot->position}}</div>
      <div class="col-xs-2">
         <a class="btn btn-danger-outline btn-xs" onclick="removeCrewMember({{$emp->pivot->crew_id}})" href="javascript:void(0)"><i class="ft icon-fail"></i> remove</a>
      </div>
   </div>
@endforeach
