
<div class="row">
   <div class="col-xs-12"><h4>Genres</h4></div>
</div>

@foreach( $genres as $i=>$genre )
   <div class="row" style="padding:0.5em 0; background-color: {{ $i % 2 == 0 ? '#ffffff': '#f9f9f9' }};">
      <div class="col-xs-2">
         {{$genre->genre_id}}
      </div>
      <div class="col-xs-10">
         {{$genre->type}}
      </div>
   </div>
@endforeach
