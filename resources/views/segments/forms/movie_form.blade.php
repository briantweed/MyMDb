
<?php
      foreach($fields as $field)
      {
         $errorClass = $errors->has($field->form_field) ? "has-error" : "";
         $errorMgs = $errors->has($field->form_field) ? $errors->first($field->form_field) : "";
         $value = isset($movie->{$field->form_field}) ? $movie->{$field->form_field} : "";
         switch($field->form_type)
         {
            case "text": ?>
               @include('segments.forms.text', ['errorClass'=> $errorClass, 'errorMgs'=> $errorMgs, 'label' => $field->form_label, 'required' => $field->form_required, 'field' => $field->form_field, 'value' => $value])
            <?php break;

            case "date": ?>
               @include('segments.forms.date', ['errorClass'=> $errorClass, 'errorMgs'=> $errorMgs, 'label' => $field->form_label, 'required' => $field->form_required, 'field' => $field->form_field, 'value' => date("d-m-Y", strtotime($value))])
            <?php break;

            case "textarea": ?>
               @include('segments.forms.textarea', ['errorClass'=> $errorClass, 'errorMgs'=> $errorMgs, 'label' => $field->form_label, 'required' => $field->form_required, 'field' => $field->form_field, 'value' => $value])
            <?php break;

            case "range": ?>
               @include('segments.forms.range', ['errorClass'=> $errorClass, 'errorMgs'=> $errorMgs, 'label' => $field->form_label, 'required' => $field->form_required, 'field' => $field->form_field, 'from' => $field->form_range_from, 'to' => $field->form_range_to, 'value' => $value])
            <?php break;

            case "select":
               $options = $field->form_options != "" ? ${$field->form_options} : [] ?>
               @include('segments.forms.select', ['errorClass'=> $errorClass, 'errorMgs'=> $errorMgs, 'label' => $field->form_label, 'required' => $field->form_required, 'field' => $field->form_field, 'options'=> $options, 'value' => $value])
            <?php break;

            case "checkbox": ?>
            @include('segments.forms.checkbox', ['errorClass'=> $errorClass, 'errorMgs'=> $errorMgs, 'label' => $field->form_label, 'required' => $field->form_required, 'field' => $field->form_field, 'value' => $value])
            <?php break;

            case "file": ?>
               @include('segments.forms.file', ['errorClass'=> $errorClass, 'errorMgs'=> $errorMgs, 'label' => $field->form_label, 'required' => $field->form_required, 'field' => $field->form_field, 'value' => $value])
            <?php break;

            case "hidden": ?>
               @include('segments.forms.hidden', ['field' => $field->form_field, 'value'=> $field->form_default, 'value' => $value])
            <?php break;

            case "submit": ?>
               @include('segments.forms.submit', ['label' => $field->form_label, 'class'=> $field->form_class])
            <?php break;

            default: ?>
               @include('segments.layout.padding')
            <?php break;
         }
      }
?>
