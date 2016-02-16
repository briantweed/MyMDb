
<div class="row">
   <div class="col-xs-12"><h4>Genres</h4></div>
</div>

<div class="row">
   @foreach( $genres as $genre )
      <div class="col-xs-4">
         {{$genre->genre_id}} : {{$genre->type}}
      </div>
   @endforeach
</div>
