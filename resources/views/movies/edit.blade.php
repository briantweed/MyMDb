@extends('app')


{{-- Page Title --}}
@section('title')
   Edit {{$movie->movie_name}}
@stop

{{-- Page Heading --}}
@section('heading')
   Edit : {{$movie->movie_name}}
@stop


{{-- Subnav --}}
@section('subnav-left')
   @include('segments.links.back')
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
                     <img class="img-responsive img-rounded" src="http://placehold.it/300x450/cccccc/ffffff?text={{$movie->cover}}" alt="{{$movie->movie_name}}" />
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

         <div class="row">
            <div class="col-xs-12">
               <h1>@yield('heading')</h1>
            </div>
         </div>

         {!! Form::model($movie, ['method'=>'Patch','url'=>'movies/'.$movie->movie_id,'files' => true]) !!}
            <input type="hidden" value="{{env('AVIARY_KEY')}}" name="_aviary" />
            @include('segments.forms.movie_form')
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
   {!! Html::script('js/edit_movie.js') !!}
@stop
