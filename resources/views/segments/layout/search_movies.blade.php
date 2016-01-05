<div class="input-group">
   <input type="text" class="form-control" id="filter-movie" placeholder="Search ...">
   <span class="input-group-btn">
      <button class="btn btn-info" type="button" id="filter-movie-start" onclick="startFilter('all')">Go</button>
      <button id="filter-movie-options" aria-expanded="false" aria-haspopup="true" data-toggle="dropdown" class="btn btn-info dropdown-toggle" type="button">
         <span class="caret"></span>
         <span class="sr-only">Toggle Dropdown</span>
      </button>
      <ul class="dropdown-menu dropdown-menu-right">
         <li><a a onclick="startFilter('studio')">By Studio</a></li>
         <li><a a onclick="startFilter('format')">By Format</a></li>
         <li><a a onclick="startFilter('year')">By Year</a></li>
         <li><a a onclick="startFilter('rating')">By Rating</a></li>
         <li class="divider" role="separator"></li>
         <li><a href="javascript:location.reload()">Clear</a></li>
      </ul>
   </span>
</div>
