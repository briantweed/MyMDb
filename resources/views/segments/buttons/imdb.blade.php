@if($movie->imdb_id)
   <div class="row">
      <div class="col-xs-12">
         <a href="http://www.imdb.com/title/{{$movie->imdb_id}}" target="_blank" class="btn btn-warning btn-lg btn-block" href="javascript:void(0);"><i class="ft icon-imdb"></i> IMDb</a>
      </div>
   </div>
@endif
