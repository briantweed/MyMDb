{!! Form::open(['url'=>'filter', 'id'=>'filter-movie-form']) !!}
<div class="input-group">
      <input class="form-control" id="filter-movie" name="filter-movie-text" type="text" autocomplete="off" placeholder="Search ..." />
      <input id="filter-movie-by" name="filter-movie-by" type="hidden"/>
      <span class="input-group-btn">
         <button class="btn btn-info" type="button" id="filter-movie-start" onclick="startFilter('all','')">Go</button>
         <button id="filter-movie-options" aria-expanded="false" aria-haspopup="true" data-toggle="dropdown" class="btn btn-info dropdown-toggle" type="button">
            <span class="caret"></span>
            <span class="sr-only">Toggle Dropdown</span>
         </button>
         <ul class="dropdown-menu dropdown-menu-right">
            <li><a href="javascript:void(0)" onclick="startFilter('rating','')">Rating</a></li>
            <li><a href="javascript:void(0)" onclick="startFilter('year','')">Year</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="javascript:location.reload()">Clear</a></li>
         </ul>
      </span>
</div>
{!! Form::close() !!}
