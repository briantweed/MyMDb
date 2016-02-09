<div class="modal fade" id="new-tag-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header"><h4>Create New Tag</h4></div>
         <div class="modal-body">
            <div class="form-group">
               {!! Form::label('new_tag', 'New Tag:') !!}
               {!! Form::text('new_tag', '', ['class'=>'form-control', 'autocomplete'=>'off']) !!}
            </div>
            <div id="new_tag_error" class="row has-error hide">
               <div class="col-xs-12 text-right">
                  <label id="new_tag_error_message" for="formGroupInputSmall" class="control-label"></label>
               </div>
            </div>
         </div>
         <div class="modal-footer">
            <div class="col-xs-offset-4 col-xs-3">
               <button type="button" class="btn btn-block btn-default" data-dismiss="modal">cancel</button>
            </div>
            <div class="col-xs-5">
               <button id="add_new_tag" type="button" class="btn btn-block btn-primary">Add</button>
            </div>
         </div>
      </div>
   </div>
</div>
