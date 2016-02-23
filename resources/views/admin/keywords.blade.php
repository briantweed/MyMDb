
<div class="row">
   <div class="col-xs-12"><h4>Keywords</h4></div>
</div>

@foreach( $keywords as $i=>$keyword )
   <div class="row" style="padding:0.5em 0; background-color: {{ $i % 2 == 0 ? '#ffffff': '#f9f9f9' }};">
      <div class="col-xs-2">
         {{$keyword->keyword_id}}
      </div>
      <div class="col-xs-10">
         {{$keyword->word}}
      </div>
   </div>
@endforeach
