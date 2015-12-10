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

      <ul class="nav navbar-nav">
         <li>
            <a data-toggle='tooltip' data-placement='bottom' title='Movies' href="{{ action('MovieController@index') }}">
               <i style="font-size:2em" class="ft icon-view-movie"></i>
               <span class="hidden-sm hidden-md hidden-lg"> - View All Movies</span>
            </a>
         </li>
         <li>
            <a data-toggle='tooltip' data-placement='bottom' title='People' href="{{ action('PersonController@index') }}">
               <i style="font-size:2em" class="ft icon-view-user"></i>
               <span class="hidden-sm hidden-md hidden-lg"> - View All People</span>
            </a>
         </li>
         <li>
            <a data-toggle='tooltip' data-placement='bottom' title='Characters' href="{{ action('PersonController@index') }}">
               <i style="font-size:2em" class="ft icon-character"></i>
               <span class="hidden-sm hidden-md hidden-lg"> - View All Characters</span>
            </a>
         </li>

      </ul>

      <ul class="nav navbar-nav navbar-right">
         <li>
            <a data-toggle='tooltip' data-placement='bottom' title='Admin' href="#">
               <i style="font-size:2em" class="ft icon-admin"></i>
               <span class="hidden-sm hidden-md hidden-lg"> - Admin</span>
            </a>
         </li>
      </ul>

    </div>

  </div>

</nav>
