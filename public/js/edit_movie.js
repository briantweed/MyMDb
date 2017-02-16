
var person_type = "cast";

var featherEditor = new Aviary.Feather({
   apiKey: $('input[name="_aviary"]').val(),
   tools: 'crop,resize,orientation,enhance,effects,brightness,contrast',
   cropPresets: [
      ['Portrait','2:3'],
      ['Custom', 'Custom'],
   ],
   displayImageSize: true,
   noCloseButton: false,
   onReady: function(){
      $('#movie-poster').addClass('img-responsive');
   },
   onSave: function(imageID, newUrl) {
      $.ajax({
         type: "POST",
         url: '/aviary',
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

   initializeDatePicker();

   $('#movieTabs a').click(function (e) {
     e.preventDefault();
     $(this).tab('show');
  });

   $('#studio_id').selectize({
      create: true,
      persist: false
   });

   $('#cast_list').selectize({
      persist: false,
      create: function(input, callback){
         getNewPersonForm(input, 'cast');
         callback({
            text: input
         });
      },
   });

   $('#crew_list').selectize({
      persist: false,
      create: function(input, callback){
         getNewPersonForm(input, 'crew');
         callback({
            text: input
         });
      },
   });

   $('select').selectize();

   $('#delete_movie').click(function() {
      $('#delete_movie_form').submit();
   });

   $('.modal').on('hide.bs.modal', function(e) {
      $('.modal .form-control').val('');
      setPersonId('');
      setRowId('');
      clearCheckboxes();
      clearErrorMessages();
      clearModalSelectize();
   });

   $('#add_new_cast').click(function() {
      $.ajax({
         type: 'POST',
         url: '/addNewCast',
         data: {
            _token: $('meta[name="_token"]').attr('content'),
            person: $('#person_id').val(),
            movie: $('#movie_id').val(),
            character: $('#character_name').val(),
            star: $('#main_star').is(':checked') ? 1 : 0,
         }
      }).done(function(html){
         var selectize = $("#cast_list")[0].selectize;
         selectize.removeOption($('#person_id').val());
         $('#existing-cast-list').html(html);
         $('.modal').modal('hide');
      });
   });

   $('#edit_new_cast').click(function() {
      $.ajax({
         type: 'POST',
         url: '/editCastMember',
         data: {
            _token: $('meta[name="_token"]').attr('content'),
            person: $('#person_id').val(),
            movie: $('#movie_id').val(),
            character: $('#edit_character_name').val(),
            star: $('#main_actor').is(':checked') ? 1 : 0
         }
      }).done(function(html){
         $('#existing-cast-list').html(html);
         $('.modal').modal('hide');
      });
   });

   $('#add_new_crew').click(function() {
      $.ajax({
         type: 'POST',
         url: '/addNewCrew',
         data: {
            _token: $('meta[name="_token"]').attr('content'),
            person: $('#person_id').val(),
            movie: $('#movie_id').val(),
            position: $('#crew_position').val(),
         }
      }).done(function(html){
         var selectize = $("#crew_list")[0].selectize;
         $('#crew-list').html(html);
         $('.modal').modal('hide');
      });
   });

   $('#remove_cast').click(function(){
      $.ajax({
         type: 'POST',
         url: '/removeCast',
         data: {
            _token: $('meta[name="_token"]').attr('content'),
            row: $('#row_id').val(),
            movie: $('#movie_id').val(),
         }
      }).done(function(html){
         $('#existing-cast-list').html(html);
         $('.modal').modal('hide');
      });
   });

   $('#remove_crew').click(function(){
      $.ajax({
         type: 'POST',
         url: '/removeCrew',
         data: {
            _token: $('meta[name="_token"]').attr('content'),
            row: $('#row_id').val(),
            movie: $('#movie_id').val(),
         }
      }).done(function(html){
         $('#crew-list').html(html);
         $('.modal').modal('hide');
      });
   });

   $('#add_new_tag').click(function(){
      $.ajax({
         type: 'POST',
         url: '/addtag',
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

}); // end of document ready


function launchEditor() {
   $('#movie-poster').removeClass('img-responsive');
   featherEditor.launch({
      image:  'movie-poster'
   });
   return false;
}

function addCastMember() {
   $('#new-cast-modal').modal();
}

function addCrewMember() {
   $('#new-crew-modal').modal();
}

function editCastMember(castID) {
   $.ajax({
      type: 'POST',
      url: '/getCastDetails',
      data: {
         _token: $('meta[name="_token"]').attr('content'),
         cast_id: castID
      }
   }).done(function(json){
      $('#main_actor').prop('checked', json.star);
      $('#edit_character_name').val($('<textarea/>').html(json.character).text());
      $('#person_id').val(json.person_id);
      $('#edit-cast-modal').modal();
   });
}

function removeCastMember(id) {
   setRowId(id);
   $('#remove-cast-modal').modal();
}

function removeCrewMember(id) {
   setRowId(id);
   $('#remove-crew-modal').modal();
}

function setPersonId(id) {
   $('#person_id').val(id);
}

function setRowId(id) {
   $('#row_id').val(id);
}

function setPersonType(type) {
   person_type = type;
}

function setCharacterName(name, el) {
   $('#imdb-character-name').val(name);
   $(el).parent().parent().attr('data-hide', 'true');
}

function clearCheckboxes() {
   $('#main_star').prop('checked', false);
   $('#main_actor').prop('checked', false);
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

function getNewPersonForm(val, type) {
   setPersonType(type);
   $.ajax({
      type: 'POST',
      url: '/addNewPerson',
      data: {
         _token: $('meta[name="_token"]').attr('content'),
         value: val,
      }
   }).done(function(html){
      $('#new-'+type+'-modal').modal('hide');
      $('#empty-modal').html(html).modal();
      initializeDatePicker();
   });
}

function storeNewGenre() {
   $.ajax({
      type: 'POST',
      url: '/storeNewGenre',
      data: $('#create_new_genre_form').serialize(),
   }).done(function(json){
      $('#genre-list').html(html);
      $('.modal').modal('hide');
   });
}

function createNewPerson() {
   $.ajax({
      type: 'POST',
      url: '/createNewPerson',
      data: $('#create_new_person_form').serialize(),
   }).done(function(json){
      switch(json)
      {
         case "exists":
            $('#create_person_error').removeClass('hide');
            $('#create_person_error_message').html('already exists');
         break;

         case "error":
            $('#create_person_error').removeClass('hide');
            $('#create_person_error_message').html('did not save');
         break;

         default:
            var newPerson = [];
            newPerson.push({
               text: json.text,
               value: json.value.toString()
            });
            $('#empty-modal').modal('hide').html('').on('hidden.bs.modal', function (e) {
               $('#new-'+person_type+'-modal').modal();
               $('#character_name').val($('#imdb-character-name').val());
               $('[data-hide="true"]').slideUp().removeAttr('data-hide');
               var selectize = $('#'+person_type+'_list')[0].selectize;
               selectize.addOption(newPerson);
               selectize.refreshOptions(false);
               selectize.setValue(json.value,false);
               var other_type = person_type == 'cast' ? 'crew' : 'cast';
               var theOther = $('#'+other_type+'_list')[0].selectize;
               theOther.addOption(newPerson);
               theOther.refreshOptions(false);
            });
         break;
      }
   });
}


function initializeDatePicker() {
   $('.input-group.date').datepicker({
      format: "dd-mm-yyyy",
      orientation: "bottom auto",
      autoclose: true,
      todayHighlight: true
   }).on('hide', function(e){ e.stopPropagation() })
}

function getCastFromIMDb(el) {
   $(el).html('<i class="ft icon-loading spin"></i>');
   $.ajax({
      type: 'POST',
      url: '/getCastFromIMDb',
      data: {
         _token: $('meta[name="_token"]').attr('content')
      }
   }).done(function(html){
      $(el).html('check IMDb');
      $('#cast-list').html(html);
      $('#copy-cast-div').hide();
   });
}

function duplicateCast(val) {
   $.ajax({
      type: 'POST',
      url: '/duplicateCast',
      data: {
         _token: $('meta[name="_token"]').attr('content'),
         id: val
      }
   }).done(function(html){
      $('#cast-list').html(html);
      $('.modal').modal('hide');
   });
   clearModalSelectize();
}

function showModal(type, id) {
   if(id.length)
   {
      var route = "";
      switch(type) {
         case "genre":
            route = "createNewGenre";
         break;
         case "duplicateCast":
            route = "confirmDuplicateCast";
         break;
         case "createImdbActor":
            route = "createImdbActor";
         break;
      }
      $.ajax({
         type: 'POST',
         url: '/' + route,
         data: {
            _token: $('meta[name="_token"]').attr('content'),
            id: id
         }
      }).done(function(html){
         $('.modal').modal('hide');
         $('#empty-modal').html(html).modal();
         initializeDatePicker();
      });
   }
}
