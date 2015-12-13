<div class="row movie">

   {{-- left column --}}
   <div class="col-xs-12 col-sm-4 col-md-4 col-lg-3">

      {{-- cover image --}}
      <div class="row">
         <div class="col-xs-12">
            @if(isset($movie->cover))
               @if($movie->cover_count == 1)
                  <img class="img-responsive img-rounded" src="http://placehold.it/300x450/cccccc/ffffff?text={{$movie->cover}}" alt="{{$movie->movie_name}}" />
               @else
                  <img class="img-responsive img-rounded" src="{{asset('images/covers/')}}/{{$movie->cover}}" alt="{{$movie->movie_name}}" />
               @endif
            @else
               <img class="img-responsive img-rounded" src="http://placehold.it/300x450/cccccc/ffffff?text=no+image">
            @endif
         </div>
      </div>

      <hr/>

      <div class="side-buttons">

         {{-- back button --}}
         @include('segments.buttons.back')

         {{-- padding --}}
         @include('segments.layout.padding')

      </div>

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
            <h1>@yield('heading')</h1>
         </div>
      </div>

<?php
      foreach($fields as $field)
      {
         $errorClass = $errors->has($field->form_field) ? "has-error" : "";
         $errorMgs = $errors->has($field->form_field) ? $errors->first($field->form_field) : "";
         $value = isset($movie->{$field->form_field}) ? $movie->{$field->form_field} : "";
         switch($field->form_type)
         {
            case "text": ?>
               @include('segments.forms.movie.text', ['errorClass'=> $errorClass, 'errorMgs'=> $errorMgs, 'label' => $field->form_label, 'field' => $field->form_field, 'value' => $value])
            <?php break;

            case "textarea": ?>
               @include('segments.forms.movie.textarea', ['errorClass'=> $errorClass, 'errorMgs'=> $errorMgs, 'label' => $field->form_label, 'field' => $field->form_field, 'value' => $value])
            <?php break;

            case "range": ?>
               @include('segments.forms.movie.range', ['errorClass'=> $errorClass, 'errorMgs'=> $errorMgs, 'label' => $field->form_label, 'field' => $field->form_field, 'from' => $field->form_range_from, 'to' => $field->form_range_to, 'value' => $value])
            <?php break;

            case "select":
               $options = ${$field->form_options}; ?>
               @include('segments.forms.movie.select', ['errorClass'=> $errorClass, 'errorMgs'=> $errorMgs, 'label' => $field->form_label, 'field' => $field->form_field, 'options'=> $options, 'value' => $value])
            <?php break;

            case "checkbox": ?>
            @include('segments.forms.movie.checkbox', ['errorClass'=> $errorClass, 'errorMgs'=> $errorMgs, 'label' => $field->form_label, 'field' => $field->form_field, 'value' => $value])
            <?php break;

            case "file": ?>
               @include('segments.forms.movie.file', ['errorClass'=> $errorClass, 'errorMgs'=> $errorMgs, 'label' => $field->form_label, 'field' => $field->form_field, 'value' => $value])
            <?php break;

            case "hidden": ?>
               @include('segments.forms.movie.hidden', ['field' => $field->form_field, 'value'=> $field->form_default, 'value' => $value])
            <?php break;

            case "submit": ?>
               @include('segments.forms.movie.submit', ['label' => $field->form_label, 'class'=> $field->form_class])
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
