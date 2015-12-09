@extends('app')


{{-- Page Title --}}
@section('title')
   {{-- {{$movie->name}} --}}
@stop


{{-- Main Body --}}
@section('content')

   {!! Form::open() !!}
   <div class="row movie">

      {{-- left column --}}
      <div class="col-xs-12 col-sm-4 col-md-4 col-lg-3">
         {{-- cover image --}}
         <div class="row">
            <div class="col-xs-12">
               <img class="img-responsive img-rounded" src="http://placehold.it/300x450/cccccc/336699?text=add+image">
            </div>
         </div>

         <hr/>

         {{-- back button --}}
         <div class="row">
            <div class="col-xs-12">
               <a class="btn btn-info btn-lg btn-block" href="{{ action('MovieController@index') }}"><i class="ft icon-back-arrow"></i> back</a>
            </div>
         </div>

         {{-- edit button --}}
         <div class="row">
            <div class="col-xs-12">
               <a class="btn btn-success btn-lg btn-block" href="javascript:void(0);"><i class="ft icon-edit"></i> edit</a>
            </div>
         </div>

         {{-- view button --}}
         <div class="row">
            <div class="col-xs-12">
               <a class="btn btn-warning btn-lg btn-block" href="javascript:void(0);"><i class="ft icon-view"></i> watching</a>
            </div>
         </div>

         <hr/>

         {{-- delete button --}}
         <div class="row">
            <div class="col-xs-12">
               <a class="btn btn-danger btn-lg btn-block" href="javascript:void(0);"><i class="ft icon-delete"></i> delete</a>
            </div>
         </div>

         {{-- padding --}}
         <div class="row"><div class="col-xs-12">&nbsp;</div></div>

      </div> {{-- end of left column --}}

      {{-- right column --}}
      <div class="col-xs-12 col-sm-8 col-md-8 col-lg-offset-1 col-lg-8">

         {{-- film title --}}
         <div class="row">
            <div class="col-xs-12"><h1>...<br/></h1></div>
         </div>

         {{-- description --}}
         <div class="row">
            <div class="col-xs-12"><p>...</p></div>
         </div>

         {{-- star rating --}}
         <div class="row">
            <div class="col-xs-6 col-lg-3"><b>{!! Form::label('rating', 'Rating') !!}</b></div>
            <div class="col-xs-6 col-lg-9">{!! Form::selectRange('number', 1, 10,'',['class'=>'form-control']); !!}</div>
         </div>

         {{-- released --}}
         <div class="row">
            <div class="col-xs-6 col-lg-3"><b>{!! Form::label('released', 'Released') !!}</b></div>
            <div class="col-xs-6 col-lg-9">{!! Form::text('released','',['class'=>'form-control']) !!}</div>
         </div>

         {{-- running time --}}
         <div class="row">
            <div class="col-xs-6 col-lg-3"><b>{!! Form::label('running_time', 'Running Time') !!}</b></div>
            <div class="col-xs-6 col-lg-9">{!! Form::text('running_time','',['class'=>'form-control']) !!}</div>
         </div>

         {{-- certifiate --}}
         <div class="row">
            <div class="col-xs-6 col-lg-3"><b>{!! Form::label('certificate', 'Certificate') !!}</b></div>
            <div class="col-xs-6 col-lg-9">{!! Form::text('certificate','',['class'=>'form-control']) !!}</div>
         </div>

         {{-- format --}}
         <div class="row">
            <div class="col-xs-6 col-lg-3"><b>{!! Form::label('format', 'Format') !!}</b></div>
            <div class="col-xs-6 col-lg-9">{!! Form::text('format','',['class'=>'form-control']) !!}</div>
         </div>

         {{-- studio --}}
         <div class="row">
            <div class="col-xs-6 col-lg-3"><b>{!! Form::label('studio', 'Studio') !!}</b></div>
            <div class="col-xs-6 col-lg-9">{!! Form::select('studio', array('L' => 'Large', 'S' => 'Small'),'S',['class'=>'form-control'] ) !!}</div>
         </div>

         {{-- genres --}}

            <div class="row">
               <div class="col-xs-6 col-lg-3">
                  <b>{!! Form::label('genre', 'Genres') !!}</b>
               </div>
               {{-- genre list --}}
               <div class="col-xs-6 col-lg-9">
                  {!! Form::select('genre', array('L' => 'Large', 'S' => 'Small'),'S',['class'=>'form-control'] ) !!}
               </div>
            </div>


         {{-- tags --}}

            <div class="row">
               <div class="col-xs-6 col-lg-3">
                  <b>{!! Form::label('tags', 'Tags') !!}</b>
               </div>
               {{-- tag list --}}
               <div class="col-xs-6 col-lg-9">
                  {!! Form::select('tags', array('L' => 'Large', 'S' => 'Small'),'L',['class'=>'form-control'] ) !!}
               </div>
            </div>


         {{-- last watched --}}

            <div class="row">
               <div class="col-xs-6 col-lg-3">
                  <b>{!! Form::label('viewed', 'Last Viewed') !!}</b>
               </div>

               <div class="col-xs-6 col-lg-9">
                  {!! Form::text('viewed','',['class'=>'form-control']) !!}
               </div>
            </div>


         {{-- crew --}}

            {{-- padding --}}
            <div class="row"><div class="col-xs-12">&nbsp;</div></div>

            <div class="row">
               <div class="col-xs-12"><h3>Crew</h3></div>
            </div>

               <div class="row">
                  {{-- actor --}}
                  <div class="col-xs-6 col-lg-3">
                     ...
                  </div>
                  {{-- character --}}
                  <div class="col-xs-6 col-lg-9">
                     ...
                  </div>
               </div>


         {{-- cast --}}

            {{-- padding --}}
            <div class="row"><div class="col-xs-12">&nbsp;</div></div>

            <div class="row">
               <div class="col-xs-12"><h3>Cast</h3></div>
            </div>

               <div class="row">
                  {{-- actor --}}
                  <div class="col-xs-6 col-lg-3">
                     ...
                  </div>
                  {{-- character --}}
                  <div class="col-xs-6 col-lg-9">
                     <em>...</em>
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
