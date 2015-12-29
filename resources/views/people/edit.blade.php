@extends('app')


{{-- Page Title --}}
@section('title')
   Edit {{$person->person_forename}} {{$person->person_surname}}
@stop

{{-- Page Heading --}}
@section('heading')
   Edit : {{$person->person_forename}} {{$person->person_surname}}
@stop


{{-- Subnav --}}
@section('subnav-left')
   @include('segments.links.back')
   @include('segments.links.add_person')
@stop

@section('subnav-right')
   @include('segments.links.show_details')
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

   <div id="movie-details" class="alert alert-warning" style="display:none">
      ['{{$person->person_forename}}','{{$person->person_surname}}','{{$person->person_birthday}}','{{$person->person_image_path}}','{{$person->person_bio}}'],
   </div>

   <div class="row movie">

      {{-- left column --}}
      <div class="col-xs-12 col-sm-4 col-md-4 col-lg-3">

         {{-- cover image --}}
         <div class="row">
            <div class="col-xs-12">
               @if(isset($person->image))
                  @if($person->cover_count == 1)
                     <img class="img-responsive img-rounded" src="http://placehold.it/300x450/cccccc/ffffff?text={{$person->image}}" alt="{{$person->image}}" />
                  @else
                     <img id="movie-poster" class="img-responsive img-rounded" src="{{asset($person->image)}}" />
                     @if( Request::is('people/*/edit'))
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
            @if( Request::is('people/*/edit'))
               <hr/>

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

         <div class="row">
            <div class="col-xs-12">
               <h1>@yield('heading')</h1>
            </div>
         </div>

         {!! Form::model($person, ['method'=>'Patch','url'=>'people/'.$person->person_id,'files' => true]) !!}
            <input type="hidden" value="{{env('AVIARY_KEY')}}" name="_aviary" />
            @include('segments.forms.person_form')
         {!! Form::close() !!}


         {{-- padding --}}
         @include('segments.layout.padding')

      </div>
      {{-- end of right column --}}

   </div>
   {{-- end of movie row --}}

@stop

@section('extensions')
   <script type="text/javascript" src="http://feather.aviary.com/js/feather.js"></script>
   {{-- {!! Html::script('js/edit_movie.js') !!} --}}
@stop
