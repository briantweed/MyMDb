<div class="modal-dialog">
   <div class="modal-content">
      <div class="modal-header"><h4>Movie Viewing</h4></div>
      <div class="modal-body">
         <p>Are you sure?</p>
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
            <button onclick="storeMovieViewing()" type="button" class="btn btn-block btn-primary">Confirm</button>
         </div>
      </div>
   </div>
</div>
