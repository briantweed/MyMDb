<div class="container">

   <div class="row">
      <div class="col-xs-12 col-sm-8">
         @if(isset($user) && $user!=false && $user->level==1)
            <a href="{{ action('AdminController@index') }}">Admin</a>
         @else
            <a href="{{ url('auth/login') }}">Login</a>
         @endif
      </div>
      <div class="col-xs-12 col-sm-4 text-right">
         &copy;<?php echo date("Y"); ?> brtweed designs
      </div>
   </div>

</div>
