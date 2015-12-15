<!DOCTYPE html>

<html lang="en">

   <head>
      <meta charset="UTF-8">
      <title>@yield('title')</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/everything.css') }}" />
   </head>

   <body>

      @include('segments.nav')

      <div class="container">

         <div class="main-content">
            @yield('content')
         </div>

         {!! Html::script('js/jquery.min.js') !!}
         {!! Html::script('js/bootstrap.min.js') !!}
         {!! Html::script('js/waves.js') !!}

         <script type="text/javascript" >

            $(document).ready( function() {

               $('[data-toggle="tooltip"]').tooltip({
                  delay: { "show": 500, "hide": 100 }
               });

               $('.daforce').click( function() {
                  alert("The Force is strong with this one.");
               });

               // $('#ajaxContent').load('http://www.example.com/paginated/data');
               //
               // $('.pagination a').on('click', function (event) {
               //     event.preventDefault();
               //     if ( $(this).attr('href') != '#' ) {
               //         $("html, body").animate({ scrollTop: 0 }, "fast");
               //         $('#ajaxContent').load($(this).attr('href'));
               //     }
               // });

            });
         </script>

         <script>
            @yield('jquery')
         </script>

      </div>

   </body>

</html>
