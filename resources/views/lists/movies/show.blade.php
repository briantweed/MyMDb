@extends('app')


{{-- Page Title --}}
@section('title')
   {{$movie->name}}
@stop


{{-- Main Body --}}
@section('content')

   <div class="row movie">

      {{-- left column --}}
      <div class="col-xs-12 col-sm-4 col-md-4 col-lg-3">
         {{-- cover image --}}
         <div class="row">
            <div class="col-xs-12">
               <img class="img-responsive img-rounded" src="{{asset('images/covers/')}}/{{$movie->cover}}" />
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
            <div class="col-xs-12"><h1>{{$movie->name}}<br/></h1></div>
         </div>

         {{-- description --}}
         <div class="row">
            <div class="col-xs-12"><p>{{$movie->description}}</p></div>
         </div>

         {{-- star rating --}}
         <div class="row">
            <div class="col-xs-6 col-lg-3"><b>Rating</b></div>
            <div class="col-xs-6 col-lg-9"><span data-toggle='tooltip' data-placement='right' title='{{$movie->rating}} / 10'class="rating-display">{!!$movie->rating_display!!}</span></div>
         </div>

         {{-- released --}}
         <div class="row">
            <div class="col-xs-6 col-lg-3"><b>Released</b></div>
            <div class="col-xs-6 col-lg-9">{{$movie->released}}</div>
         </div>

         {{-- running time --}}
         <div class="row">
            <div class="col-xs-6 col-lg-3"><b>Running Time</b></div>
            <div class="col-xs-6 col-lg-9">{{$movie->running_time}} mins</div>
         </div>

         {{-- certifiate --}}
         <div class="row">
            <div class="col-xs-6 col-lg-3"><b>Certificate</b></div>
            <div class="col-xs-6 col-lg-9">{{$movie->certificate}}</div>
         </div>

         {{-- format --}}
         <div class="row">
            <div class="col-xs-6 col-lg-3"><b>Format</b></div>
            <div class="col-xs-6 col-lg-9">{{$movie->format}}</div>
         </div>

         {{-- studio --}}
         <div class="row">
            <div class="col-xs-6 col-lg-3"><b>Studio</b></div>
            <div class="col-xs-6 col-lg-9">{{$movie->studio}}</div>
         </div>

         {{-- genres --}}
         @if(count($movie->genres) != 0)

            <div class="row">
               <div class="col-xs-6 col-lg-3">
                  <b>Genres</b>
               </div>
               {{-- genre list --}}
               <div class="col-xs-6 col-lg-9">
                  @foreach( $movie->genres as $genre )
                     {{$genre->type}};
                  @endforeach
               </div>
            </div>

         @endif

         {{-- tags --}}
         @if(count($movie->tags) != 0)

            <div class="row">
               <div class="col-xs-6 col-lg-3">
                  <b>Tags</b>
               </div>
               {{-- tag list --}}
               <div class="col-xs-6 col-lg-9">
                  @foreach($movie->tags as $tag)
                     {{$tag->word}};
                  @endforeach
               </div>
            </div>

         @endif

         {{-- last watched --}}
         @if($movie->viewed !== NULL)

            <div class="row">
               <div class="col-xs-6 col-lg-3">
                  <b>Last Viewed</b>
               </div>

               <div class="col-xs-6 col-lg-9">
                  {{$movie->viewed}};
               </div>
            </div>

         @endif

         {{-- crew --}}
         @if(count($movie->crew) != 0)

            {{-- padding --}}
            <div class="row"><div class="col-xs-12">&nbsp;</div></div>

            <div class="row">
               <div class="col-xs-12"><h3>Crew</h3></div>
            </div>

            @foreach($movie->crew as $emp)
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

         @endif

         {{-- cast --}}
         @if(count($movie->cast) != 0)

            {{-- padding --}}
            <div class="row"><div class="col-xs-12">&nbsp;</div></div>

            <div class="row">
               <div class="col-xs-12"><h3>Cast</h3></div>
            </div>

            @foreach( $movie->cast as $actor )
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

         @endif

         {{-- padding --}}
         <div class="row"><div class="col-xs-12">&nbsp;</div></div>

      </div> {{-- end of right column --}}

   </div> {{-- end of movie row --}}

@stop


{{-- Jquery --}}
@section('jquery')

   <script type="text/javascript" >
      $(document).ready( function() {
         $('[data-toggle="tooltip"]').tooltip();
      });
   </script>

@stop
