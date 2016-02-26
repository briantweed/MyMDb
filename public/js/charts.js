
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

   $('#decadeSelectFilter option[value="all"]').prop('selected', true);

      $.ajax({
         beforeSend: function() {
            runDecade = false
         },
         type: 'POST',
         url: 'movieDecadeCount',
         data: {
            _token: $('meta[name="_token"]').attr('content')
         }
      }).done(function(json) {
         var chart = new CanvasJS.Chart('yearChart', {
            axisY:{
               gridColor: '#ddd',
               gridThickness: 1
            },
            animationEnabled: true,
            animationDuration: 1500,
            toolTip: {
               enabled: false
            },
            data: [{
               type: 'column',
               dataPoints: json,
               indexLabelPlacement: "outside",
               indexLabelOrientation: "horizontal",
               indexLabel: "{y}",
               click: function(event) {
                  displayMoviesByYear(event.dataPoint.label, event.dataPoint.label+9);
                  $('#decadeSelectFilter option[value="'+event.dataPoint.label+'"]').prop('selected', true);
               }
            }]
         });
         chart.render();
      });
   
});
