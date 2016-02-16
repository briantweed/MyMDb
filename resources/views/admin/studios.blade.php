
<div class="row">
   <div class="col-xs-12"><h4>Studios</h4></div>
</div>

<div class="row">
   @foreach( $studios as $studio )
      <div class="col-xs-4">
         {{$studio->studio_id}} : {{$studio->name}}
      </div>
   @endforeach
</div>
