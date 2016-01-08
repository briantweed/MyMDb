
var base_path = $('body').data('base');

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
         url: '/'+base_path+'/aviary',
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

   // Tabs
   $('#movieTabs a').click(function (e) {
     e.preventDefault();
     $(this).tab('show');
  });

   //  selctize
   $('#studio_id').selectize({
      create: true,
      persist: false
   });

   // $('#castlist').selectize({
   //    // create: true,
   //    // persist: false,
   //    preload: true,
   //    valueField: 'person_id',
   //    labelField: 'full_name',
   //    searchField: 'full_name',
   //    options: [],
   //    load: function(query, callback) {
   //       this.settings.load = null;
   //      $.ajax({
   //         type: 'POST',
   //         url: '/'+base_path+'/getAvailableCast',
   //         dataType: 'json',
   //         data: {
   //            _token: $('meta[name="_token"]').attr('content'),
   //            movie: $('#movie_id').val(),
   //         }
   //      }).success(function(res){
   //         callback(res);
   //      });
   //   }
   // });

   // $('#crewlist').selectize({
   //    // create: true,
   //    // persist: false,
   //    preload: true,
   //    valueField: 'person_id',
   //    labelField: 'full_name',
   //    searchField: 'full_name',
   //    options: [],
   //    load: function(query, callback) {
   //       this.settings.load = null;
   //      $.ajax({
   //         type: 'POST',
   //         url: '/'+base_path+'/getAvailableCrew',
   //         dataType: 'json',
   //         data: {
   //            _token: $('meta[name="_token"]').attr('content'),
   //            movie: $('#movie_id').val(),
   //         }
   //      }).success(function(res) {
   //         callback(res);
   //      });
   //   }
   // });

   $('#cast_list').selectize({
      persist: false,
      create: function (input, callback){
         getNewPersonForm(input);
         callback({
            value: 123,
            text: input
         });
      },
   });

   $('select').selectize();

   // confirmation of movie deletion
   $('#delete_movie').click(function() {
      $('#delete_movie_form').submit();
   });

   // close modal, clear hidden person_id field
   $('.modal').on('hide.bs.modal', function(e) {
      $('.modal .form-control').val('');
      clearModalSelectize();
      setPersonId('');
   });

   $('#empty-modal').on('hidden.bs.modal', function(e) {
      $(this).html('');
   });

   // remove cast member
   $('#add_new_cast').click(function() {
      $.ajax({
         type: 'POST',
         url: '/'+base_path+'/addNewCast',
         data: {
            _token: $('meta[name="_token"]').attr('content'),
            person: $('#person_id').val(),
            movie: $('#movie_id').val(),
            character: $('#character_name').val(),
         }
      }).done(function(html){
         $('#cast-list').html(html);
         $('.modal').modal('hide');
      });
   });

   // remove crew member
   $('#add_new_crew').click(function() {
      $.ajax({
         type: 'POST',
         url: '/'+base_path+'/addNewCrew',
         data: {
            _token: $('meta[name="_token"]').attr('content'),
            person: $('#person_id').val(),
            movie: $('#movie_id').val(),
            position: $('#crew_position').val(),
         }
      }).done(function(html){
         $('#crew-list').html(html);
         $('.modal').modal('hide');
      });
   });

   // remove cast member
   $('#remove_cast').click(function(){
      $.ajax({
         type: 'POST',
         url: '/'+base_path+'/removeCast',
         data: {
            _token: $('meta[name="_token"]').attr('content'),
            person: $('#person_id').val(),
            movie: $('#movie_id').val(),
         }
      }).done(function(html){
         $('#cast-list').html(html);
         $('.modal').modal('hide');
      });
   });

   //remove crew member
   $('#remove_crew').click(function(){
      $.ajax({
         type: 'POST',
         url: '/'+base_path+'/removeCrew',
         data: {
            _token: $('meta[name="_token"]').attr('content'),
            person: $('#person_id').val(),
            movie: $('#movie_id').val(),
         }
      }).done(function(html){
         $('#crew-list').html(html);
         $('.modal').modal('hide');
      });
   });

   // datepicker setup
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
         url: '/'+base_path+'/addtag',
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

}); // end of document ready


// Image Editor
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

function removeCastMember(id) {
   setPersonId(id);
   $('#remove-cast-modal').modal();
}

function removeCrewMember(id) {
   setPersonId(id);
   $('#remove-crew-modal').modal();
}

function setPersonId(id) {
   $('#person_id').val(id);
}

function clearModalSelectize() {
   var $select = $('.modal select').selectize();
   $select.each(function(index, value) {
      var control = $select[index].selectize;
      control.clear();
   });
}

function getNewPersonForm(val) {
   $.ajax({
      type: 'POST',
      url: '/'+base_path+'/addNewPerson',
      data: {
         _token: $('meta[name="_token"]').attr('content'),
         value: val
      }
   }).done(function(html){
      $('#new-cast-modal').modal('hide');
      $('#empty-modal').html(html).modal();
      initializeDatePicker();
   });
}

function createNewPerson() {
   $.ajax({
      type: 'POST',
      url: '/'+base_path+'/createNewPerson',
      data: $('#create_new_person_form').serialize()
   }).done(function(html){
      console.log(html);
      $('.modal').modal('hide');
   });
}

function initializeDatePicker() {
   $('.input-group.date').datepicker({
      format: "dd-mm-yyyy",
      orientation: "bottom auto",
      autoclose: true,
      todayHighlight: true,
      defaultViewDate: { year: 2000, month: 01, day: 01 }
   });
}






//    $.ajax({
//       type: 'POST',
//       url: '/'+$('body').data('base')+'/getAvailableActors',
//       data: {
//          _token: $('meta[name="_token"]').attr('content'),
//          movie: id,
//       }
//    }).done(function(html){
//       var options = "";
//       $.each(html, function(full_name, person_id){
//          $('#castlist').append("<option value='"+person_id+"'>"+full_name+"</option>");
//       });
//       $('#castlist').selectize();
//    });
// }
