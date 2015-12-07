<html>
   <head>
      <title>Movies</title>
      <style>
         div.movie {background:#f6f6ff;border:1px solid #f0f0f6;border-radius:5px;padding:5px 10px;;margin:5px 0}
         div.movie:hover {background:#f0f0ff;}
         div.movie a{display:block;text-decoration:none;color:#222}
      </style>
   </head>
   <body>
      <h2>Movies</h2>
      @foreach( $movies as $movie )
         <div class="movie">
            <a href="movies/{{ $movie->movie_id }}">
               {{ $movie->name }} ({{ date( 'Y', strtotime( $movie->release_date ) ) }})
            </a>
         </div>
      @endforeach
   </body>
</html>
