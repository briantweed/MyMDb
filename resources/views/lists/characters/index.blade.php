@extends('app')


{{-- Page Title --}}
@section('title')
   All Characters
@stop


{{-- Page Heading --}}
@section('heading')
   <h1>Characters</h1>
@stop


{{-- Main Body --}}
@section('content')

   <div class="row">
      <div class="col-xs-12">
         <ul class="xs-block-grid-1">
            @foreach($characters as $character)
               <li>
                  {{$character->character_name}}
               </li>
            @endforeach
         </ul>
      </div>
   </div>

@stop
