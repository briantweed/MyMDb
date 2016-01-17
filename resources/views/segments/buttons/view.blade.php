@if($user!=false && $user->level==1)
   <div class="row">
      <div class="col-xs-12">
         <a onclick="showModal('viewing')" class="btn btn-warning btn-lg btn-block" href="javascript:void(0);"><i class="ft icon-view"></i> watching</a>
      </div>
   </div>
@endif
