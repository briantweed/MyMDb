@extends('app')


{{-- ---Page Title--- --}}
@section('title')
   {{$name}}
@stop

@section('content')

   <div class="row movie">

      {{-- left column --}}
      <div class="col-xs-12 col-sm-4 col-md-4 col-lg-3">
         {{-- cover image --}}
         <div class="row">
            <div class="col-xs-12">
               <img class="img-responsive img-rounded" src="{{asset('images/covers/')}}/{{$cover}}" />
            </div>
         </div>

         <hr/>

         {{-- back button --}}
         <div class="row">
            <div class="col-xs-12">
               <a class="btn btn-info btn-lg btn-block" href="{{ action('MovieController@index') }}"><i class="ft icon-back-arrow"></i> back</a>
            </div>
         </div>

         {{-- edit button --}}
         <div class="row">
            <div class="col-xs-12">
               <a class="btn btn-success btn-lg btn-block" href="javascript:void(0);"><i class="ft icon-edit"></i> edit</a>
            </div>
         </div>

         {{-- view button --}}
         <div class="row">
            <div class="col-xs-12">
               <a class="btn btn-warning btn-lg btn-block" href="javascript:void(0);"><i class="ft icon-view"></i> watching</a>
            </div>
         </div>

         <hr/>

         {{-- delete button --}}
         <div class="row">
            <div class="col-xs-12">
               <a class="btn btn-danger btn-lg btn-block" href="javascript:void(0);"><i class="ft icon-delete"></i> delete</a>
            </div>
         </div>

         {{-- padding --}}
         <div class="row"><div class="col-xs-12">&nbsp;</div></div>

      </div> {{-- end of left column --}}

      {{-- right column --}}
      <div class="col-xs-12 col-sm-8 col-md-8 col-lg-offset-1 col-lg-8">

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
            <div class="col-xs-6 col-lg-3"><b>Rating</b></div>
            <div class="col-xs-6 col-lg-9"><span class="rating-display">{!!$rating_display!!}</span></div>
         </div>

         {{-- released --}}
         <div class="row">
            <div class="col-xs-6 col-lg-3"><b>Released</b></div>
            <div class="col-xs-6 col-lg-9">{{$released}}</div>
         </div>

         {{-- running time --}}
         <div class="row">
            <div class="col-xs-6 col-lg-3"><b>Running Time</b></div>
            <div class="col-xs-6 col-lg-9">{{$running_time}} mins</div>
         </div>

         {{-- certifiate --}}
         <div class="row">
            <div class="col-xs-6 col-lg-3"><b>Certificate</b></div>
            <div class="col-xs-6 col-lg-9">{{$certificate}}</div>
         </div>

         {{-- format --}}
         <div class="row">
            <div class="col-xs-6 col-lg-3"><b>Format</b></div>
            <div class="col-xs-6 col-lg-9">{{$format}}</div>
         </div>

         {{-- studio --}}
         <div class="row">
            <div class="col-xs-6 col-lg-3"><b>Studio</b></div>
            <div class="col-xs-6 col-lg-9">{{$studio}}</div>
         </div>

         {{-- genres --}}
         <div class="row">
            <div class="col-xs-6 col-lg-3">
               <b>Genres</b>
            </div>
            {{-- genre list --}}
            <div class="col-xs-6 col-lg-9">
               @foreach( $genres as $genre )
                  {{$genre->type}};
               @endforeach
            </div>
         </div>

         @if(count($tags) != 0)

            {{-- genres --}}
            <div class="row">
               <div class="col-xs-6 col-lg-3">
                  <b>Tags</b>
               </div>
               {{-- genre list --}}
               <div class="col-xs-6 col-lg-9">
                  @foreach( $tags as $tag )
                     {{$tag->word}};
                  @endforeach
               </div>
            </div>

         @endif {{-- tags --}}

         @if(count($crew) != 0)

            {{-- padding --}}
            <div class="row"><div class="col-xs-12">&nbsp;</div></div>

            {{-- Actors Header --}}
            <div class="row">
               <div class="col-xs-12"><h3>Crew</h3></div>
            </div>

            @foreach( $crew as $emp )
               <div class="row">
                  {{-- actor --}}
                  <div class="col-xs-6 col-lg-3">
                     {{$emp->forename}} {{$emp->surname}}
                  </div>
                  {{-- character --}}
                  <div class="col-xs-6 col-lg-9">
                     {{$emp->position}}
                  </div>
               </div>
            @endforeach

         @endif {{-- crew --}}

         @if(count($cast) != 0)

            {{-- padding --}}
            <div class="row"><div class="col-xs-12">&nbsp;</div></div>

            {{-- Actors Header --}}
            <div class="row">
               <div class="col-xs-12"><h3>Cast</h3></div>
            </div>

            @foreach( $cast as $actor )
               <div class="row">
                  {{-- actor --}}
                  <div class="col-xs-6 col-lg-3">
                     {{$actor->forename}} {{$actor->surname}}
                  </div>
                  {{-- character --}}
                  <div class="col-xs-6 col-lg-9">
                     <em>{{$actor->character_name}}</em>
                  </div>
               </div>
            @endforeach

         @endif {{-- cast --}}

         {{-- padding --}}
         <div class="row"><div class="col-xs-12">&nbsp;</div></div>

      </div> {{-- end of right column --}}

   </div> {{-- end of movie row --}}

@stop
