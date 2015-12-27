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
      <meta name="apple-mobile-web-app-status-bar-style" content="black">
      <meta name="apple-mobile-web-app-title" content="MyMDb">
      <meta name="mobile-web-app-capable" content="yes">
      <meta name="_token" content="{!! csrf_token() !!}" />

      <link rel="apple-touch-icon-precomposed" sizes="152x152" href="{{ URL::asset('images/app-icon.png') }}">

      <link rel="shortcut icon" href="{{ URL::asset('favicon.ico') }}">
      <link rel="shortcut icon" href="{{ URL::asset('myicon.ico') }}">

      {!! Html::style(elixir('css/mymdb.css')) !!}

   </head>

   <body data-base="{{env('BASE_PATH')}}">

      @include('segments.nav')

      @if(Request::is('admin*'))
          @include('segments.subnav_admin')
      @else
          @include('segments.subnav_main')
      @endif

      <div class="container">

         <div class="main-content">
            @yield('content')
         </div>

         {!! Html::script(elixir('js/mymdb.js')) !!}

         @yield('extensions')

         <script>
            @yield('jquery')
         </script>

      </div>

   </body>

   <footer style="padding:40px 0;background:#121222;border-top:10px double #fff;color:#f2f2f2;text-align:right">
      <div class="container">
         <div class="row">
            <div class="col-sx-12">
               &copy;<?php echo date("Y"); ?> brtweed designs
            </div>
         </div>
      </div>
   </footer>

</html>
