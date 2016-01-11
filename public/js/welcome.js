$(document).ready(function(){

   $('.slick-purchased').slick({
      dots: false,
      arrows: false,
      infinite: true,
      speed: 800,
      slidesToShow: 6,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 3000,
      pauseOnHover: true,
      swipeToSlide: true,
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
       dragSource : '.frame',
       horizontal : 1,
       itemNav: 'basic',
       smart : 1,
       activateOn : 'click',
       mouseDragging : 1,
       touchDragging : 1,
       releaseSwing : 1,
       scrollBy : 1,
       activatePageOn : 'click',
       speed : 50,
       swingSpeed : 0.07,
       elasticBounds : 1,
       dragHandle : 1,
       dynamicHandle : 1,
       clickBar : 1,
       scrollBar : $("#scrollbar"),
       dragHandle : 1
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
            // title:{
            //    text: ""
            // },
            // axisX:{
            //   title: "year",
            // },
            axisY:{
            //   title: "number",
              gridColor: "#ddd",
              gridThickness: 1
            },
            toolTip: {
               contentFormatter: function(e){
                  var str="";
                  for (var i = 0; i < e.entries.length; i++){
                     str = "<a href='javascript:void(0)' onclick=\"startFilter('year')\">"+e.entries[i].dataPoint.label+": ";
                     str += e.entries[i].dataPoint.y ==1 ? "1 movie" : e.entries[i].dataPoint.y + " movies";
                     str += "</a>";
                     return (str);
                 }
              }
           },
            data: [
               {
                  type: "column",
                  mouseover: onMouseOver,
                  // toolTipContent: {
                  //    "<a href='javascript:void(0)' onclick=\"startFilter('year')\">{label}: {y} movies</a>",
                  // },

               dataPoints: json
            }
         ]
      });
      chart.render();
   });
}

function onMouseOver(e) {
   $('#filter-movie').val(e.dataPoint.label);
}
