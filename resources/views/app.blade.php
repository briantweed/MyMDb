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

         <div class="main-title">
            <div class="row">
               <div class="col-xs-12">
                  @yield('heading')
               </div>
            </div>
         </div>

         @include('segments.nav')

      </div>

      <div class="test">
         <div class="container">
            <div class="row row-nav">
               <div class="col-xs-8">
                  {!! $movies->render() !!}
               </div>
               <div class="col-xs-4">
                  <div class="input-group">
                     <input type="text" class="form-control" placeholder="Search...">
                     <span class="input-group-btn">
                        <button class="btn btn-info" type="button">Go</button>
                     </span>
                  </div>
               </div>
            </div>
         </div>
      </div>

      <div class="container">
         <div class="main-content">
            @yield('content')
         </div>

         {!! Html::script('js/jquery.min.js') !!}
         {!! Html::script('js/bootstrap.min.js') !!}

         <script type="text/javascript" >
            $(document).ready( function() {
               $('[data-toggle="tooltip"]').tooltip({
                  delay: { "show": 500, "hide": 100 }
               });
            });
         </script>

         @yield('jquery')
      </div>

   </body>

</html>
