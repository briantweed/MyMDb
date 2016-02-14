<!DOCTYPE html>

<html lang="en">

   <head>

      <meta charset="UTF-8">
      <title>MyMDb</title>
      <meta name="description" content="MyMDb">
      <meta name="author" content="Brian Tweed">
      <meta name="format-detection" content="telephone=no"/>

      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, target-densityDpi=device-dpi">
      <meta name="apple-mobile-web-app-capable" content="yes" />
      <meta name="apple-mobile-web-app-status-bar-style" content="black">
      <meta name="apple-mobile-web-app-title" content="MyMDb">
      <meta name="mobile-web-app-capable" content="yes">
      <meta name="_token" content="{!! csrf_token() !!}" />

      <link rel="apple-touch-icon-precomposed" sizes="152x152" href="{{ URL::asset('images/app-icon.png') }}">

      <link rel="shortcut icon" href="{{ URL::asset('favicon.ico') }}">
      <link rel="shortcut icon" href="{{ URL::asset('myicon.ico') }}">

      {!! Html::style(elixir('css/mymdb.css')) !!}

   </head>

   <body>

      @include('segments.nav')

      @include('segments.subnav_main')

      <div class="container">
         <div class="filtered-content"></div>
      </div>

      {{-- PURCHAED CONTENT --}}
      <div class="purchased-content parallax">

         <div class="container">

            <div class="row">
               <div class="col-xs-12">
                  <h4>Recently Purchased</h4>
               </div>
            </div>

         </div>

         <div class="container-fluid">

            <div class="row">
               <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                  <div class="slick-purchased hide">
                     @foreach($details->most_recent as $movie)
                        <div>
                           <a href="{{ action('MovieController@show', $movie->movie_id) }}">
                              <img class="img-rounded" src="{{asset('images/covers/'.$movie->image)}}" alt="MyMDb" />
                           </a>
                        </div>
                     @endforeach
                  </div>
               </div>
            </div>

         </div>

      </div> {{-- END OF PURCHASED CONTENT --}}

      {{-- RATING CONTENT --}}
      <div class="ratings-content">

         <div class="container">

            @include('segments.layout.padding')

            <div class="row">
               <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                  @include('welcome.highest_rated')
               </div>
               <div class="col-xs-12 col-md-6">
                  <h4>Movies By Certificate</h4>
                  <div id="certificateChart" style="height: 350px; width: 100%;"></div>
               </div>
            </div>

            @include('segments.layout.padding')

         </div>

      </div> {{-- END OF RATING CONTENT --}}

      {{-- FEATURED CONTENT --}}
      <div class="feature-content parallax">

         <div class="container">

            @include('segments.layout.padding')

            <div class="row">
               <div class="col-xs-12 col-sm-3 col-md-3 col-lg-2  col-lg-offset-1">
                  <a href="{{ action('MovieController@show', $details->highlight->movie_id) }}">
                     <img class="img-rounded img-responsive" src="{{asset('images/covers/'.$details->highlight->image)}}"  alt="MyMDb" />
                  </a>
               </div>
               <div class="col-xs-12 col-sm-9 col-md-9 col-lg-8">
                  <h4>{{$details->highlight->name}} ({{$details->highlight->released}}) </h4>
                  <span class="rating-display @if($details->highlight->rating==10) top-rated @endif"
                     data-toggle='tooltip' data-placement='top' title='{{$details->highlight->rating}} / @if($movie->movie_id==176) 11 @else 10 @endif'>
                        {!! $details->highlight->rating_display !!}
                  </span>

                  @include('segments.layout.padding')

                  <div class="row">
                     <div class="col-xs-12">
                        {{$details->highlight->bio}}
                     </div>
                  </div>

                  @include('segments.layout.padding')

                  <div class="row">
                     <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
                        <a href="{{ action('MovieController@show', $details->highlight->movie_id) }}" class="btn btn-block btn-primary"> view </a>
                     </div>
                  </div>
               </div>
            </div>

            @include('segments.layout.padding')

         </div>

      </div> {{-- END OF FEATURED CONTENT --}}

      {{-- POPULAR PEOPLE CONTENT --}}
      <div class="secondary-content">

         <div class="container">

            @include('segments.layout.padding')

            <div class="row">
               <div class="col-xs-12">
                  <h4>Most Popular Actors</h4>
               </div>
            </div>

            <div class="row">
               <div class="col-xs-12 image-thumbnail">
                  <div id="actor-slidee" class="frame">
                     <ul class="slidee">
                        @foreach($details->actors as $actor)
                           <li>
                              <a href="{{ action('PersonController@show', $actor->person_id) }}">
                                 <img class="img-rounded img-responsive" src="{{asset('images/people/'.$actor->image)}}" alt="MyMdb" />
                                 <span class="title-wrapper hidden-xs text-center">
                                    {{$actor->name}}<br/>
                                    @if($actor->count == 1) 1 movie
                                    @else {{$actor->count}} movies
                                    @endif
                                 </span>
                              </a>
                           </li>
                        @endforeach
                     </ul>
                  </div>
                  <ul id="actor-pages" class="pages"></ul>
               </div>
            </div>

            @include('segments.layout.padding')

            <div class="row">
               <div class="col-xs-12">
                  <h4>Most Popular Directors</h4>
               </div>
            </div>

            <div class="row">
               <div class="col-xs-12 image-thumbnail">
                  <div id="director-slidee" class="frame">
                     <ul class="slidee">
                        @foreach($details->directors as $director)
                           <li>
                              <a href="{{action('PersonController@show', $director->person_id) }}">
                                    <img class="img-rounded img-responsive" src="{{asset('images/people/'.$director->image)}}" alt="MyMDb" />
                                 <span class="title-wrapper hidden-xs text-center">
                                    {{$director->name}}<br/>
                                    @if($director->count == 1) 1 movie
                                    @else {{$director->count}} movies
                                    @endif
                                 </span>
                              </a>
                           </li>
                        @endforeach
                     </ul>
                  </div>
                  <ul id="director-pages" class="pages"></ul>
               </div>
            </div>

            @include('segments.layout.padding')

         </div>

      </div> {{-- END OF POPULAR PEOPLE CONTENT --}}

      {{-- CHART CONTENT --}}
      <div class="chart-content">

         <div class="container">

            @include('segments.layout.padding')

            <div class="row">
               <div class="col-xs-10">
                  <h4 id="movies-by-label">Movies By Decade</h4>
               </div>
               <div class="col-xs-2">
                  {!! Form::select('select_decade', ['all'=>'All'] + $details->decades, 'all', ['class'=>'form-control', 'id'=>'decadeSelectFilter']) !!}
               </div>
            </div>

            @include('segments.layout.padding')

            <div class="row">
               <div class="col-xs-12">
                  <div id="yearChart" style="height: 300px; width: 100%;"></div>
               </div>
            </div>

            @include('segments.layout.padding')

         </div>

      </div> {{-- CHART CONTENT --}}

      {!! Html::script(elixir('js/mymdb.js')) !!}
      {!! Html::script('js/slick.js') !!}
      {!! Html::script('js/canvas.js') !!}
      {!! Html::script('js/welcome.js') !!}

      <footer>
         @include('segments.footer')
      </footer>

   </body>

</html>
