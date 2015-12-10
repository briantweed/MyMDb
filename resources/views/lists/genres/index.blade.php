@extends('app')


{{-- Page Title --}}
@section('title')
   All Genres
@stop


{{-- Page Heading --}}
@section('heading')
   <h1>Genres</h1>
@stop


{{-- Main Body --}}
@section('content')

   <div class="row">
      <div class="col-xs-12">
         <ul class="xs-block-grid-4">
            @foreach($genres as $genre)
               <li class="movie">
                  {{$genre->genre_id}}) {{$genre->genre_type}}
               </li>
            @endforeach
         </ul>
      </div>
   </div>



@stop
