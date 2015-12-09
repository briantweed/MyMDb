<!DOCTYPE html>

<html lang="en">

   <head>
      <meta charset="UTF-8">
      <title>@yield('title')</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/everything.css') }}" />
   </head>

   <body>

      <div class="container">

         <div class="main-navigation">
            @yield('navigation')
         </div>

         <div class="main-title">
            <div class="row">
               <div class="col-xs-12">
                  @yield('heading')&nbsp;
               </div>
            </div>
         </div>

         <div class="main-content">
            @yield('content')
         </div>

         <script type="text/javascript" src="js/jquery.min.js"></script>
         @yield('jquery')

      </div>

   </body>

</html>
