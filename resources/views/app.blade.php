<!DOCTYPE html>

<html lang="en">

   <head>
      <meta charset="UTF-8">
      <title>@yield('title')</title>

      <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/foundation.min.css') }}" />
      <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/fontello.css') }}" />
      <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/main.css') }}" />
   </head>

   <body>

      <div class="navigation">
         @yield('navigation')
      </div>

      <div class="row align-center">
         <div class="columns no-padding small-11 medium-11 large-12">
            <h2>@yield('heading')</h2>
         </div>
      </div>

      <div class="container">
         @yield('content')
      </div>

      <script type="text/javascript" src="js/jquery.min.js"></script>
      @yield('jquery')

   </body>

</html>
