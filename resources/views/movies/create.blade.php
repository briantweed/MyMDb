@extends('app')


{{-- Page Title --}}
@section('title')
   Add New Movie
@stop

{{-- Page Heading --}}
@section('heading')
   Add New Movie
@stop

{{-- Subnav --}}
@section('subnav-left')
   @include('segments.links.back')
@stop

{{-- Main Body --}}
@section('content')

   <div class="row movie">

      {{-- left column --}}
      <div class="{{env('LEFT_COLUMN')}}">

         {{-- cover image --}}
         <div class="row">
            <div class="col-xs-12">
               @if($values->image)
                  <img id="movie-poster" class="img-responsive img-rounded" src="{{$values->image}}">
               @else
                  <img id="movie-poster" class="img-responsive img-rounded" src="http://placehold.it/300x450/cccccc/ffffff?text=no+image">
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

         <div class="row">
            <div class="col-xs-12">
               <h1>@yield('heading')</h1>
            </div>
         </div>

         {!! Form::open(['url'=>'movies','files' => true]) !!}
            @include('segments.forms.form_builder')
            @include('segments.forms.submit')
         {!! Form::close() !!}

         {{-- padding --}}
         @include('segments.layout.padding')

      </div>
      {{-- end of right column --}}

   </div>
   {{-- end of movie row --}}

@stop

@section('extensions')
   {!! Html::script('js/create_movie.js') !!}
@stop
