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
            <th>ID</th><th>Name</th><th>Released</th><th>Length</th><th>Description</th><th>Rating</th>
         </tr>
<?php
      foreach( $movies as $movie )
      {
?>
         <tr>
            <td width="20px">
               <a href="movies/<?php echo $movie['movie_id']; ?>"><?php echo $movie['movie_id']; ?></a>
            </td>
            <td width="200px"><?php echo $movie['movie_name']; ?></td>
            <td width="150px"><?php echo date( 'jS F  Y', strtotime( $movie['movie_release_date'] ) ); ?></td>
            <td width="50px" ><?php echo $movie['movie_running_time']; ?></td>
            <td width="300px"><?php echo $movie['movie_bio']; ?></td>
            <td width="100px"><?php echo $movie['movie_my_rating']; ?></td>
         </tr>
<?php
      }
?>
   </table>
    </body>
</html>
