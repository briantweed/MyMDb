
<?php
   $to = $to == "9999" ? date("Y") : $to;
   $range = [];
   for($x=$from; $x<=$to; $x++)
   {
      $range[$x] = $x;
   }
?>


{{-- error class --}}
@section('errorClass')
   {{$errorClass}}
@overwrite

{{-- error message --}}
@section('errorMessage')
   @if($errorMgs != "")
      @include('segments.forms.errors')
   @endif
@overwrite

{{-- label --}}
@section('label')
   {!! Form::label($field, $label) !!}
@overwrite

{{-- input --}}
@section('input')
   {!! Form::select($field, array('' => 'select ...') + $range, $value, ['class'=>'form-control']) !!}
@overwrite

@include('segments.forms.row')
