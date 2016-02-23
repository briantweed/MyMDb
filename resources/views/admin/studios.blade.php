
<div class="row">
   <div class="col-xs-12"><h4>Studios</h4></div>
</div>

@foreach( $studios as $i=>$studio )
   <div class="row" style="padding:0.5em 0; background-color: {{ $i % 2 == 0 ? '#ffffff': '#f9f9f9' }};">
      <div class="col-xs-2">
         {{$studio->studio_id}}
      </div>
      <div class="col-xs-10">
         {{$studio->name}}
      </div>
   </div>
@endforeach
