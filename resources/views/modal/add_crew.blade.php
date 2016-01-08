<div class="modal fade" id="new-crew-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header"><h4>Add Crew Member</h4></div>
         <div class="modal-body">
            <div class="form-group">
               {!! Form::label('crew_list', 'Crew Name:') !!}
               {!! Form::select('crew_list', array(''=>'select ...') + $options->crew, '', ['class'=>'form-control','id'=>'crew_list', 'onchange'=>'setPersonId(this.value)']) !!}
            </div>
            <div class="form-group">
               {!! Form::label('crew_position', 'Position:') !!}
               {!! Form::select('crew_position', array(''=>'select ...', 'Director'=>'Director', 'Producer'=>'Producer', 'Writer'=>'Writer', 'Composer'=>'Composer'), '', ['class'=>'form-control','id'=>'crew_position']) !!}
            </div>
            <div id="new_crew_error" class="row has-error hide">
               <div class="col-xs-12 text-right">
                  <label id="new_crew_error_message" for="formGroupInputSmall" class="control-label"></label>
               </div>
            </div>
         </div>
         <div class="modal-footer">
            <div class="col-xs-offset-4 col-xs-3">
               <button type="button" class="btn btn-block btn-default" data-dismiss="modal">cancel</button>
            </div>
            <div class="col-xs-5">
               <button id="add_new_crew" type="button" class="btn btn-block btn-primary">Add</button>
            </div>
         </div>
      </div>
   </div>
</div>
