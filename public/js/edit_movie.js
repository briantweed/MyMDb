
var featherEditor = new Aviary.Feather({
   apiKey: $('input[name="_aviary"]').val(),
   tools: 'crop,resize,orientation',
   cropPresets: [
      ['Portrait','2:3'],
   ],
   displayImageSize: true,
   noCloseButton: false,
   onReady: function(){
      $('#movie-poster').addClass('img-responsive');
   },
   onSave: function(imageID, newUrl) {
      $.ajax({
         type: "POST",
         url: '/'+$('body').data('base')+'/aviary',
         dataType : "json",
         data: {
            _token: $('meta[name="_token"]').attr('content'),
            img: newUrl,
            src: $('#movie-poster').attr('src'),
            dest: "covers"
         }
     }).done(function(json) {
        console.log(json.err);
        $('#movie-poster').prop("src", json.src+"?"+json.time);
        featherEditor.close();
     });
   }
});

$(document).ready(function(){

   $('#movieTabs a').click(function (e) {
     e.preventDefault();
     $(this).tab('show');
  });

   // apply selctize to dropdowns
   $('select:not(#studio_id)').selectize();

   $('#studio_id').selectize({
      create: true,
      persist: false
   });

   // confirmation of movie deletion
   $('#delete_movie').click(function(){
      $('#delete_movie_form').submit();
   });

   $('.input-group.date').datepicker({
      format: "dd-mm-yyyy",
      orientation: "bottom auto",
      autoclose: true,
      todayHighlight: true,
      defaultViewDate: { year: 2000, month: 01, day: 01 }
   });

   // Add new tag
   $('#add_new_tag').click(function(){
      $.ajax({
         type: 'POST',
         url: '/'+$('body').data('base')+'/addtag',
         data: {
            _token: $('meta[name="_token"]').attr('content'),
            word: $('#new_tag').val(),
            id: $('#movie_id').val(),
         }
      }).done(function(html){
         switch(html) {
            case "exists":
               $('#new-tag-modal div.form-group').addClass('has-error');
               $('#new_tag_error').removeClass('hide');
               $('#new_tag_error_message').html('tag already exists');
               break;
            case "error":
               $('#new-tag-modal div.form-group').addClass('has-error');
               $('#new_tag_error').removeClass('hide');
               $('#new_tag_error_message').html('did not save');
               break;
            case "blank":
               $('#new-tag-modal div.form-group').addClass('has-error');
               $('#new_tag_error').removeClass('hide');
               $('#new_tag_error_message').html('enter a value');
               break;
            default:
               $('div.tags').html(html);
               $('#new-tag-modal').modal('hide');
         }
      });
   });

   $('[data-toggle="modal"]').click(function(){
      $('#new_tag').val("");
      $('#new-tag-modal div.form-group').removeClass('has-error');
      $('#new_tag_error').addClass('hide');
      $('#new_tag_error_message').html('');
   });
});

function launchEditor() {
   $('#movie-poster').removeClass('img-responsive');
   featherEditor.launch({
      image:  'movie-poster'
   });
   return false;
}
