@extends('app')

{{-- Page Title --}}
@section('title')
   Admin
@stop

{{-- Main Body --}}
@section('content')

   <div class="row">
      <div class="col-xs-2">
         @include('segments.links.add_movie')<br/>
         @include('segments.links.add_person')<br/><hr/>
         @include('segments.links.genres')<br/>
         @include('segments.links.studios')<br/>
         @include('segments.links.keywords')<br/>
         @include('segments.links.viewings')<br/><hr/>
         @include('segments.links.seed')<br/><hr/>
         @include('segments.links.logout')
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
            @include('segments.layout.padding')
            <div class="row">
               <div class="col-xs-5"><b>Total actors in collection :</b></div>
               <div class="col-xs-7">{{$data->person_total}}</div>
            </div>
         </div>
      </div>
   </div>

@stop

@section('extensions')
   {!! Html::script('js/admin.js') !!}
@stop
