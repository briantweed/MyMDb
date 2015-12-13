<div class="row form-group @yield('errorClass')">
   <div class="col-xs-12 col-sm-4 col-md-4 col-lg-3"><b>@yield('label')</b></div>
   <div class="col-xs-12 col-sm-8 col-md-8 col-lg-9 @yield('input_class')">@yield('input')</div>
</div>

@yield('errorMessage')
