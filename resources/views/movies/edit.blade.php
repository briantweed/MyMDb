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
      <div class="{{env('LEFT_COLUMN')}}">

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
      <div class="{{env('RIGHT_COLUMN')}}">

         {{-- errors column --}}
         @if($errors->any())
            <div class="col-xs-12 alert alert-danger">
               * There are errors with your form
            </div>
         @endif

         <ul id="movieTabs" class="nav nav-tabs" role="tablist">
            <li role="details" class="active"><a href="#movie" aria-controls="movie" role="tab" data-toggle="tab">Details</a></li>
            <li role="details"><a href="#cast" aria-controls="cast" role="tab" data-toggle="tab">Cast</a></li>
            <li role="details"><a href="#crew" aria-controls="crew" role="tab" data-toggle="tab">Crew</a></li>
            <li role="details"><a href="#genres" aria-controls="genres" role="tab" data-toggle="tab">Genres</a></li>
            <li role="details"><a href="#tags" aria-controls="tags" role="tab" data-toggle="tab">Tags</a></li>
         </ul>

         {!! Form::model($movie, ['method'=>'Patch','url'=>'movies/'.$movie->movie_id,'files' => true]) !!}
         {!! Form::hidden('movie_id',$movie->movie_id, ['id'=>'movie_id']) !!}
         {!! Form::hidden('person_id','', ['id'=>'person_id']) !!}
         {!! Form::hidden('_aviary', env('AVIARY_KEY'), ['id'=>'_aviary']) !!}

         <div class="tab-content">

            <div role="tabpanel" class="tab-pane fade in active" id="movie">
               @include('segments.forms.form_builder')
            </div>

            <div role="tabpanel" class="tab-pane fade" id="cast">
               <div class="row">
                  <div class="col-xs-12">
                     <a onclick="addCastMember()" class="btn btn-primary" href="javascript:void(0)"><i class="ft icon-actor"></i> <span class="hidden-sm">new cast</span></a>
                  </div>
               </div>
               <div class="row">
                  <div class="col-xs-3"><b>Forename</b></div>
                  <div class="col-xs-3"><b>Surname</b></div>
                  <div class="col-xs-3"><b>Character</b></div>
                  <div class="col-xs-3"></div>
               </div>
               @include('movies.cast')
            </div>

            <div role="tabpanel" class="tab-pane fade" id="crew">
               <div class="row">
                  <div class="col-xs-12">
                     <a onclick="addCrewMember()" class="btn btn-primary" href="javascript:void(0)"><i class="ft icon-director"></i> <span class="hidden-sm">new crew</span></a>
                  </div>
               </div>
               <div class="row">
                  <div class="col-xs-3"><b>Forename</b></div>
                  <div class="col-xs-3"><b>Surname</b></div>
                  <div class="col-xs-3"><b>Position</b></div>
               </div>
               @include('movies.crew')
            </div>

            <div role="tabpanel" class="tab-pane fade" id="genres">
               <div class="row">
                  <div class="col-xs-12">
                     <a class="btn btn-primary" href="javascript:void(0)"><i class="ft icon-genre"></i> <span class="hidden-sm">new genre</span></a>
                  </div>
               </div>
               <div class="row genres">
                  @include('movies.genres')
               </div>
            </div>

            <div role="tabpanel" class="tab-pane fade" id="tags">
               <div class="row">
                  <div class="col-xs-12">
                     <a data-toggle="modal" data-target="#new-tag-modal" class="btn btn-primary" href="javascript:void(0)"><i class="ft icon-tags"></i> new tag</a>
                  </div>
               </div>
               <div class="row tags">
                  @include('movies.tags')
               </div>
            </div>

            @include('segments.forms.submit')

         </div>
         {!! Form::close() !!}

         @include('segments.layout.padding')

      </div>
      {{-- end of right column --}}

   </div>
   {{-- end of movie row --}}

   {{-- NEW CAST MODAL --}}
   @include('modal.add_cast')

   {{-- NEW CREW MODAL --}}
   @include('modal.add_crew')


   {{-- NEW TAG MODAL --}}
   @include('modal.add_tag')


   {{-- REMOVE CAST MODAL --}}
   @include('modal.remove_cast')


   {{-- REMOVE CREW MODAL --}}
   @include('modal.remove_crew')

   <div class="modal fade" id="empty-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"></div>

@stop

@section('extensions')
   <script type="text/javascript" src="http://feather.aviary.com/js/feather.js"></script>
   {!! Html::script('js/edit_movie.js') !!}
@stop
