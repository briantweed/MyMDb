@extends('app')


{{-- Page Title --}}
@section('title')
   Add New Movie
@stop

{{-- Subnav --}}
@section('subnav-left')
   &nbsp;
@stop

@section('subnav-right')

@stop


{{-- Main Body --}}
@section('content')

   {!! Form::open(['url'=>'lists/movies','files' => true]) !!}
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
         @include('segments.buttons.back')

         {{-- padding --}}
         @include('segments.layout.padding')

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
               <h2>Add New Movie</h2>
            </div>
         </div>

<?php
         foreach($fields as $field)
         {
            $errorClass = $errors->has($field->form_field) ? "has-error" : "";
            $errorMgs   = $errors->has($field->form_field) ? $errors->first($field->form_field) : "";
            switch($field->form_type)
            {
               case "text": ?>
                  @include('segments.forms.create_movie.text', ['errorClass'=> $errorClass, 'errorMgs'=> $errorMgs, 'label' => $field->form_label, 'field' => $field->form_field])
               <?php break;

               case "textarea": ?>
                  @include('segments.forms.create_movie.textarea', ['errorClass'=> $errorClass, 'errorMgs'=> $errorMgs, 'label' => $field->form_label, 'field' => $field->form_field])
               <?php break;

               case "range": ?>
                  @include('segments.forms.create_movie.range', ['errorClass'=> $errorClass, 'errorMgs'=> $errorMgs, 'label' => $field->form_label, 'field' => $field->form_field, 'from' => $field->form_range_from, 'to' => $field->form_range_to])
               <?php break;

               case "select":
                  $options = ${$field->form_options};
                  ?>
                  @include('segments.forms.create_movie.select', ['errorClass'=> $errorClass, 'errorMgs'=> $errorMgs, 'label' => $field->form_label, 'field' => $field->form_field, 'options'=> $options])
               <?php break;

               case "file": ?>
               @include('segments.forms.create_movie.file', ['errorClass'=> $errorClass, 'errorMgs'=> $errorMgs, 'label' => $field->form_label, 'field' => $field->form_field])
               <?php break;

               case "hidden": ?>
                  @include('segments.forms.create_movie.hidden', ['field' => $field->form_field, 'value'=> $field->form_default])
               <?php break;

               case "submit": ?>
                  @include('segments.forms.create_movie.submit', ['label' => $field->form_label, 'class'=> $field->form_class])
               <?php break;

               default: ?>
                  @include('segments.layout.padding')
               <?php break;
            }
         }
?>

         {{-- padding --}}
         @include('segments.layout.padding')

      </div>
      {{-- end of right column --}}

   </div>
   {{-- end of movie row --}}

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
