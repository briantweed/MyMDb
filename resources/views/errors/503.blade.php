<!DOCTYPE html>

<html lang="en">

   <head>
      <meta charset="UTF-8">
      <title>@yield('title')</title>
      <meta name="description" content="MyMDb">
      <meta name="author" content="Brian Tweed">
      <meta name="format-detection" content="telephone=no"/>

      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, target-densityDpi=device-dpi">
      <meta name="apple-mobile-web-app-capable" content="yes" />
      <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
      <meta name="apple-mobile-web-app-title" content="MyMDb">
      <meta name="mobile-web-app-capable" content="yes">

      <link rel="apple-touch-icon-precomposed" sizes="152x152" href="{{ URL::asset('images/app-icon.png') }}">

      <link rel="shortcut icon" href="{{ URL::asset('favicon.ico') }}">
      <link rel="shortcut icon" href="{{ URL::asset('myicon.ico') }}">

      {!! Html::style(elixir('css/mymdb.css')) !!}
   </head>

   <body>

      @include('segments.nav')

      <div class="container">

         <div class="main-content">
            <div class="row">
               <div class="col-xs-8 col-xs-offset-2">
                  <p class="error-quote">"It's a scream, baby. Hold a second, we'll be right back."</p>
                  <p class="error-link"><a href="javascript:void(0)">Scream (1996)</a></p>
               </div>
            </div>
         </div>

         {!! Html::script(elixir('js/mymdb.js')) !!}

         <script>
            $('document').ready(function(){
               $('a').click(function(event){
                  event.preventDefault();
               });
            });
         </script>

      </div>

   </body>

</html>
