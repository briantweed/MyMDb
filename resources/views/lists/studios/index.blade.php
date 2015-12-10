@extends('app')


{{-- Page Title --}}
@section('title')
   All Studios
@stop


{{-- Page Heading --}}
@section('heading')
   <h1>Studios</h1>
@stop


{{-- Main Body --}}
@section('content')

   <div class="row">
      <div class="col-xs-12">
         <ul class="xs-block-grid-4">
            @foreach($studios as $studio)
               <li class="movie">
                  {{$studio->studio_id}}) {{$studio->studio_name}}
               </li>
            @endforeach
         </ul>
      </div>
   </div>



@stop
