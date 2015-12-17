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
   <meta name="_token" content="{!! csrf_token() !!}" />
   {!! Form::model($movie, ['method'=>'Patch','url'=>'movies/'.$movie->movie_id,'files' => true]) !!}
      @include('segments.forms.movie.form')
   {!! Form::close() !!}
@stop

@section('extensions')
   <script type="text/javascript" src="http://feather.aviary.com/js/feather.js"></script>
   {!! Html::script('js/pages/edit_movie.js') !!}
@stop
