
var featherEditor = new Aviary.Feather({
   apiKey: $('input[name="_aviary"]').val(),
   tools: 'crop,resize,orientation',
   cropPresets: [
      ['Portrait','2:3'],
   ],
   displayImageSize: true,
   noCloseButton: false,
   onReady: function(){
      $('#person-poster').addClass('img-responsive');
   },
   onSave: function(imageID, newUrl) {
      $.ajax({
         type: "POST",
         url: '/'+$('body').data('base')+'/aviary',
         dataType : "json",
         data: {
            _token: $('meta[name="_token"]').attr('content'),
            img: newUrl,
            src: $('#person-poster').attr('src'),
            dest: "people"
         }
     }).done(function(json) {
        console.log(json.err);
        $('#person-poster').prop("src", json.src+"?"+json.time);
        featherEditor.close();
     });
   }
});

$(document).ready(function(){

   $('#movieTabs a').click(function (e) {
     e.preventDefault();
     $(this).tab('show');
  });

   // datepicker
   $('.input-group.date').datepicker({
      format: "dd-mm-yyyy",
      orientation: "bottom auto",
      autoclose: true,
      todayHighlight: true,
      defaultViewDate: { year: 2000, month: 01, day: 01 }
   });

});

function launchEditor() {
   $('#person-poster').removeClass('img-responsive');
   featherEditor.launch({
      image:  'person-poster'
   });
   return false;
}
