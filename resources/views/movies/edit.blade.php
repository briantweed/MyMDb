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
         <div class="tab-content">

            @include('segments.layout.padding')

            <div role="tabpanel" class="tab-pane fade" id="cast">
               <div class="row">
                  <div class="col-xs-3"><b>Forename</b></div>
                  <div class="col-xs-3"><b>Surname</b></div>
                  <div class="col-xs-3"><b>Character</b></div>
                  <div class="col-xs-3">
                     <a onclick="addCastMember()" class="btn btn-primary" href="javascript:void(0)"><i class="ft icon-actor"></i> <span class="hidden-sm">new cast</span></a>
                  </div>
               </div>
               @include('movies.cast')
            </div>

            <div role="tabpanel" class="tab-pane fade" id="crew">

               <div class="row">
                  <div class="col-xs-3"><b>Forename</b></div>
                  <div class="col-xs-3"><b>Surname</b></div>
                  <div class="col-xs-3"><b>Position</b></div>
                  <div class="col-xs-3">
                     <a onclick="addCrewMember()" class="btn btn-primary" href="javascript:void(0)"><i class="ft icon-director"></i> <span class="hidden-sm">new crew</span></a>
                  </div>
               </div>
               @include('movies.crew')
            </div>

            <div role="tabpanel" class="tab-pane fade in active" id="movie">
               <input type="hidden" value="{{env('AVIARY_KEY')}}" name="_aviary" />
               @include('segments.forms.form_builder')
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
               <div class="row">
                  <div class="col-xs-8 col-sm-6 col-md-6 col-lg-4">
                     <a data-toggle="modal" data-target="#new-tag-modal" class="btn btn-primary" href="javascript:void(0)"><i class="ft icon-tags"></i> new tag</a>
                  </div>
               </div>
               @include('segments.layout.padding')
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

   {!! Form::hidden('movie_id',$movie->movie_id, ['id'=>'movie_id']) !!}
   {!! Form::hidden('person_id','', ['id'=>'person_id']) !!}

   {{-- NEW CAST MODAL --}}
   <div class="modal fade" id="new-cast-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
         <div class="modal-content">
            <div class="modal-header"><h4>Add Cast Member</h4></div>
            <div class="modal-body">
               <div class="form-group">
                  {!! Form::label('new_cast', 'Actor Name:') !!}
                  {!! Form::select('castlist', array('' => 'select ...'), '', ['class'=>'form-control','id'=>'castlist']) !!}
               </div>
               <div class="form-group">
                  {!! Form::label('new_character', 'Character Name:') !!}
                  {!! Form::text('new_character', '', ['class'=>'form-control']) !!}
               </div>
               <div id="new_cast_error" class="row has-error hide">
                  <div class="col-xs-12 text-right">
                     <label id="new_cast_error_message" for="formGroupInputSmall" class="control-label"></label>
                  </div>
               </div>
            </div>
            <div class="modal-footer">
               <div class="col-xs-4 col-xs-offset-3">
                  <button type="button" class="btn btn-xs btn-block btn-default" data-dismiss="modal">cancel</button>
               </div>
               <div class="col-xs-5">
                  <button id="add_new_cast" type="button" class="btn btn-block btn-primary">Add</button>
               </div>
            </div>
         </div>
      </div>
   </div>

   {{-- NEW CREW MODAL --}}
   <div class="modal fade" id="new-crew-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
         <div class="modal-content">
            <div class="modal-header"><h4>Add Crew Member</h4></div>
            <div class="modal-body">
               <div class="form-group">
                  {!! Form::label('new_crew', 'Crew Name:') !!}
                  {!! Form::select('crewlist', array('' => 'select ...'), '', ['class'=>'form-control','id'=>'crewlist']) !!}
               </div>
               <div class="form-group">
                  {!! Form::label('new_position', 'Position:') !!}
                  {!! Form::select('new_position', array('' => 'select ...','Director','Producer','Writer'), '', ['class'=>'form-control','id'=>'new_position']) !!}
               </div>
               <div id="new_crew_error" class="row has-error hide">
                  <div class="col-xs-12 text-right">
                     <label id="new_crew_error_message" for="formGroupInputSmall" class="control-label"></label>
                  </div>
               </div>
            </div>
            <div class="modal-footer">
               <div class="col-xs-4 col-xs-offset-3">
                  <button type="button" class="btn btn-xs btn-block btn-default" data-dismiss="modal">cancel</button>
               </div>
               <div class="col-xs-5">
                  <button id="add_new_crew" type="button" class="btn btn-block btn-primary">Add</button>
               </div>
            </div>
         </div>
      </div>
   </div>

   {{-- NEW TAG MODAL --}}
   <div class="modal fade" id="new-tag-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
         <div class="modal-content">
            <div class="modal-header"><h4>Create New Tag</h4></div>
            <div class="modal-body">
               <div class="form-group">
                  {!! Form::label('new_tag', 'New Tag:') !!}
                  {!! Form::text('new_tag', '', ['class'=>'form-control']) !!}
               </div>
               <div id="new_tag_error" class="row has-error hide">
                  <div class="col-xs-12 text-right">
                     <label id="new_tag_error_message" for="formGroupInputSmall" class="control-label"></label>
                  </div>
               </div>
            </div>
            <div class="modal-footer">
               <div class="col-xs-4 col-xs-offset-3">
                  <button type="button" class="btn btn-xs btn-block btn-default" data-dismiss="modal">cancel</button>
               </div>
               <div class="col-xs-5">
                  <button id="add_new_tag" type="button" class="btn btn-block btn-primary">Add</button>
               </div>
            </div>
         </div>
      </div>
   </div>

   {{-- REMOVE CAST MODAL --}}
   <div class="modal fade" id="remove-cast-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
         <div class="modal-content">
            <div class="modal-header"><h4>Delete Cast</h4></div>
            <div class="modal-body"><p>Are you sure you want to delete this cast member?</p></div>
            <div class="modal-footer">
               <div class="col-xs-4 col-xs-offset-3">
                  <button type="button" class="btn btn-xs btn-block btn-default" data-dismiss="modal">cancel</button>
               </div>
               <div class="col-xs-5">
                  <button id="remove_cast" type="button" class="btn btn-block btn-danger">Delete</button>
               </div>
            </div>
         </div>
      </div>
   </div>

   {{-- REMOVE CREW MODAL --}}
   <div class="modal fade" id="remove-crew-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
         <div class="modal-content">
            <div class="modal-header"><h4>Delete Crew</h4></div>
            <div class="modal-body"><p>Are you sure you want to delete this crew member?</p></div>
            <div class="modal-footer">
               <div class="col-xs-4 col-xs-offset-3">
                  <button type="button" class="btn btn-xs btn-block btn-default" data-dismiss="modal">cancel</button>
               </div>
               <div class="col-xs-5">
                  <button id="remove_crew" type="button" class="btn btn-block btn-danger">Delete</button>
               </div>
            </div>
         </div>
      </div>
   </div>

@stop

@section('extensions')
   <script type="text/javascript" src="http://feather.aviary.com/js/feather.js"></script>
   {!! Html::script('js/edit_movie.js') !!}
@stop
