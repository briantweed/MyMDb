$(document).ready(function(){

   $('.input-group.date').datepicker({
      format: "dd-mm-yyyy",
      orientation: "bottom auto",
      autoclose: true,
      todayHighlight: true,
      defaultViewDate: { year: 2000, month: 01, day: 01 }
   });

});
