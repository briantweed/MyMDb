<nav class="navbar navbar-default  navbar-fixed-top">

   <div class="container">

   <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
         <span class="sr-only">Toggle navigation</span>
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" data-toggle='tooltip' data-placement='bottom' title='Home' href="{{ action('MovieController@index') }}"><i class="ft icon-movie"></i>MyDB</a>
   </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

      <ul class="nav navbar-nav navbar-right">
         <li class="padding-li"></li>
         <li class="{{Request::path() == 'lists/movies' ? 'movies-active' : 'movies-normal'}}">
            <a href="{{ action('MovieController@index') }}">
               <i style="font-size:1.5em" class="ft icon-view-movie"></i>
               <span> Movies</span>
            </a>
         </li>
         <li class="{{Request::path() == 'lists/people' ? 'people-active' : 'people-normal'}}">
            <a href="{{ action('PersonController@index') }}">
               <i style="font-size:1.5em" class="ft icon-view-user"></i>
               <span> People</span>
            </a>
         </li>
         <li class="{{Request::path() == 'lists/characters' ? 'character-active' : 'character-normal'}}">
            <a href="{{ action('CharacterController@index') }}">
               <i style="font-size:1.5em" class="ft icon-character"></i>
               <span> Characters</span>
            </a>
         </li>
         <li class="{{Request::path() == 'admin' ? 'admin-active' : 'admin-normal'}}">
            <a href="#">
               <i style="font-size:1.5em" class="ft icon-admin"></i>
               <span> Admin</span>
            </a>
         </li>
      </ul>

    </div>

  </div>

</nav>

<div class="search-bar-container">

   <div class="container">

      <div class="row">

         <div class="col-xs-12 col-sm-6 col-md-7 col-lg-8">
            @yield('subnav')
         </div>

         <div class="col-xs-12 col-sm-6 col-md-5 col-lg-4">

           <div class="input-group">
               <input type="text" class="form-control" placeholder="Search...">
               <span class="input-group-btn">
                  <button class="btn btn-info" type="button">Go</button>
               </span>
           </div>

         </div>

      </div>

   </div>

</div>
