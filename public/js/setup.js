Waves.attach('li.movie', ['waves-light']);
Waves.attach('.side-buttons .btn', ['waves-circle']);
Waves.attach('.search-bar-container a, .nav li',['waves-button'])
Waves.init();

$(document).bind('keypress', function(e) {
   if(e.keyCode==13) $('.filter-movie-start').trigger('click');
   if(e.keyCode==27) {
      $('#filter-movie').val("");
      $('.filter-movie-start').trigger('click');
   }
});

$(document).ready( function() {

   // auto size text areas
   $('#movie_bio').autosize();



   // Tooltip configuration
   $('[data-toggle="tooltip"]').tooltip({
      delay: { "show": 500, "hide": 100 }
   });

   // Movie search filter
   $('.filter-movie-start').click( function() {
      $.ajax({
         type: "POST",
         url: "/Laravel/public/filter",
         data: {
            _token: $('meta[name="_token"]').attr('content'),
            val : $('#filter-movie').val(),
         }
     }).done(function(html) {
        $('.main-content').html(html);
        Waves.attach('li.movie', ['waves-light']);
     });
   });

   // Show array formatted movie details
   $('#showDetails').click(function(){
      $("html, body").animate({ scrollTop: 0 });
      $('#movie-details').slideToggle();
   });

   // Hide message boxes after 3 seconds
   $('.alert-success').delay(3000).slideUp(750);

   // Mobile Safari in standalone mode
   if(("standalone" in window.navigator) && window.navigator.standalone) {
      var link, remotes = false;
      document.addEventListener('click', function(event) {
         link = event.target;
         while(link.nodeName !== "A" && link.nodeName !== "HTML") {
            link = link.parentNode;
         }
         if('href' in link && link.href.indexOf('http') !== -1 && (link.href.indexOf(document.location.host) !== -1 || remotes)) {
            event.preventDefault();
            document.location.href = link.href;
         }
      },false);
   }

   // $('#ajaxContent').load('http://www.example.com/paginated/data');
   //
   // $('.pagination a').on('click', function (event) {
   //     event.preventDefault();
   //     if ( $(this).attr('href') != '#' ) {
   //         $("html, body").animate({ scrollTop: 0 }, "fast");
   //         $('#ajaxContent').load($(this).attr('href'));
   //     }
   // });

});
