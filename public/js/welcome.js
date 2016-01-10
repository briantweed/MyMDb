$(document).ready(function(){

   $('.slick').slick({
      dots: false,
      arrows: false,
      infinite: true,
      speed: 800,
      slidesToShow: 6,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 3000,
      pauseOnHover: false,
      swipeToSlide: true
   }).hide().removeClass('hide').fadeIn();

   displayMoviesByYear(2000,2015);

});

function displayMoviesByYear(start, end) {
   var base_path = 'MyMDb/public';
   $.ajax({
      type: "POST",
      url: '/MyMDb/public/movieDecadeCount',
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
                     console.log(e.entries[i]);
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
