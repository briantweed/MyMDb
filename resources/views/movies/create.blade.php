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

   <div id="create-movie-form-div" class="row movie">

      @include('movies.create_content');

   </div>

@stop

@section('extensions')
   {!! Html::script('js/create_movie.js') !!}
@stop
