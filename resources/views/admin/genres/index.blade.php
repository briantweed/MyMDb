@extends('app')


{{-- Page Title --}}
@section('title')
   All Genres
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
         <ul class="xs-block-grid-4">
            @foreach($genres as $genre)
               <li>
                  {{$genre->genre_id}}) {{$genre->genre_type}}
               </li>
            @endforeach
         </ul>
      </div>
   </div>



@stop