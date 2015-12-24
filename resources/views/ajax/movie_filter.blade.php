<meta name="_token" content="{!! csrf_token() !!}" />

<div class="row">
   @if(count($movies))
      <div class="col-xs-12 alert alert-dismissible alert-success">
         <button type="button" class="close" >
            <span aria-hidden="true">&times;</span>
         </button>
         There
         @if(count($movies)==1)
            is <b>1 movie</b> that matches
         @else
            are <b>{{count($movies)}} movies</b> that match
         @endif
         your search query
      </div>
      <div class="col-xs-12">

         <ul class="xs-block-grid-3 sm-block-grid-6 md-block-grid-8 lg-block-grid-8">
            @foreach($movies as $movie)
               <li class="movie text-center">
                  <a href="{{ action('MovieController@show', $movie->movie_id) }}">
                     @if($movie->cover_count == 1)
                        <img class="img-responsive img-rounded lazy" data-original="http://placehold.it/300x450/cccccc/ffffff?text={{$movie->cover}}"  />
                     @else
                        <img class="img-responsive img-rounded lazy" data-original="{{asset($movie->cover)}}"  />
                     @endif
                     <span class="title-wrapper hidden-xs">{{$movie->name}} @if($movie->duplicate) ({{$movie->released}}) @endif</span>
                  </a>
               </li>
            @endforeach
         </ul>
      </div>
   @else
      <div class="col-xs-8 col-xs-offset-2">
         <br/><br/>
         <p class="error-quote">"{{$quote->text}}"</p>
         <p class="error-link"><a href="{{ action('MovieController@show', $quote->movie_id) }}">{{$quote->movie_name}} ({{$quote->released}})</a></p>
      </div>
   @endif

</div>
