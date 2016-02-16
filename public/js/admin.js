
function getAdminInfo(route) {
   $.ajax({
      type: 'POST',
      url: '/admin/' + route,
      data: {
         _token: $('meta[name="_token"]').attr('content'),
      }
   }).done(function(html){
      $('#admin-details').html(html);
   });
}
