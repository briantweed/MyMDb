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

@section('extensions')
   {!! Html::script('js/feather.js') !!}
@stop

{{-- Jquery --}}
@section('jquery')
   Waves.attach('.side-buttons .btn', ['waves-circle']);
   Waves.attach('.search-bar-container a, .nav li',['waves-button'])
   Waves.init();

   var featherEditor = new Aviary.Feather({
   	apiKey: 'b7b206d4-0932-4bfa-b21e-a4ad8b87bf56',
   	tools: 'crop,orientation',
      initTool: 'crop',
      cropPresets: [
         ['Portrait','2:3']
      ],
      displayImageSize: true,
      noCloseButton: false,
   	onSave: function(imageID, newUrl) {
         {{-- $.ajax({
            type: "POST",
            url: "../../../resources/views/segments/ajax/aviary.php",
            dataType : "json",
            data: {
               img: newUrl,
               src: $('#movie-poster').attr('src')
            }
        }).done( function( json ) {
           $('#movie-poster').attr( "src", json.src );
           alert( json.msg );
           featherEditor.close();
        }); --}}
        featherEditor.close();
   	}
   });

   {{-- change from image to src as onscreen formatting seem to apply --}}
   function launchEditor() {
   	featherEditor.launch({
   		image:  'movie-poster'
   	});
   	return false;
   }

@stop
