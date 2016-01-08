<div class="modal-dialog">
   <div class="modal-content">
      <div class="modal-header"><h4>Create New Person</h4></div>
      <div class="modal-body">
         {!! Form::open(['url'=>'people','files' => true, 'id'=>'create_new_person_form']) !!}
            @include('segments.forms.form_builder')
         {!! Form::close() !!}
      </div>
      <div class="modal-footer">
         <div class="col-xs-offset-4 col-xs-3">
            <button type="button" class="btn btn-block btn-default" data-dismiss="modal">cancel</button>
         </div>
         <div class="col-xs-5">
            <button onclick="createNewPerson()" type="button" class="btn btn-block btn-primary">Add</button>
         </div>
      </div>
   </div>
</div>
