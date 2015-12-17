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
   @include('segments.links.back_movie')
   @include('segments.links.add_movie')
@stop

@section('subnav-right')
   @include('segments.links.show_details')
@stop


{{-- Main Body --}}
@section('content')
   <meta name="_token" content="{!! csrf_token() !!}" />

   @if (session('status'))
       <div class="alert alert-success">
           {{ session('status') }}
       </div>
   @endif

   <div id="movie-details" class="alert alert-warning" style="display:none">
      ['{{htmlentities(str_replace(array('\'', '"'), array('&#039;', '&#034;'),$movie->movie_name))}}', '{{htmlentities(str_replace(array('\'', '"'), array('&#039;', '&#034;'),$movie->movie_sort_name))}}', '{{$movie->movie_release_date}}', '{{$movie->cover}}', '{{$movie->movie_running_time}}','{{$movie->movie_my_rating}}', '{{$movie->movie_certificate_id}}', '{{$movie->movie_format_id}}','{{$movie->movie_studio_id}}', '{{htmlentities(str_replace(array('\'', '"'), array('&#039;', '&#034;'),$movie->movie_bio))}}'],
   </div>

   {!! Form::model($movie, ['method'=>'Patch','url'=>'movies/'.$movie->movie_id,'files' => true]) !!}
      @include('segments.forms.movie.form')
   {!! Form::close() !!}
@stop

@section('extensions')
   <script type="text/javascript" src="http://feather.aviary.com/js/feather.js"></script>
   {!! Html::script('js/pages/edit_movie.js') !!}
@stop
