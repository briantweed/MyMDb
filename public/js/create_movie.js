$(document).ready(function(){

   runFormSetup();

   if($('#image').val().length) $('#movie-poster').attr('src', $('#image').val());

});

function searchForMovie(el) {
   $(el).html('<i class="ft icon-loading spin"></i>');
   $.ajax({
      type: 'POST',
      url: '/searchForMovie',
      data: $('#imdb_movie_search_form').serialize(),
   }).done(function(html){
      $(el).html('search');
      $('#create-movie-form-div').html(html);
      runFormSetup();
   });
}

function runFormSetup() {

   $('textarea').autosize();

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

   $('[data-placement]').tooltip();
}
