<html>
    <head>
        <title>Movies</title>
        <style>
         table th, table td { text-align:left; padding:3px 5px 10px; vertical-align:top }
        </style>
    </head>
    <body>
      <table>
         <tr>
            <th>ID</th><th>Name</th><th>Released</th><th>Length</th><th>Description</th><th>Certificate</th><th>Format</th><th>Studio</th><th>Rating</th>
         </tr>
         @foreach( $movies as $movie )
         <tr>
            <td width="20px"><a href="movies/{{ $movie->movie_id }}">{{ $movie['movie_id'] }}</a></td>
            <td width="200px">{{ $movie->movie_name }}</td>
            <td width="150px">{{ date( 'jS F Y', strtotime( $movie->movie_release_date ) ) }} </td>
            <td width="100px">{{ $movie->movie_running_time }} mins</td>
            <td width="300px">{{ $movie->movie_bio }}</td>
            <td width="100px">{{ $movie->certificate_title }}</td>
            <td width="100px">{{ $movie->format_type }}</td>
            <td width="100px">{{ $movie->studio_name }}</td>
            <td width="100px">{{ $movie->movie_my_rating }}</td>
         </tr>
         @endforeach
   </table>
    </body>
</html>
