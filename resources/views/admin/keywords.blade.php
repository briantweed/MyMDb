
<div class="row">
   <div class="col-xs-12"><h4>Keywords</h4></div>
</div>

<div class="row">
   @foreach( $keywords as $keyword )
      <div class="col-xs-4">
         {{$keyword->keyword_id}} {{$keyword->word}}
      </div>
   @endforeach
</div>
