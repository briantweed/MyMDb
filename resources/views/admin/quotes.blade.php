
<div class="row">
   <div class="col-xs-12"><h4>Quotes</h4></div>
</div>

@foreach( $quotes as $i=>$quote )
   <div class="row" style="padding:0.5em 0; background-color: {{ $i % 2 == 0 ? '#ffffff': '#f9f9f9' }};">
      <div class="col-xs-3">
         {{$quote->name}}
      </div>
      <div class="col-xs-9">
         {{$quote->text}}
      </div>
   </div>
@endforeach
