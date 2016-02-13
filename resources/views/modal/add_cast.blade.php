<div class="modal fade" id="new-cast-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header"><h4>Add Cast Member</h4></div>
         <div class="modal-body">
            <div class="form-group">
               {!! Form::label('cast_list', 'Actor Name:') !!}
               {!! Form::select('cast_list', array('' => 'select ...') + $options->actors, '', ['class'=>'form-control','id'=>'cast_list', 'onchange'=>'setPersonId(this.value)']) !!}
            </div>
            <div class="row">
               <div class="col-xs-12">
                  {!! Form::label('character_name', 'Character Name:') !!}
               </div>
            </div>
            <div class="row">
               <div class="col-xs-1 main_actor" data-toggle='tooltip' data-placement='top' title='main actor' >
                  {!! Form::checkbox('main_star', '1', '', ['id' => 'main_star']) !!}
                  <label for='main_star' class='main_star' ></label>
               </div>
               <div class="col-xs-11">
                  {!! Form::text('character_name', '', ['class'=>'form-control', 'autocomplete'=>'off']) !!}
               </div>
            </div>
            <div id="new_cast_error" class="row has-error hide">
               <div class="col-xs-12 text-right">
                  <label id="new_cast_error_message" for="formGroupInputSmall" class="control-label"></label>
               </div>
            </div>
         </div>
         <div class="modal-footer">
            <div class="col-xs-offset-4 col-xs-3">
               <button type="button" class="btn btn-block btn-default" data-dismiss="modal">cancel</button>
            </div>
            <div class="col-xs-5">
               <button id="add_new_cast" type="button" class="btn btn-block btn-primary">Add</button>
            </div>
         </div>
      </div>
   </div>
</div>
