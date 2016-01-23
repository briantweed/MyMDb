@extends('app')

{{-- Page Title --}}
@section('title')
   All Genres
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
            <div class="col-xs-offset-2 col-xs-3"><i>BluRay :</i></div>
            <div class="col-xs-7">{{$data->bluray_total}}</div>
         </div>
         <div class="row">
            <div class="col-xs-offset-2 col-xs-3"><i>DVD :</i></div>
            <div class="col-xs-7">{{$data->dvd_total}}</div>
         </div>
         </br>
         @for($x=10;$x>0;$x--)
            {{--*/ $var = "rating_".$x."_total" /*--}}
            <div class="row">
               <div class="col-xs-5"><b>Rating of {{$x}} :</b></div>
               <div class="col-xs-7">{{$data->$var}}</div>
            </div>
         @endfor
      </div>
   </div>



@stop
