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
   &nbsp;
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

@stop
