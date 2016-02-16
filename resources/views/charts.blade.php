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

      @include('segments.subnav')

      <div class="container">

         <div class="main-content">

         </div>

      </div>

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

            <div class="row">
               <div class="col-xs-12 col-sm-6">
                  <h4 id="movies-by-label">Movies By Format</h4>
                  <div id="formatChart" style="height: 350px; width: 100%;"></div>
               </div>
               <div class="col-xs-12 col-sm-6">
                  <h4 id="movies-by-label">Movies By Certificate</h4>
                  <div id="certificateChart" style="height: 350px; width: 100%;"></div>
               </div>
            </div>

            @include('segments.layout.padding')

            <div class="row">
               <div class="col-xs-12">
                  <h4 id="movies-by-label">Movies By Rating</h4>
               </div>
            </div>

            @include('segments.layout.padding')

            <div class="row">
               <div class="col-xs-12">
                  <div id="ratingChart" style="height: 350px; width: 100%;"></div>
               </div>
            </div>

            @include('segments.layout.padding')

            <div class="row">
               <div class="col-xs-12">
                  <h4 id="movies-by-label">Movies By Genre</h4>
               </div>
            </div>

            @include('segments.layout.padding')

            <div class="row">
               <div class="col-xs-12">
                  <div id="genreChart" style="height: 600px; width: 100%;"></div>
               </div>
            </div>

            @include('segments.layout.padding')

         </div>

      </div>

      {!! Html::script(elixir('js/mymdb.js')) !!}
      {!! Html::script('js/canvas.js') !!}
      {!! Html::script('js/welcome.js') !!}

      @include('segments.layout.padding')

   </body>

</html>
