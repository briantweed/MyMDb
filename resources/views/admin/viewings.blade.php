
<div class="row">
   <div class="col-xs-12"><h4>Viewings</h4></div>
</div>

@foreach( $viewings as $i=>$viewing )
   <div class="row" style="padding:0.5em 0; background-color: {{ $i % 2 == 0 ? '#ffffff': '#f9f9f9' }};">
      <div class="col-xs-4">
         {{$viewing->name}}
      </div>
      <div class="col-xs-8">
         {{$viewing->viewed}}
      </div>
   </div>
@endforeach
