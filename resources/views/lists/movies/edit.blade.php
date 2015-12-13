@extends('app')


{{-- Page Title --}}
@section('title')
   Edit {{$movie->movie_name}}
@stop

{{-- Page Heading --}}
@section('heading')
   Edit Movie
@stop


{{-- Subnav --}}
@section('subnav-left')
   @include('segments.links.back_movie')
@stop

@section('subnav-right')
@stop


{{-- Main Body --}}
@section('content')

   {!! Form::model($movie, ['method'=>'Patch','url'=>'lists/movies/'.$movie->movie_id,'files' => true]) !!}
      @include('segments.forms.movie.form')
   {!! Form::close() !!}

@stop


{{-- Jquery --}}
@section('jquery')
   Waves.attach('.side-buttons .btn', ['waves-circle']);
   Waves.attach('.search-bar-container a, .nav li',['waves-button'])
   Waves.init();
@stop
