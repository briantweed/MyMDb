<html>

   <head>
      <title>{{$movie->name}}</title>
      <style>
         table { width: 750px; }
         table td { vertical-align:top; padding: 3px 10px 3px 0 }
      </style>
   </head>

   <body>
      <h2>{{$movie->name}}</h2>
      <table>
         <tr><td width="100px">Released :</td><td width="200px">{{$movie->released}}</td><td width="450px" rowspan="5">{{$movie->description}}</td></tr>
         <tr><td>Running Time :</td><td>{{$movie->running_time}} mins</td></tr>
         <tr><td>Certificate :</td><td>{{$movie->certificate}}</td></tr>
         <tr><td>Format :</td><td>{{$movie->format}}</td></tr>
         <tr><td>Studio :</td><td>{{$movie->studio}}</td></tr>
      </table>
      <br/>
      <a href="{{ action('MovieController@index') }}">back</a>
   </body>
   
</html>
