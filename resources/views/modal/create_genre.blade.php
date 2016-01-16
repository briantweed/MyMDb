<div class="modal-dialog">
   <div class="modal-content">
      <div class="modal-header"><h4>Create New Genre</h4></div>
      <div class="modal-body">
         {!! Form::open(['url'=>'genre', 'id'=>'create_new_genre_form']) !!}
            @include('segments.forms.form_builder')
         {!! Form::close() !!}
         <div id="create_person_error" class="row has-error hide">
            <div class="col-xs-12 text-right">
               <label id="create_genre_error_message" for="formGroupInputSmall" class="control-label"></label>
            </div>
         </div>
      </div>
      <div class="modal-footer">
         <div class="col-xs-offset-4 col-xs-3">
            <button type="button" class="btn btn-block btn-default" data-dismiss="modal">cancel</button>
         </div>
         <div class="col-xs-5">
            <button onclick="storeNewGenre()" type="button" class="btn btn-block btn-primary">Add</button>
         </div>
      </div>
   </div>
</div>
