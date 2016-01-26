$(document).ready(function(){

   runFormSetup();

   $('#imdb_movie_search').click(function() {
      $(this).html('<i class="ft icon-loading spin"></i>');
      $.ajax({
         type: 'POST',
         url: '/MyMDb/public/searchForMovie',
         data: $('#imdb_movie_search_form').serialize(),
      }).done(function(html){
         $(this).html('search');
         $('#create-movie-form-div').html(html);
         runFormSetup();
      });
   });

});

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
   
}
