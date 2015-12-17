
var featherEditor = new Aviary.Feather({
   apiKey: 'b7b206d4-0932-4bfa-b21e-a4ad8b87bf56',
   tools: 'crop,resize,orientation',
   cropPresets: [
      ['Portrait','2:3'],
   ],
   displayImageSize: true,
   noCloseButton: false,
   onClose: function(){
      $('#movie-poster').addClass('img-responsive');
   },
   onSave: function(imageID, newUrl) {
      $.ajax({
         type: "POST",
         url: "/Laravel/public/aviary",
         dataType : "json",
         data: {
            _token: $('meta[name="_token"]').attr('content'),
            img: newUrl,
            src: $('#movie-poster').attr('src')
         }
     }).done(function(json) {
        $('#movie-poster').addClass('img-responsive').prop("src", json.src+"?"+json.time);
        featherEditor.close();
     });
   }
});

function launchEditor() {
   $('#movie-poster').removeClass('img-responsive');
   featherEditor.launch({
      image:  'movie-poster'
   });
   return false;
}
