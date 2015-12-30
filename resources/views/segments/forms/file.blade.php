
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
   {!! Form::label($field, $label) !!} @if($required) <span class="required">*</span> @endif
@overwrite

{{-- input --}}
@section('input')
   <input type="file" id="{{$field}}" name="{{$field}}" onchange="previewImage(this,'movie-poster')" />
@overwrite

{{-- input extra classes --}}
@section('input_class')

@overwrite

@include('segments.forms.row')
