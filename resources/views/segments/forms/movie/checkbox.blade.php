
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
   {!! Form::checkbox($field, '1', $value, ['id' => $field]) !!}
   {!! Form::label($field, $label) !!}
@overwrite

{{-- input extra classes --}}
@section('input_class')
   switch round
@overwrite

@include('segments.forms.row')
