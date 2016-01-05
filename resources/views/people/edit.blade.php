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
   @include('segments.links.view_person')
   @include('segments.links.add_person')
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
      <div class="col-xs-12 col-sm-4 col-md-4 col-lg-3">

         {{-- cover image --}}
         <div class="row">
            <div class="col-xs-12">
               @if(isset($person->image))
                  @if($person->cover_count == 1)
                     <img id="movie-poster" class="img-responsive img-rounded" src="http://placehold.it/300x450/cccccc/ffffff?text={{$person->image}}"  />
                  @else
                     <img id="movie-poster" class="img-responsive img-rounded" src="{{asset($person->image)}}" />
                     @if( Request::is('people/*/edit'))
                        @include('segments.buttons.edit_image')
                     @endif
                  @endif
               @else
                  <img id="movie-poster" class="img-responsive img-rounded" src="http://placehold.it/300x450/cccccc/ffffff?text=no+image">
               @endif
            </div>
         </div>

         <div class="side-buttons">

            {{-- delete button --}}
            @if(Request::is('people/*/edit'))
               <hr/>

            @endif

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
            <li role="details" class="active"><a href="#details" aria-controls="details" role="tab" data-toggle="tab">Details</a></li>
            <li role="details"><a href="#roles" aria-controls="roles" role="tab" data-toggle="tab">Roles</a></li>
         </ul>

         <div class="tab-content">

            @include('segments.layout.padding')

            <div role="tabpanel" class="tab-pane fade in active" id="details">
               {!! Form::model($person, ['method'=>'Patch', 'url'=>'people/'.$person->person_id, 'files' => true]) !!}
                  <input type="hidden" value="{{env('AVIARY_KEY')}}" name="_aviary" />
                  @include('segments.forms.form_builder')
            </div>

            <div role="tabpanel" class="tab-pane fade in" id="roles">
               <div class="row cast">
                  <div class="col-xs-6"><b>Film</b></div>
                  <div class="col-xs-3"><b>Character</b></div>
                  <div class="col-xs-1"></div>
               </div>
               @foreach( $person->movies as $movie )
                  <div class="row cast">
                     <div class="col-xs-6">{{$movie->name}}</div>
                     <div class="col-xs-3">{{$movie->pivot->character}}</div>
                     <div class="col-xs-1"><i class="ft icon-minus"></i></div>
                  </div>
               @endforeach
            </div>

         </div>

         @include('segments.forms.submit')

         {!! Form::close() !!}

      </div>
      {{-- end of right column --}}

   </div>
   {{-- end of movie row --}}

@stop

@section('extensions')
   <script type="text/javascript" src="http://feather.aviary.com/js/feather.js"></script>
   {!! Html::script('js/edit_person.js') !!}
@stop
