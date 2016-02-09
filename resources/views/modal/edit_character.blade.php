<div class="modal fade" id="edit-cast-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header"><h4>Edit Character Name</h4></div>
         <div class="modal-body">
            <div class="row">
               <div class="col-xs-offset-1 col-xs-11" style="padding-left: 0px">
                  {!! Form::label('edit_character_name', 'Character Name:') !!}
               </div>
            </div>
            <div class="row">
               <div class="col-xs-1 main_actor"  style="padding-right: 5px" data-toggle='tooltip' data-placement='top' title='main actor' >
                  {!! Form::checkbox('star', '1', '', ['id' => 'main_actor']) !!}
                  <label for='main_actor' class='main_actor' ></label>
               </div>
               <div class="col-xs-11" style="padding-left :0px">
                  {!! Form::text('character_name', '', ['class'=>'form-control', 'id'=>'edit_character_name', 'autocomplete'=>'off']) !!}
               </div>
            </div>
            <div id="new_cast_error" class="row has-error hide">
               <div class="col-xs-12 text-right">
                  <label id="edit_cast_error_message" for="formGroupInputSmall" class="control-label"></label>
               </div>
            </div>
         </div>
         <div class="modal-footer">
            <div class="col-xs-offset-4 col-xs-3">
               <button type="button" class="btn btn-block btn-default" data-dismiss="modal">cancel</button>
            </div>
            <div class="col-xs-5">
               <button id="edit_new_cast" type="button" class="btn btn-block btn-primary">Update</button>
            </div>
         </div>
      </div>
   </div>
</div>
