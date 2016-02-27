
function storeMovieViewing() {
   $.ajax({
      type: 'POST',
      url: '/storeMovieViewing',
      data: {
         _token: $('meta[name="_token"]').attr('content')
      }
   }).done(function(html){
      $('.modal').modal('hide');
      $('.viewing-message').html(html);
      $('html, body').animate({scrollTop: 0});
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
      url: '/' + route,
      data: {
         _token: $('meta[name="_token"]').attr('content')
      }
   }).done(function(html){
      $('#empty-modal').html(html).modal();
      $('#alert-message').remove();
   });
}
