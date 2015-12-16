
$(document).ready( function() {

   // Tooltip configuration
   $('[data-toggle="tooltip"]').tooltip({
      delay: { "show": 500, "hide": 100 }
   });

   // Temp code for the search button
   $('.daforce').click( function() {
      alert("The Force is strong with this one.");
   });

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
