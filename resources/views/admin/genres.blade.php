
<div class="row">
   <div class="col-xs-12"><h4>Genres</h4></div>
</div>

@foreach( $genres as $i=>$genre )
   @if($i % 2 == 0)<div class="row" style="padding:0.5em 0; background-color: {{ $i % 4 == 0 ? '#ffffff': '#f9f9f9' }};">@endif
      <div class="col-xs-1">
         {{$genre->genre_id}}
      </div>
      <div class="col-xs-5">
         {{$genre->type}}
      </div>
   @if($i % 2 == 1)</div>@endif
@endforeach
