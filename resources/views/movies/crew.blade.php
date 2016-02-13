@foreach($movie->crew as $emp)
   <div class="row">
      <div class="col-xs-4">{{$emp->forename}} {{$emp->surname}}</div>
      <div class="col-xs-4">{{$emp->pivot->position}}</div>
      <div class="col-xs-2">
         <a class="btn btn-block btn-success-outline btn-xs" onclick="" href="javascript:void(0)"><i class="ft icon-edit"></i> <span class="hidden-xs hidden-sm">edit</span></a>
      </div>
      <div class="col-xs-2">
         <a class="btn btn-block btn-danger-outline btn-xs" onclick="removeCrewMember({{$emp->pivot->crew_id}})" href="javascript:void(0)"><i class="ft icon-fail"></i> <span class="hidden-xs hidden-sm">remove</span></a>
      </div>
   </div>
@endforeach
