@extends('app')


{{-- Page Title --}}
@section('title')
   Viewing Times
@stop

{{-- Subnav --}}
@section('subnav-left')
   @include('segments.links.genres')
   @include('segments.links.studios')
   @include('segments.links.keywords')
   @include('segments.links.viewings')
@stop

@section('subnav-right')
   @include('segments.links.logout')
@stop

{{-- Main Body --}}
@section('content')
   <div class="row">
      <div class="col-xs-12">
         <ul class="xs-block-grid-1">
            @foreach($viewings as $viewing)
               <li>
                   {{$viewing->movie->name}} : {{$viewing->viewed}}
               </li>
            @endforeach
         </ul>
      </div>
   </div>



@stop
