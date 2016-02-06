@extends('app')

{{-- Page Title --}}
@section('title')
   Admin
@stop

{{-- Subnav --}}
@section('subnav-left')


@stop

@section('subnav-right')
   @include('segments.links.logout')
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
         @include('segments.links.genres')<br/><br/>
         @include('segments.links.studios')<br/><br/>
         @include('segments.links.keywords')<br/><br/>
         @include('segments.links.viewings')<br/><br/>
         @include('segments.links.seed')<br/>
      </div>
      <div class="col-xs-9">
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



@stop
