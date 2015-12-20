
// Initial setup of wave buttons
Waves.attach('li.movie', ['waves-light']);
Waves.attach('.side-buttons .btn', ['waves-circle']);
Waves.attach('.search-bar-container a, .nav li',['waves-button'])
Waves.init();

// Hide success message
$(document).on('click', 'div.alert-success button.close', function(event){
   $('.alert-success').slideUp(500);
});

$(document).bind('keypress', function(event) {

   // Run search with Enter
   if(event.keyCode==13) {
      event.preventDefault();
      $('.filter-movie-start').trigger('click');
   }

   // Reload page with Escape
   if(event.keyCode==27) {
      event.preventDefault();
      window.location.reload(true);
   }

});

$(document).ready( function() {

   // Lazy load images
   $('img.lazy').lazyload();

   // auto size text areas
   $('#movie_bio').autosize();

   // Tooltip configuration
   $('[data-toggle="tooltip"]').tooltip({
      delay: { 'show': 500, 'hide': 100 }
   });

   // Movie search filter
   $('.filter-movie-start').click(function(){
      $(this).html('<i class="ft icon-loading spin"></i>');
      $.ajax({
         type: 'POST',
         url: '/Laravel/public/filter',
         data: {
            _token: $('meta[name="_token"]').attr('content'),
            val: $('#filter-movie').val(),
         }
     }).done(function(html){
        $('.filter-movie-start').html('Go');
        $('.main-content').html(html);
        Waves.attach('li.movie', ['waves-light']);
        $('img.lazy').lazyload();
     });
   });

   // Show array formatted movie details
   $('#showDetails').click(function(){
      $('html, body').animate({scrollTop: 0});
      $('#movie-details').slideToggle();
   });

   // Hide message boxes after 3 seconds
   $('.alert-success').delay(3000).slideUp(750);

   // Standalone mode
   if(('standalone' in window.navigator) && window.navigator.standalone){
      var link, remotes = false;
      document.addEventListener('click', function(event){
         link = event.target;
         while(link.nodeName !== 'A' && link.nodeName !== 'HTML'){
            link = link.parentNode;
         }
         if('href' in link && link.href.indexOf('http') !== -1 && (link.href.indexOf(document.location.host) !== -1 || remotes)) {
            event.preventDefault();
            document.location.href = link.href;
         }
      }, false);
   }

   // $('#ajaxContent').load('http://www.example.com/paginated/data');
   //
   // $('.pagination a').on('click', function (event) {
   //     event.preventDefault();
   //     if ( $(this).attr('href') != '#' ) {
   //         $('html, body').animate({ scrollTop: 0 }, 'fast');
   //         $('#ajaxContent').load($(this).attr('href'));
   //     }
   // });

});
