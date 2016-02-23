@if($user!=false && $user->level==1)
   <div class="row">
      <div class="col-xs-12">
         {!! Form::open(['method'=>'DELETE', 'id'=>'delete_person_form', 'route'=>['people.destroy', $person->person_id]]) !!}
            <a data-toggle="modal" data-target="#confirm-delete" class="btn btn-danger-outline btn-lg btn-block" href="javascript:void(0)"><i class="ft icon-delete"></i> delete</a>
         {!! Form::close() !!}
      </div>
   </div>
@endif
