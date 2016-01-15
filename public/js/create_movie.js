$(document).ready(function(){

   $('select:not(#movie_studio_id)').selectize();

   $('#movie_studio_id').selectize({
      create: true,
      persist: false
   });

   $('.input-group.date').datepicker({
      format: "dd-mm-yyyy",
      orientation: "bottom auto",
      autoclose: true,
      todayHighlight: true,
      defaultViewDate: { year: 2000, month: 01, day: 01 }
   });

   // $('#select-movie').selectize({
   //    valueField: 'title',
   //    labelField: 'title',
   //    searchField: 'title',
   //    options: [],
   //    create: false,
   //    render: {
   //    option: function(item, escape) {
   //       var actors = [];
   //       return '<div>' +
   //       '<span class="title">' +
   //       '<span class="name">' + escape(item.title) + '</span>' +
   //       '</span>' +
   //       '<span class="description">' + escape(item.synopsis || 'No synopsis available at this time.') + '</span>' +
   //       '</div>';
   //       }
   //    },
   //    load: function(query, callback) {
   //       if (!query.length) return callback();
   //       $.ajax({
   //          url: 'http://api.rottentomatoes.com/api/public/v1.0/movies.json',
   //          type: 'GET',
   //          dataType: 'jsonp',
   //          data: {
   //             q: query,
   //             page_limit: 5,
   //             apikey: $('input[name="_tomatoes"]').val()
   //          },
   //          error: function() {
   //             callback();
   //          },
   //          success: function(res) {
   //             callback(res.movies);
   //          }
   //       });
   //    }
   // });

});
