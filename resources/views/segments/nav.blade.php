<nav class="navbar navbar-default  navbar-fixed-top">

   <div class="container">

      <div class="navbar-header">
         <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
         </button>
         <a class="navbar-brand" href="{{ action('WelcomeController@index') }}"><i class="ft icon-movie"></i> MyMDb</a>
      </div>

      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

         <ul class="nav navbar-nav navbar-right">
            <li class="{{Request::is('movies*') ? 'movies-active' : 'movies-normal'}}">
               <a href="{{ action('MovieController@index') }}">
                  <i style="font-size:1.5em" class="ft icon-view-movie"></i>
                  <span> Movies</span>
               </a>
            </li>
            <li class="{{Request::is('people*') ? 'character-active' : 'character-normal'}}">
               <a href="{{ action('PersonController@index') }}">
                  <i style="font-size:1.5em" class="ft icon-character"></i>
                  <span> People</span>
               </a>
            </li>

            <li class="{{Request::is('admin*') ? 'admin-active' : 'admin-normal'}}">
               @if(isset($user) && $user!=false && $user->level==1)
                  <a href="{{ action('AdminController@index') }}"><i style="font-size:1.5em" class="ft icon-admin"></i> Admin</a>
               @else
                  <a href="{{ url('auth/login') }}"><i style="font-size:1.5em" class="ft icon-rebel"></i> Login</a>
               @endif
            </li>
         </ul>

      </div>

   </div>

</nav>
