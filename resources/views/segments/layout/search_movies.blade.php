<div class="input-group">
   <input class="form-control" id="filter-movie" type="text" autocomplete="off" placeholder="Search ...">
   <span class="input-group-btn">
      <button class="btn btn-info" type="button" id="filter-movie-start" onclick="startFilter('all','')">Go</button>
      <button id="filter-movie-options" aria-expanded="false" aria-haspopup="true" data-toggle="dropdown" class="btn btn-info dropdown-toggle" type="button">
         <span class="caret"></span>
         <span class="sr-only">Toggle Dropdown</span>
      </button>
      <ul class="dropdown-menu dropdown-menu-right">
         <li><a href="{{ action('SearchController@index') }}">Advanced Search</a></li>
         <li class="divider" role="separator"></li>
         <li><a href="javascript:location.reload()">Clear</a></li>
      </ul>
   </span>
</div>
