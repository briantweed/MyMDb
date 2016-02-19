
<div class="row">
   <div class="col-xs-12"><h4>Viewings</h4></div>
</div>

<div class="row">
   @foreach( $viewings as $viewing )
      <div class="col-xs-4">
         {{$viewing->name}}
      </div>
      <div class="col-xs-8">
         {{$viewing->viewed}}
      </div>
   @endforeach
</div>
