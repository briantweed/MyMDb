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
            @include('segments.links.genres')
            @include('segments.links.studios')
            @include('segments.links.keywords')
            @include('segments.links.viewings')
            @include('segments.links.quotes')<hr/>
            @include('segments.links.add_movie')
            @include('segments.links.add_person')<hr/>
            @include('segments.links.seed')<hr/>
            @include('segments.links.logout')
         </div>
      </div>
      <div class="col-xs-offset-1 col-xs-9">
         @if(session('status'))
            <div class="col-xs-12 alert alert-dismissible alert-success">
               <button type="button" class="close" >
                  <span aria-hidden="true">&times;</span>
               </button>
               {{ session('status') }}
            </div>
         @endif
         <div id="admin-details">
            @include('segments.layout.padding')
            <a href="{{ action('TestController@index') }}"><i class="ft ft-2x icon-actor"></i> Test Page</a>
            @include('segments.layout.padding')
            <div class="row">
               <div class="col-xs-5"><b>Total movies in collection :</b></div>
               <div class="col-xs-7"><span class="add-commas">{{$data->movie_total}}</span></div>
            </div>
            <div class="row">
               <div class="col-xs-5"><b>Total running time :</b></div>
               <div class="col-xs-7"><span class="add-commas">{{$data->running_total}}</span> minutes</div>
            </div>
            <div class="row">
               <div class="col-xs-5"><b>Time required to watch :</b></div>
               <div class="col-xs-7">{{$data->watching_time}}</div>
            </div>
            @include('segments.layout.padding')
            <div class="row">
               <div class="col-xs-5"><b>Total actors in collection :</b></div>
               <div class="col-xs-7"><span class="add-commas">{{$data->person_total}}</span></div>
            </div>
         </div>
      </div>
   </div>

@stop

@section('extensions')
   {!! Html::script('js/admin.js') !!}
@stop
