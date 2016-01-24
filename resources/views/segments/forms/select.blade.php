
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
   @if($required) <span class="required">*</span> @endif
   @if($info)
      <span data-toggle='tooltip' data-placement='top' title='{{$info}}'>
         <i class="ft icon-info"></i>
      </span>
   @endif

@overwrite

{{-- input --}}
@section('input')
   {!! Form::select($field, array('' => 'select ...') + $list, $value, ['class'=>'form-control']) !!}
@overwrite

{{-- input extra classes --}}
@section('input_class')

@overwrite

@include('segments.forms.row')
