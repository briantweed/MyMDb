@extends('app')

{{-- Page Title --}}
@section('title')
   Edit {{$person->forename}} {{$person->surname}}
@stop

{{-- Page Heading --}}
@section('heading')
   Edit : {{$person->forename}} {{$person->surname}}
@stop

{{-- Subnav --}}
@section('subnav-left')
   @include('segments.links.back')
   @include('segments.links.view_person')
   @include('segments.links.add_person')
   @include('segments.links.edit_next_person')
@stop

{{-- Main Body --}}
@section('content')

   @if(session('status'))
      <div class="col-xs-12 alert alert-dismissible alert-success">
         <button type="button" class="close" >
            <span aria-hidden="true">&times;</span>
         </button>
         {{session('status')}}
      </div>
   @endif

   <div class="row movie">

      {{-- left column --}}
      <div class="{{env('LEFT_COLUMN')}}">

         {{-- cover image --}}
         <div class="row">
            <div class="col-xs-12">
               @if(isset($person->image))
                  @if($person->cover_count == 1)
                     <img id="person-poster" class="img-responsive img-rounded" src="http://placehold.it/300x450/cccccc/ffffff?text={{$person->cover}}"  />
                  @else
                     <img id="person-poster" class="img-responsive img-rounded" src="{{asset($person->cover)}}" />
                     @if( Request::is('people/*/edit'))
                        @include('segments.buttons.edit_image')
                     @endif
                  @endif
               @else
                  <img id="person-poster" class="img-responsive img-rounded" src="http://placehold.it/300x450/cccccc/ffffff?text=no+image">
               @endif
            </div>
         </div>

         <div class="side-buttons">

            {{-- delete button --}}
            @if(Request::is('people/*/edit'))
               <hr/>
               @include('segments.buttons.delete_person')
            @endif

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
            <li role="details" class="active"><a href="#details" aria-controls="details" role="tab" data-toggle="tab">Details</a></li>
            <li role="details"><a href="#roles" aria-controls="roles" role="tab" data-toggle="tab">Roles</a></li>
            <li role="details"><a href="#positions" aria-controls="positions" role="tab" data-toggle="tab">Positions</a></li>
         </ul>

         <div class="tab-content">

            <div role="tabpanel" class="tab-pane fade in active" id="details">
               {!! Form::model($person, ['method'=>'Patch', 'url'=>'people/'.$person->person_id, 'files' => true]) !!}
               {!! Form::hidden('movie_id','', ['id'=>'movie_id']) !!}
               {!! Form::hidden('person_id',$person->person_id, ['id'=>'person_id']) !!}
               {!! Form::hidden('_aviary', env('AVIARY_KEY'), ['id'=>'_aviary']) !!}
               @include('segments.forms.form_builder')
            </div>

            <div role="tabpanel" class="tab-pane fade in" id="roles">
               <div class="row">
                  <div class="col-xs-12">
                     <a onclick="addMovieRole()" class="btn btn-primary" href="javascript:void(0)"><i class="ft icon-movie"></i> <span class="hidden-sm">new role</span></a>
                  </div>
               </div>
               <div class="row cast">
                  <div class="col-xs-5"><b>Film</b></div>
                  <div class="col-xs-3"><b>Character</b></div>
               </div>
               <div id="role-list">
                  @include('people.roles')
               </div>
            </div>

            <div role="tabpanel" class="tab-pane fade in" id="positions">
               <div class="row">
                  <div class="col-xs-12">
                     <a onclick="showModal('createPosition', '')" class="btn btn-primary" href="javascript:void(0)"><i class="ft icon-director"></i> <span class="hidden-sm">new position</span></a>
                  </div>
               </div>
               <div class="row cast">
                  <div class="col-xs-5"><b>Film</b></div>
                  <div class="col-xs-3"><b>Position</b></div>
               </div>
               <div id="position-list">
                  @include('people.positions')
               </div>
            </div>

         </div>

         @include('segments.forms.submit')

         {!! Form::close() !!}

      </div>
      {{-- end of right column --}}

   </div>
   {{-- end of movie row --}}

   @include('modal.add_role')
   @include('modal.edit_character')
   @include('modal.remove_role')

@stop

@section('extensions')
   <script type="text/javascript" src="http://feather.aviary.com/js/feather.js"></script>
   {!! Html::script('js/edit_person.js') !!}
@stop
