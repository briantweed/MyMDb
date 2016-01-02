@extends('app')


{{-- Page Title --}}
@section('title')
   Add New Person
@stop

{{-- Page Heading --}}
@section('heading')
   Add New Person
@stop

{{-- Subnav --}}
@section('subnav-left')
   @include('segments.links.back')
@stop

@section('subnav-right')

@stop


{{-- Main Body --}}
@section('content')

   <div class="row movie">

      {{-- left column --}}
      <div class="col-xs-12 col-sm-4 col-md-4 col-lg-3">

         {{-- cover image --}}
         <div class="row">
            <div class="col-xs-12">
               <img id="movie-poster" class="img-responsive img-rounded" src="http://placehold.it/300x450/cccccc/ffffff?text=no+image">
            </div>

         </div>

         <div class="side-buttons">

            {{-- delete button --}}
            @if( Request::is('movies/*/edit'))
               <hr/>
               @include('segments.buttons.delete')
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

         @if(session('status'))
            <div class="col-xs-12 alert alert-dismissible alert-danger">
               <button type="button" class="close" >
                  <span aria-hidden="true">&times;</span>
               </button>
               {{ session('status') }}
            </div>
         @endif

         <div class="row">
            <div class="col-xs-12">
               <h1>@yield('heading')</h1>
            </div>
         </div>

         {!! Form::open(['url'=>'people','files' => true]) !!}
            <input type="hidden" value="{{env('ROTTEN_KEY')}}" name="_tomatoes" />
            @include('segments.forms.form_builder')
         {!! Form::close() !!}

         @include('segments.layout.padding')

      </div>
      {{-- end of right column --}}

   </div>
   {{-- end of movie row --}}

@stop

@section('extensions')
   {!! Html::script('js/create_person.js') !!}
@stop
