@extends('app')


{{-- Page Title --}}
@section('title')
   Edit {{$movie->name}}
@stop

{{-- Page Heading --}}
@section('heading')
   Edit : {{$movie->name}}
@stop


{{-- Subnav --}}
@section('subnav-left')
   @include('segments.links.view_movie')
   @include('segments.links.add_movie')
@stop

@section('subnav-right')

@stop


{{-- Main Body --}}
@section('content')


   @if (session('status'))
      <div class="col-xs-12 alert alert-dismissible alert-success">
         <button type="button" class="close" >
            <span aria-hidden="true">&times;</span>
         </button>
         {{ session('status') }}
      </div>
   @endif
      <div class="row movie">

      {{-- left column --}}
      <div class="col-xs-12 col-sm-4 col-md-4 col-lg-3">

         {{-- cover image --}}
         <div class="row">
            <div class="col-xs-12">
               @if(isset($movie->cover))
                  @if($movie->cover_count == 1)
                     <img class="img-responsive img-rounded" src="http://placehold.it/300x450/cccccc/ffffff?text={{$movie->cover}}" alt="{{$movie->name}}" />
                  @else
                     <img id="movie-poster" class="img-responsive img-rounded" src="{{asset($movie->cover)}}" />
                     @if( Request::is('movies/*/edit'))
                        @include('segments.buttons.edit_image')
                     @endif
                  @endif
               @else
                  <img class="img-responsive img-rounded" src="http://placehold.it/300x450/cccccc/ffffff?text=no+image">
               @endif
            </div>

         </div>

         <div class="side-buttons">

            {{-- delete button --}}
            @if( Request::is('movies/*/edit'))
               <hr/>

               @include('segments.buttons.delete')
            @endif

            {{-- padding --}}
            @include('segments.layout.padding')

         </div>

      </div>
      {{-- end of left column --}}

      {{-- right column --}}
      <div class="col-xs-12 col-sm-8 col-md-8 col-lg-offset-1 col-lg-8">

         {{-- errors column --}}
         @if($errors->any())
            <div class="col-xs-12 alert alert-danger">
               * There are errors with your form
               @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
            </div>
         @endif
{{--
         <div class="row">
            <div class="col-xs-12">
               <h1>@yield('heading')</h1>
            </div>
         </div> --}}

         <ul id="movieTabs" class="nav nav-tabs" role="tablist">
            <li role="details" class="active"><a href="#movie" aria-controls="movie" role="tab" data-toggle="tab">Details</a></li>
            <li role="details"><a href="#cast" aria-controls="cast" role="tab" data-toggle="tab">Cast</a></li>
            <li role="details"><a href="#crew" aria-controls="crew" role="tab" data-toggle="tab">Crew</a></li>
            <li role="details"><a href="#genres" aria-controls="genres" role="tab" data-toggle="tab">Genres</a></li>
            <li role="details"><a href="#tags" aria-controls="tags" role="tab" data-toggle="tab">Tags</a></li>
         </ul>

         <div class="tab-content">

            @include('segments.layout.padding')

            <div role="tabpanel" class="tab-pane fade in active" id="movie">
               {!! Form::model($movie, ['method'=>'Patch','url'=>'movies/'.$movie->movie_id,'files' => true]) !!}
                  <input type="hidden" value="{{env('AVIARY_KEY')}}" name="_aviary" />
                  @include('segments.forms.form_builder')
            </div>

            <div role="tabpanel" class="tab-pane fade" id="cast">
               <div class="row cast">
                  <div class="col-xs-3"><b>Forename</b></div>
                  <div class="col-xs-3"><b>Surname</b></div>
                  <div class="col-xs-3"><b>Character</b></div>
                  <div class="col-xs-1"></div>
               </div>
               @foreach( $movie->cast as $actor )
                  <div class="row cast">
                     {{-- actor --}}
                     <div class="col-xs-3">{{$actor->forename}}</div>
                     <div class="col-xs-3">{{$actor->surname}}</div>
                     <div class="col-xs-3">{{$actor->pivot->character}}</div>
                     <div class="col-xs-1"><i class="ft icon-minus"></i></div>
                  </div>
               @endforeach
            </div>

            <div role="tabpanel" class="tab-pane fade" id="crew">
               <div class="row cast">
                  <div class="col-xs-3"><b>Forename</b></div>
                  <div class="col-xs-3"><b>Surname</b></div>
                  <div class="col-xs-3"><b>Position</b></div>
                  <div class="col-xs-1"></div>
               </div>
               @foreach($movie->crew as $emp)
                  <div class="row crew">
                     <div class="col-xs-3">{{$emp->forename}}</div>
                     <div class="col-xs-3">{{$emp->surname}}</div>
                     <div class="col-xs-3">{{$emp->pivot->position}}</div>
                     <div class="col-xs-1"><i class="ft icon-minus"></i></div>
                  </div>
               @endforeach
            </div>

            <div role="tabpanel" class="tab-pane fade" id="genres">
               <div class="row genres">
                  @foreach($options->genres as $genre)
                     <div class="col-xs-8 col-sm-6 col-md-3 col-lg-3">
                        {!! Form::label('genre_'.$genre->genre_id, $genre->type) !!}
                     </div>
                     <div class="col-xs-4 col-sm-6 col-md-3 col-lg-3 switch round">
                        {!! Form::checkbox('genres[]', $genre->genre_id, $genre->selected, ['id' => 'genre_'.$genre->genre_id]) !!}
                        {!! Form::label('genre_'.$genre->genre_id, $genre->type) !!}
                     </div>
                  @endforeach
               </div>
            </div>

            <div role="tabpanel" class="tab-pane fade" id="tags">
               {{-- <div class="row">
                  <div class="col-xs-12 col-sm-4 col-md-4 col-lg-3">
                     {!! Form::label('new_tag', 'Add New Tag') !!}
                  </div>
                  <div class="col-xs-12 col-sm-8 col-md-8 col-lg-9">
                     {!! Form::text('new_tag', '', ['class'=>'form-control']) !!}
                  </div>
               </div>

               @include('segments.layout.padding') --}}

               <div class="row tags">
                  @foreach($options->keywords as $keyword)
                     <div class="col-xs-8 col-sm-2 col-md-2 col-lg-1">
                        {!! Form::label('tag_'.$keyword->keyword_id, $keyword->word) !!}
                     </div>
                     <div class="col-xs-4 col-sm-4 col-md-4 col-lg-3 switch round">
                        {!! Form::checkbox('tags[]', $keyword->keyword_id, $keyword->selected, ['id' => 'tag_'.$keyword->keyword_id]) !!}
                        {!! Form::label('tag_'.$keyword->keyword_id, $keyword->word) !!}
                     </div>
                  @endforeach
               </div>

            </div>

            @include('segments.forms.submit')

            {!! Form::close() !!}

         </div>

         @include('segments.layout.padding')

      </div>
      {{-- end of right column --}}

   </div>
   {{-- end of movie row --}}

@stop

@section('extensions')
   <script type="text/javascript" src="http://feather.aviary.com/js/feather.js"></script>
   {!! Html::script('js/edit_movie.js') !!}
@stop
