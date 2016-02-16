@extends('app')

{{-- Page Title --}}
@section('title')
   Admin
@stop

{{-- Main Body --}}
@section('content')
   @if(session('status'))
      <div class="col-xs-12 alert alert-dismissible alert-success">
         <button type="button" class="close" >
            <span aria-hidden="true">&times;</span>
         </button>
         {{ session('status') }}
      </div>
   @endif

   <div class="row">
      <div class="col-xs-3">
         @include('segments.links.add_movie')<br/><br/>
         @include('segments.links.add_person')<br/><br/>
         @include('segments.links.genres')<br/><br/>
         @include('segments.links.studios')<br/><br/>
         @include('segments.links.keywords')<br/><br/>
         @include('segments.links.viewings')<br/><br/>
         @include('segments.links.seed')<br/><br/><br/>
         @include('segments.links.logout')
      </div>
      <div class="col-xs-9">
         <div id="admin-details">
            <div class="row">
               <div class="col-xs-5"><b>Total movies in collection :</b></div>
               <div class="col-xs-7">{{$data->movie_total}}</div>
            </div>
            <div class="row">
               <div class="col-xs-5"><b>Total running time :</b></div>
               <div class="col-xs-7">{{$data->running_total}} minutes</div>
            </div>
            <div class="row">
               <div class="col-xs-5"><b>Time required to watch :</b></div>
               <div class="col-xs-7">{{$data->watching_time}}</div>
            </div>
         </div>
      </div>
   </div>

@stop
