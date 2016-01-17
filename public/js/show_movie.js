
function storeMovieViewing() {
   $.ajax({
      type: 'POST',
      url: '/MyMDb/public/storeMovieViewing',
      data: {
         _token: $('meta[name="_token"]').attr('content')
      }
   }).done(function(html){
      $('.modal').modal('hide');
      $('.main-content').prepend(html);
      $('html, body').animate({scrollTop: 0});
      FB.api(
       "/me/video.watches",
       "POST",
       {
           "movie": "Jurassic Park",
       },
       function (response) {
         if (response && !response.error) {
           /* handle the result */
         }
       }
);
   });
}

function showModal(type) {
   var route = "";
   switch(type) {
      case "viewing":
         route = "createMovieViewing";
      break;
   }
   $.ajax({
      type: 'POST',
      url: '/MyMDb/public/' + route,
      data: {
         _token: $('meta[name="_token"]').attr('content')
      }
   }).done(function(html){
      $('#empty-modal').html(html).modal();
      $('#alert-message').remove();
   });
}
