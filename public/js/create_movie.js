$(document).ready(function(){

   $('select(#movie_studio_id)').selectize();

   $('#movie_studio_id').selectize({
      create: true
   });

   // apply selctize to dropdowns
   $('#select-movie').selectize({
      valueField: 'title',
      labelField: 'title',
      searchField: 'title',
      options: [],
      create: false,
      render: {
      option: function(item, escape) {
         var actors = [];

         return '<div>' +
         '<span class="title">' +
         '<span class="name">' + escape(item.title) + '</span>' +
         '</span>' +
         '<span class="description">' + escape(item.synopsis || 'No synopsis available at this time.') + '</span>' +
         '</div>';
         }
      },
      load: function(query, callback) {
         if (!query.length) return callback();
         $.ajax({
            url: 'http://api.rottentomatoes.com/api/public/v1.0/movies.json',
            type: 'GET',
            dataType: 'jsonp',
            data: {
               q: query,
               page_limit: 5,
               apikey: $('input[name="_tomatoes"]').val()
            },
            error: function() {
               callback();
            },
            success: function(res) {
               callback(res.movies);
            }
         });
      },
      onChange: function(value) {
         alert(value);
      }
   });

});
