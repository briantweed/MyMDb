
// Initial setup of wave buttons
Waves.attach('li.image-thumbnail, .slidee li, div.slick-purchased div', ['waves-light']);
Waves.attach('#movieTabs li, .search-bar-container a, a.btn', ['waves-button']);
Waves.attach('.feature-content img', ['waves-light', 'waves-block']);
Waves.init();

// Hide success message
$(document).on('click', 'div.alert-success button.close', function(event){
   $('.alert-success').slideUp(500);
});

$(document).keyup(function(event) {

   if($('#filter-movie').is(':focus'))
   {
      if(event.which == 13)
      {
         event.preventDefault();
         startFilter('all', '');
         $('#filter-movie').blur();
      }
      if(event.which == 27)
      {
         event.preventDefault();
         document.location.reload(true)
      }
   }

});

$(document).ready(function() {

   $('.pagination').addClass('pagination-lg');

   // Lazy load images
   $('img.lazy').lazyload({
      effect : "fadeIn",
      threshold : 500
   });

   // auto size text areas
   $('textarea').autosize();

   // Tooltip configuration
   $('[data-toggle="tooltip"]').tooltip({
      delay: { 'show': 500, 'hide': 100 }
   });

   // Show array formatted movie details
   $('#showDetails').click(function(){
      $('html, body').animate({scrollTop: 0});
      $('#movie-details').slideToggle();
   });

   $('.add-commas').each(function(){
      $(this).html(addCommas($(this).html()));
   });

   // Standalone mode
   if(('standalone' in window.navigator) && window.navigator.standalone) {
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
      $('.doc-loader').remove();
   }
   else {
	 $('.parallax').simpleParallax();
    $.when($('.doc-loader').fadeOut('slow')).done(function(){ $(this).remove(); });
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

// Movie search filter
function startFilter(type, val) {
   if(val!="") $('#filter-movie').val(val);
   if($('#filter-movie').val().length!=0)
   {
      $('#filter-movie-by').val(type);
      $('#filter-movie-start').html('<i class="ft icon-loading spin"></i>');
      $('#filter-movie-form').submit();
   }
}

function previewImage(input, output) {
   if(input.files && input.files[0])
   {
      var reader = new FileReader();
      reader.onload = function(event) {
         var image = new Image();
         image.src = event.target.result;
         image.onload = function() {
            var thisWidth  = this.width;
            var thisHeight = this.height;
            $('#' + output + '-info').html('Image Size: ' + thisWidth + 'px by ' + thisHeight + 'px');
         };
         $('#'+output).attr("src", event.target.result);
         $('#image').val('');
      };
      reader.readAsDataURL(input.files[0]);
   }
}

function addCommas(nStr) {
   nStr += '';
   var rgx = /(\d)(?=(\d{3})+(?!\d))/g;
   if ( rgx.test(nStr)==true) nStr = nStr.replace(rgx, '$1,');
   return nStr;
}
