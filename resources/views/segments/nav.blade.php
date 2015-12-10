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
         <li>
            <a href="{{ action('MovieController@index') }}">
               <i style="font-size:1.5em" class="ft icon-view-movie"></i>
               <span> Movies</span>
            </a>
         </li>
         <li>
            <a href="{{ action('PersonController@index') }}">
               <i style="font-size:1.5em" class="ft icon-view-user"></i>
               <span> People</span>
            </a>
         </li>
         <li>
            <a href="{{ action('PersonController@index') }}">
               <i style="font-size:1.5em" class="ft icon-character"></i>
               <span> Characters</span>
            </a>
         </li>
         <li>
            <a href="#">
               <i style="font-size:1.5em" class="ft icon-admin"></i>
               <span> Admin</span>
            </a>
         </li>
      </ul>

    </div>

  </div>

</nav>
