
{{-- error class --}}
@section('errorClass')

@overwrite

{{-- error message --}}
@section('errorMessage')
   
@overwrite

{{-- label --}}
@section('label')

@overwrite

{{-- input --}}
@section('input')
   {!! Form::submit($label, ['class' => $class]) !!}
@overwrite

@include('segments.layout.padding')
@include('segments.forms.row')
