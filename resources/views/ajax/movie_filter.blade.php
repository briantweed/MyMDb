<meta name="_token" content="{!! csrf_token() !!}" />

<div class="row">
   @if(count($movies))
      <div class="col-xs-12 alert alert-dismissible alert-success">
         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
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
                        <img class="img-responsive img-rounded" src="http://placehold.it/300x450/cccccc/ffffff?text={{$movie->cover}}" alt="{{$movie->name}}" />
                     @else
                        <img class="img-responsive img-rounded" src="{{asset('images/covers/')}}/{{$movie->cover}}" alt="{{$movie->name}}" />
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
         <p class="error-quote">"Empty. The opposite of full. This page is supposed to be full! Anyone care to explain?"</p>
         <p class="error-link"><a href="{{ action('MovieController@show', 37) }}">The Fifth Element (1997)</a></p>
      </div>
   @endif

</div>
