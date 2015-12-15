<nav class="navbar navbar-default  navbar-fixed-top">

   <div class="container">

   <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
         <span class="sr-only">Toggle navigation</span>
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{ action('MovieController@index') }}"><i class="ft icon-movie"></i> MyMDb</a>
   </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

      <ul class="nav navbar-nav navbar-right">
         <li class="padding-li"></li>
         <li class="hidden-sm hidden-md hidden-lg searchbar">
            @include('segments.layout.search_bar')
         </li>
         <li class="{{Request::is('lists/movies*') ? 'movies-active' : 'movies-normal'}}">
            <a href="{{ action('MovieController@index') }}">
               <i style="font-size:1.5em" class="ft icon-view-movie"></i>
               <span> Movies</span>
            </a>
         </li>
         <li class="{{Request::is('lists/people*') ? 'people-active' : 'people-normal'}}">
            <a href="{{ action('PersonController@index') }}">
               <i style="font-size:1.5em" class="ft icon-view-user"></i>
               <span> People</span>
            </a>
         </li>
         <li class="{{Request::is('lists/characters*') ? 'character-active' : 'character-normal'}}">
            <a href="{{ action('CharacterController@index') }}">
               <i style="font-size:1.5em" class="ft icon-character"></i>
               <span> Characters</span>
            </a>
         </li>
         @if(isset($user) && $user!=false && $user->level==1)
            <li class="{{Request::is('admin*') ? 'admin-active' : 'admin-normal'}}">
               <a href="{{ action('StudioController@index') }}">
                  <i style="font-size:1.5em" class="ft icon-admin"></i>
                  <span> Admin</span>
               </a>
            </li>
            <li class="{{Request::is('auth*') ? 'logout-active' : 'logout-normal'}}">
               <a href="{{ url('auth/logout') }}">
                  <i style="font-size:1.5em" class="ft icon-empire"></i>
                  <span> Logout</span>
               </a>
            </li>
         @else
            <li class="{{Request::is('auth*') ? 'login-active' : 'login-normal'}}">
               <a href="{{ url('auth/login') }}">
                  <i style="font-size:1.5em" class="ft icon-rebel"></i>
                  <span> Login</span>
               </a>
            </li>
         @endif
      </ul>

    </div>

  </div>

</nav>

<div class="search-bar-container">

   <div class="container">

      <div class="row">

         <div class="col-xs-12 col-sm-6 col-md-7 col-lg-8">
            @yield('subnav-left')
         </div>

         <div class="hidden-xs col-sm-6 col-md-5 col-lg-4">
            @yield('subnav-right')
         </div>

      </div>

   </div>

</div>
