@extends('app')


{{-- ---Page Title--- --}}
@section('title')
   {{$name}}
@stop

@section('content')

   <div class="row movie">

      {{-- left column --}}
      <div class="col-xs-12 col-sm-5 col-md-4 col-lg-3">

         {{-- cover image --}}
         <div class="row">
            <div class="col-xs-12">
               <img class="img-responsive img-rounded" src="{{asset('images/covers/')}}/{{$cover}}" />
            </div>
         </div>

         {{-- back button --}}
         <div class="row">
            <div class="col-xs-12">
               <a class="btn btn-info btn-lg btn-block" href="{{ action('MovieController@index') }}"><i class="ft icon-back-arrow"></i> back</a>
            </div>
         </div>

      </div> {{-- end of left column --}}

      {{-- right column --}}
      <div class="col-xs-12 col-sm-7 col-md-8 col-lg-9">

         {{-- film title --}}
         <div class="row">
            <div class="col-xs-12"><h1>{{$name}}<br/></h1></div>
         </div>

         {{-- description --}}
         <div class="row">
            <div class="col-xs-12"><p>{{$description}}</p></div>
         </div>

         {{-- star rating --}}
         <div class="row">
            <div class="col-xs-6"><b>Rating</b></div>
            <div class="col-xs-6"><span class="rating-display">{!!$rating_display!!}</span></div>
         </div>

         {{-- released --}}
         <div class="row">
            <div class="col-xs-6"><b>Released</b></div>
            <div class="col-xs-6">{{$released}}</div>
         </div>

         {{-- running time --}}
         <div class="row">
            <div class="col-xs-6"><b>Running Time</b></div>
            <div class="col-xs-6">{{$running_time}} mins</div>
         </div>

         {{-- certifiate --}}
         <div class="row">
            <div class="col-xs-6"><b>Certificate</b></div>
            <div class="col-xs-6">{{$certificate}}</div>
         </div>

         {{-- format --}}
         <div class="row">
            <div class="col-xs-6"><b>Format</b></div>
            <div class="col-xs-6">{{$format}}</div>
         </div>

         {{-- studio --}}
         <div class="row">
            <div class="col-xs-6"><b>Studio</b></div>
            <div class="col-xs-6">{{$studio}}</div>
         </div>

         {{-- divider --}}
         <div class="row"><div class="col-xs-12">&nbsp;</div></div>

         {{-- Actors Header --}}
         <div class="row">
            <div class="col-xs-12"><h3>Cast</h3></div>
         </div>

         @foreach( $cast as $actor )
            <div class="row">
               {{-- actor --}}
               <div class="col-xs-6">
                  {{$actor->person_forename}} {{$actor->person_surname}}
               </div>
               {{-- character --}}
               <div class="col-xs-6">
                  <em>{{$actor->character_name}}</em>
               </div>
            </div>
         @endforeach

      </div> {{-- end of right column --}}

   </div> {{-- end of movie row --}}

@stop
