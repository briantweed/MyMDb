@extends('app')


{{-- Page Title --}}
@section('title')
   All Studios
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

   @if(session('status'))
      <div class="col-xs-12 alert alert-dismissible alert-success">
         <button type="button" class="close" >
            <span aria-hidden="true">&times;</span>
         </button>
         {{ session('status') }}
      </div>
   @endif

   <div class="row">
      <div class="col-xs-12">
         <ul class="xs-block-grid-4">
            @foreach($studios as $studio)
               <li>
                  {{$studio->studio_id}}) {{$studio->studio_name}}
               </li>
            @endforeach
         </ul>
      </div>
   </div>



@stop
