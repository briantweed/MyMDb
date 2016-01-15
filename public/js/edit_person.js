
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
         url: '/MyMDb/public/aviary',
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
      todayHighlight: true
      // defaultViewDate: { year: 2000, month: 01, day: 01 }
   });

   $('#movie_list').selectize();

   $('#delete_person').click(function() {
      $('#delete_person_form').submit();
   });

   $('.modal').on('hide.bs.modal', function(e) {
      $('.modal .form-control').val('');
      setMovieId('');
      clearErrorMessages();
      clearModalSelectize();
   });

   $('#add_new_role').click(function() {
      $.ajax({
         type: 'POST',
         url: '/MyMDb/public/addNewRole',
         data: {
            _token: $('meta[name="_token"]').attr('content'),
            person: $('#person_id').val(),
            movie: $('#movie_id').val(),
            character: $('#character_name').val(),
         }
      }).done(function(html){
         var selectize = $("#movie_list")[0].selectize;
         selectize.removeOption($('#person_id').val());
         $('#role-list').html(html);
         $('.modal').modal('hide');
      });
   });

   $('#edit_new_cast').click(function() {
      $.ajax({
         type: 'POST',
         url: '/MyMDb/public/editRole',
         data: {
            _token: $('meta[name="_token"]').attr('content'),
            person: $('#person_id').val(),
            movie: $('#movie_id').val(),
            character: $('#edit_character_name').val(),
         }
      }).done(function(html){
         $('#role-list').html(html);
         $('.modal').modal('hide');
      });
   });

   $('#remove_role').click(function(){
      $.ajax({
         type: 'POST',
         url: '/MyMDb/public/removeRole',
         data: {
            _token: $('meta[name="_token"]').attr('content'),
            person: $('#person_id').val(),
            movie: $('#movie_id').val(),
         }
      }).done(function(html){
         $('#role-list').html(html);
         $('.modal').modal('hide');
      });
   });

});

function launchEditor() {
   $('#person-poster').removeClass('img-responsive');
   featherEditor.launch({
      image:  'person-poster'
   });
   return false;
}

function addMovieRole() {
   $('#new-role-modal').modal();
}

function editMovieRole(castID) {
   $.ajax({
      type: 'POST',
      url: '/MyMDb/public/getCastDetails',
      data: {
         _token: $('meta[name="_token"]').attr('content'),
         cast_id: castID
      }
   }).done(function(json){
      $('#edit_character_name').val($('<textarea/>').html(json.character).text());
      $('#movie_id').val(json.movie_id);
      $('#edit-cast-modal').modal();
   });
}

function removeMovieRole(id) {
   setMovieId(id);
   $('#remove-role-modal').modal();
}

function setMovieId(id) {
   $('#movie_id').val(id);
}

function clearModalSelectize() {
   var $select = $('.modal select').selectize();
   $select.each(function(index, value) {
      var control = $select[index].selectize;
      control.clear();
   });
}

function clearErrorMessages() {
   $('div.form-group').removeClass('has-error');
   $('[id$=_error]').addClass('hide');
   $('[id$=error_message]').html('');
}
