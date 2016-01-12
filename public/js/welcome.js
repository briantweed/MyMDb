$(window).resize(function(e) {
   $('#actor-slidee').sly('reload');
   $('#director-slidee').sly('reload');
});

$(document).ready(function() {

   $('.slick-purchased').slick({
      autoplaySpeed: 3000,
      pauseOnHover: true,
      swipeToSlide: true,
      slidesToScroll: 1,
      slidesToShow: 6,
      infinite: true,
      autoplay: true,
      arrows: false,
      dots: false,
      speed: 800,
      responsive: [
         {
            breakpoint: 1200,
            settings: {
               slidesToShow: 6
            }
         },
         {
            breakpoint: 992,
            settings: {
               slidesToShow: 5
            }
         },
         {
            breakpoint: 768,
            settings: {
               slidesToShow: 4
            }
         },
         {
            breakpoint: 400,
            settings: {
               slidesToShow: 2
            }
         },
      ]
   }).hide().removeClass('hide').fadeIn();

   $('#actor-slidee').sly({
      scrollBar : $("#actor-scrollbar"),
      dragSource : '#actor-slidee',
      activatePageOn : 'click',
      activateOn : 'click',
      itemNav: 'basic',
      mouseDragging : 1,
      touchDragging : 1,
      swingSpeed : 0.07,
      elasticBounds : 1,
      dynamicHandle : 1,
      releaseSwing : 1,
      horizontal : 1,
      dragHandle : 1,
      scrollBy : 1,
      clickBar : 1,
      speed : 50,
      smart : 1
   });

   $('#director-slidee').sly({
      scrollBar : $("#director-scrollbar"),
      dragSource : '#director-slidee',
      activatePageOn : 'click',
      activateOn : 'click',
      itemNav: 'basic',
      mouseDragging : 1,
      touchDragging : 1,
      swingSpeed : 0.07,
      elasticBounds : 1,
      dynamicHandle : 1,
      releaseSwing : 1,
      horizontal : 1,
      dragHandle : 1,
      scrollBy : 1,
      clickBar : 1,
      speed : 50,
      smart : 1
   });

   displayMoviesByYear(2000,2015);

});

function displayMoviesByYear(start, end) {
   var base_path = $('body').data('base');
   $.ajax({
      type: "POST",
      url: '/'+base_path+'/movieDecadeCount',
      data: {
         _token: $('meta[name="_token"]').attr('content'),
         start: start,
         end: end
      }
   }).done(function(json) {
      var chart = new CanvasJS.Chart("chartContainer", {
         axisY:{
            gridColor: "#ddd",
            gridThickness: 1
         },
         toolTip: {
            contentFormatter: function(e){
               var str="";
               for (var i = 0; i < e.entries.length; i++){
                  str = "<a href='javascript:void(0)' onclick=\"startFilter('year')\">" + e.entries[i].dataPoint.label + ": ";
                  str += e.entries[i].dataPoint.y ==1 ? "1 movie" : e.entries[i].dataPoint.y + " movies";
                  str += "</a>";
                  return (str);
               }
            }
         },
         data: [{
            type: "column",
            mouseover: onMouseOver,
            dataPoints: json
         }]
      });
      chart.render();
   });
}

function onMouseOver(e) {
   $('#filter-movie').val(e.dataPoint.label);
}
