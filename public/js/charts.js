
$(document).ready(function() {

   $('select:not(#movie_studio_id)').selectize();

   $('#movie_studio_id').selectize({
      create: true,
      persist: false
   });

   $('.input-group.date').datepicker({
      format: "dd-mm-yyyy",
      orientation: "bottom auto",
      autoclose: true,
      todayHighlight: true
   });

});
