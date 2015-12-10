<nav class="navbar navbar-default  navbar-fixed-top">

   <div class="container">

   <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
         <span class="sr-only">Toggle navigation</span>
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"><i class="ft icon-movie"></i>MyDB</a>
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
         <li>
            <a data-toggle='tooltip' data-placement='bottom' title='Tags' href="{{ action('KeywordController@index') }}">
               <i style="font-size:2em" class="ft icon-popcorn"></i>
               <span class="hidden-sm hidden-md hidden-lg"> - View All Tags</span>
            </a>
         </li>
         <li>
            <a data-toggle='tooltip' data-placement='bottom' title='Genres' href="{{ action('GenreController@index') }}">
               <i style="font-size:2em" class="ft icon-genre"></i>
               <span class="hidden-sm hidden-md hidden-lg"> - View All Genres</span>
            </a>
         </li>
         <li>
            <a data-toggle='tooltip' data-placement='bottom' title='Studios' href="{{ action('StudioController@index') }}">
               <i style="font-size:2em" class="ft icon-studio"></i>
               <span class="hidden-sm hidden-md hidden-lg"> - View All Studios</span>
            </a>
         </li>
         <li>
            <a data-toggle='tooltip' data-placement='bottom' title='Viewings' href="{{ action('StudioController@index') }}">
               <i style="font-size:2em" class="ft icon-viewed"></i>
               <span class="hidden-sm hidden-md hidden-lg"> - All Viewings</span>
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
