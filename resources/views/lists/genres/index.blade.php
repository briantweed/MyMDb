@extends('app')


{{-- Page Title --}}
@section('title')
   All Genres
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
