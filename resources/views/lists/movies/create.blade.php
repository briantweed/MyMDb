@extends('app')


{{-- Page Title --}}
@section('title')
   Add New Movie
@stop


{{-- Main Body --}}
@section('content')

   {!! Form::open(['url'=>'lists/movies']) !!}
   <div class="row movie">

      {{-- left column --}}
      <div class="col-xs-12 col-sm-4 col-md-4 col-lg-3">
         {{-- cover image --}}
         <div class="row">
            <div class="col-xs-12">
               <img class="img-responsive img-rounded" src="http://placehold.it/300x450/cccccc/ffffff?text=add+image">
            </div>
         </div>

         <hr/>

         {{-- back button --}}
         <div class="row">
            <div class="col-xs-12">
               <a class="btn btn-info btn-lg btn-block" href="{{ action('MovieController@index') }}"><i class="ft icon-back-arrow"></i> back</a>
            </div>
         </div>

         {{-- padding --}}
         <div class="row"><div class="col-xs-12">&nbsp;</div></div>

      </div> {{-- end of left column --}}

      {{-- right column --}}
      <div class="col-xs-12 col-sm-8 col-md-8 col-lg-offset-1 col-lg-8">

         {{-- film title --}}
         <div class="row">
            <div class="col-xs-6 col-lg-3"><b>{!! Form::label('movie_name', 'Title') !!}</b></div>
            <div class="col-xs-6 col-lg-9">{!! Form::text('movie_name','',['class'=>'form-control']) !!}</div>
         </div>


         {{-- sprt title --}}
         <div class="row">
            <div class="col-xs-6 col-lg-3"><b>{!! Form::label('movie_sort_name', 'Sort Name') !!}</b></div>
            <div class="col-xs-6 col-lg-9">{!! Form::text('movie_sort_name','',['class'=>'form-control']) !!}</div>
         </div>


         {{-- description --}}
         <div class="row">
            <div class="col-xs-6 col-lg-3"><b>{!! Form::label('movie_bio', 'Description') !!}</b></div>
            <div class="col-xs-6 col-lg-9">{!! Form::textarea('movie_bio','',['class'=>'form-control']); !!}</div>
         </div>


         {{-- star rating --}}
         <div class="row">
            <div class="col-xs-6 col-lg-3"><b>{!! Form::label('movie_my_rating', 'Rating') !!}</b></div>
            <div class="col-xs-6 col-lg-9">{!! Form::selectRange('movie_my_rating', 1, 10,'',['class'=>'form-control']); !!}</div>
         </div>

         {{-- released --}}
         <div class="row">
            <div class="col-xs-6 col-lg-3"><b>{!! Form::label('movie_release_date', 'Released') !!}</b></div>
            <div class="col-xs-6 col-lg-9">{!! Form::text('movie_release_date','',['class'=>'form-control']) !!}</div>
         </div>

         {{-- running time --}}
         <div class="row">
            <div class="col-xs-6 col-lg-3"><b>{!! Form::label('movie_running_time', 'Running Time') !!}</b></div>
            <div class="col-xs-6 col-lg-9">{!! Form::text('movie_running_time','',['class'=>'form-control']) !!}</div>
         </div>

         {{-- certifiate --}}
         <div class="row">
            <div class="col-xs-6 col-lg-3"><b>{!! Form::label('movie_certificate_id', 'Certificate') !!}</b></div>
            <div class="col-xs-6 col-lg-9">{!! Form::select('movie_certificate_id', $certificates, '', ['class'=>'form-control']) !!}</div>
         </div>

         {{-- format --}}
         <div class="row">
            <div class="col-xs-6 col-lg-3"><b>{!! Form::label('movie_format_id', 'Format') !!}</b></div>
            <div class="col-xs-6 col-lg-9">{!! Form::select('movie_format_id', $formats, '', ['class'=>'form-control']) !!}</div>
         </div>

         {{-- studio --}}
         <div class="row">
            <div class="col-xs-6 col-lg-3"><b>{!! Form::label('movie_studio_id', 'Studio') !!}</b></div>
            <div class="col-xs-6 col-lg-9">{!! Form::select('movie_studio_id', $studios, '', ['class'=>'form-control']) !!}</div>
         </div>

         {{-- padding --}}
         <div class="row"><div class="col-xs-12">&nbsp;</div></div>

         <div class="row">
            <div class="col-xs-6 col-lg-offset-9 col-lg-3">
               {!! Form::submit('save', ['class' => 'btn btn-primary form-control']) !!}
            </div>
         </div>

         {{-- padding --}}
         <div class="row"><div class="col-xs-12">&nbsp;</div></div>

      </div> {{-- end of right column --}}

   </div> {{-- end of movie row --}}
   {!! Form::close() !!}
@stop


{{-- Jquery --}}
@section('jquery')

   <script type="text/javascript" >
      $(document).ready( function() {
         $('[data-toggle="tooltip"]').tooltip();
      });
   </script>

@stop
