<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header"><h4>Delete {{$person->forename}} {{$person->surname}}</h4></div>
         <div class="modal-body"><p>Are you sure you want to delete this person?</p></div>
         <div class="modal-footer">
            <div class="col-xs-4 col-xs-offset-3">
               <button type="button" class="btn btn-block btn-default" data-dismiss="modal">cancel</button>
            </div>
            <div class="col-xs-5">
               <button id="delete_person" type="button" class="btn btn-block btn-danger">Delete</button>
            </div>
         </div>
      </div>
   </div>
</div>
