<meta name="_token" content="{!! csrf_token() !!}" />

@include('segments.layout.padding')

<div class="row">
   @if(count($movies) || count($people))
      <div class="col-xs-12 alert alert-dismissible alert-success">
         <button type="button" class="close" >
            <span aria-hidden="true">&times;</span>
         </button>
         @if(count($movies))
            There
            @if(count($movies)==1) is <b>1 movie</b>
               @if(!count($people)) that matches @endif
            @else
               are <b>{{count($movies)}} movies</b>
               @if(!count($people)) that match @endif
            @endif
            @if(!count($people)) your search query @endif
         @endif
         @if(count($people))
            @if(count($movies)) and @else There @endif
            @if(count($people)==1)
               is <b>1 person</b> that matches
            @else
               are <b>{{count($people)}} people</b> that match
            @endif
            your search query
         @endif
      </div>

      @if(count($movies))
         <div class="col-xs-12">
            <h4>Movies</h4>
            <ul  id="movie-filter-results" class="xs-block-grid-3 sm-block-grid-6 md-block-grid-8 lg-block-grid-8">
               @foreach($movies as $movie)
                  <li class="image-thumbnail text-center">
                     <a href="{{ action('MovieController@show', $movie->movie_id) }}">
                        <img class="img-responsive img-rounded lazy" src="{{asset('images/mymdb.jpg')}}" data-original="{{asset('images/covers/'.$movie->image)}}"  />
                        <span class="title-wrapper hidden-xs">{{$movie->name}} @if($movie->duplicate) ({{$movie->released}}) @endif</span>
                     </a>
                  </li>
               @endforeach
            </ul>
         </div>
      @endif

      @if(count($people))
         <div class="col-xs-12">
            <h4>People</h4>
            <ul id="people-filter-results"class="xs-block-grid-3 sm-block-grid-6 md-block-grid-8 lg-block-grid-8">
               @foreach($people as $person)
                  <li class="image-thumbnail text-center">
                     <a href="{{ action('PersonController@show', $person->person_id) }}">
                        <img class="img-responsive img-rounded lazy" src="{{asset('images/mymdb.jpg')}}" data-original="{{asset('images/people/'.$person->image)}}"  />
                        <span class="title-wrapper hidden-xs">{{$person->forename}} {{$person->surname}} </span>
                     </a>
                  </li>
               @endforeach
            </ul>
         </div>
      @endif

   @else
      <div class="col-xs-8 col-xs-offset-2">
         <br/><br/>
         <p class="error-quote">"{{$quote->text}}"</p>
         <p class="error-link"><a href="{{ action('MovieController@show', $quote->movie_id) }}">{{$quote->name}} ({{$quote->released}})</a></p>
      </div>
   @endif

</div>
