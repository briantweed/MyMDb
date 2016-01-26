{{-- left column --}}
<div class="{{env('LEFT_COLUMN')}}">

   {{-- cover image --}}
   <div class="row">
      <div class="col-xs-12">
         @if(isset($values->image) && $values->image!="")
            <img id="movie-poster" class="img-responsive img-rounded" src="{{$values->image}}" />
         @else
            <img id="movie-poster" class="img-responsive img-rounded" src="http://placehold.it/300x450/cccccc/ffffff?text=no+image">
         @endif
      </div>

   </div>

   <div class="side-buttons">

      {{-- delete button --}}
      @if( Request::is('movies/*/edit'))
         <hr/>

         @include('segments.buttons.delete')
      @endif

      {{-- padding --}}
      @include('segments.layout.padding')

   </div>

</div>
{{-- end of left column --}}

{{-- right column --}}
<div class="{{env('RIGHT_COLUMN')}}">

   @if(isset($message))
      <div class="col-xs-12 alert alert-dismissible alert-danger">
         <button type="button" class="close" >
            <span aria-hidden="true">&times;</span>
         </button>
         {{$message}}
      </div>
   @endif

   {{-- errors column --}}
   @if($errors->any())
      <div class="col-xs-12 alert alert-danger">
         * There are errors with your form
      </div>
   @endif

   <div class="row">

      <div class="col-xs-12">
         <h1>Add New Movie</h1>
      </div>
   </div>

   <div class="panel panel-primary" style="margin-bottom: 27px">
      <div class="panel-heading">
         {!! Form::open(['url'=>'api', 'id'=>'imdb_movie_search_form']) !!}
         <div class="col-xs-3" style="padding-top: 7px">
            {!! Form::label('title', 'Search IMDb: ') !!}
         </div>
         <div class="col-xs-4" style="padding: 0px 8px 0 0" data-toggle='tooltip' data-placement='top' title='required'>
            {!! Form::text('title', '', ['class'=>'form-control', 'placeholder'=>'title ...']) !!}
         </div>
         <div class="col-xs-2" style="padding: 0px 8px 0 0" data-toggle='tooltip' data-placement='top' title='optional'>
            {!! Form::text('year', '', ['class'=>'form-control', 'placeholder'=>'year ...']) !!}
         </div>
         <div class="col-xs-1" style="padding: 0px" data-toggle='tooltip' data-placement='top' title='rating'>
            {!! Form::text('rating', '', ['class'=>'form-control', 'placeholder'=>'#']) !!}
         </div>
         {!! Form::close() !!}
         <div class="col-xs-2">
            <button id="imdb_movie_search" type="button" class="btn btn-block btn-warning">search</button>
         </div>
         <div style="clear:both"></div>
      </div>
   </div>

   <hr/><br/>

   {!! Form::open(['url'=>'movies','files' => true]) !!}
      @include('segments.forms.form_builder')
      @include('segments.forms.submit')
   {!! Form::close() !!}

   @include('segments.layout.padding')

</div>
