
<?php
   foreach($fields as $field)
   {
      $errorClass = $errors->has($field->field) ? "has-error" : "";
      $errorMgs = $errors->has($field->field) ? $errors->first($field->field) : "";
      $value = isset($values) ? ( isset($values->{$field->field}) ? $values->{$field->field} : "" ) : "";
      $info = isset($infos) ? ( isset($infos->{$field->field}) ? $infos->{$field->field} : "" ) : "";
      switch($field->type)
      {
         case "text": ?>
            @include('segments.forms.text', ['errorClass'=> $errorClass, 'errorMgs'=> $errorMgs, 'label' => $field->label, 'required' => $field->required, 'field' => $field->field, 'value' => $value])
         <?php break;

         case "date": ?>
            @include('segments.forms.date', ['errorClass'=> $errorClass, 'errorMgs'=> $errorMgs, 'label' => $field->label, 'required' => $field->required, 'field' => $field->field, 'value' => $value])
         <?php break;

         case "textarea": ?>
            @include('segments.forms.textarea', ['errorClass'=> $errorClass, 'errorMgs'=> $errorMgs, 'label' => $field->label, 'required' => $field->required, 'field' => $field->field, 'value' => $value])
         <?php break;

         case "range": ?>
            @include('segments.forms.range', ['errorClass'=> $errorClass, 'errorMgs'=> $errorMgs, 'label' => $field->label, 'required' => $field->required, 'field' => $field->field, 'from' => $field->range_from, 'to' => $field->range_to, 'value' => $value])
         <?php break;

         case "select":
            $list = $field->options != "" ? $options->{$field->options} : [] ?>
            @include('segments.forms.select', ['errorClass'=> $errorClass, 'errorMgs'=> $errorMgs, 'label' => $field->label, 'required' => $field->required, 'field' => $field->field, 'list'=> $list, 'value' => $value, 'info' => $info])
         <?php break;

         case "checkbox": ?>
         @include('segments.forms.checkbox', ['errorClass'=> $errorClass, 'errorMgs'=> $errorMgs, 'label' => $field->label, 'required' => $field->required, 'field' => $field->field, 'value' => $value])
         <?php break;

         case "file": ?>
            @include('segments.forms.file', ['errorClass'=> $errorClass, 'errorMgs'=> $errorMgs, 'label' => $field->label, 'required' => $field->required, 'field' => $field->field, 'value' => $value, 'preview' => $field->default])
         <?php break;

         case "hidden": ?>
            @include('segments.forms.hidden', ['field' => $field->field, 'value'=> $field->default, 'value' => $value])
         <?php break;

         default: ?>
            @include('segments.layout.padding')
         <?php break;
      }
   }
?>
