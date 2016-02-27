@extends('app')

{{-- Page Title --}}
@section('title')
   Admin
@stop

{{-- Main Body --}}
@section('content')

   <div class="row">
      <div class="col-xs-2">
         <div class="admin-side-links">
            By Decade<br/>
            Chart 2<br/>
            Chart 3<br/>
         </div>
      </div>
      <div class="col-xs-10">
         @if(session('status'))
            <div class="col-xs-12 alert alert-dismissible alert-success">
               <button type="button" class="close" >
                  <span aria-hidden="true">&times;</span>
               </button>
               {{ session('status') }}
            </div>
         @endif

         @include('segments.layout.padding')

         <div id="chart-details">

            <div class="row">
               <div class="col-xs-10">
                  <h4 id="movies-by-label">Movies By Decade</h4>
               </div>
               <div class="col-xs-2">
                  {!! Form::select('select_decade', ['all'=>'All'] + $details->decades, 'all', ['class'=>'form-control', 'id'=>'decadeSelectFilter']) !!}
               </div>
            </div>
            <div class="row">
               <div class="col-xs-12">
                  <div id="yearChart" style="height: 400px; width: 100%;"></div>
               </div>
            </div>

         </div>

         @include('segments.layout.padding')

      </div>
   </div>

@stop

@section('extensions')
   {!! Html::script(elixir('js/mymdb.js')) !!}
   {!! Html::script('js/canvas.js') !!}
   {!! Html::script('js/charts.js') !!}
@stop
