@if(isset($additional))

   @include('segments.layout.padding')

   <div class="row">
      <div class="col-xs-12"><h4>Additional Cast</h4></div>
   </div>

   @foreach( $additional as $actor )
      @if($actor->urlPhoto)
         <div class="row">
            <div class="col-xs-1">
                  <a href="{{$actor->urlProfile}}" target="_blank" ><img src="{{$actor->urlPhoto}}" /></a>
            </div>
            <div class="col-xs-3" style="padding-top:18px"><a href="{{$actor->urlProfile}}" target="_blank" >{{$actor->actorName}}</a></div>
            <div class="col-xs-4" style="padding-top:18px">{{$actor->character}}</div>
            <div class="col-xs-2" style="padding-top:18px">
               <a class="btn btn-block btn-success-outline btn-xs" onclick="showModal('createImdbActor','{{$actor->actorId}}'); setCharacterName('{{$actor->character}}', this)" href="javascript:void(0)"><i class="ft icon-plus"></i> <span class="hidden-xs hidden-sm">add</span></a>
            </div>
            <div class="col-xs-2" style="padding-top:18px">
               <a class="btn btn-block btn-danger-outline btn-xs" onclick="javascript:$(this).parent().parent('div').slideUp()" href="javascript:void(0)"><i class="ft icon-fail"></i> <span class="hidden-xs hidden-sm">discard</span></a>
               <input type="hidden" id="imdb-character-name" />
            </div>
         </div>
      @endif
   @endforeach

@endif
