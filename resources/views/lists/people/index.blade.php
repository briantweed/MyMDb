@extends('app')


{{-- Page Title --}}
@section('title')
   All People
@stop


{{-- Page Heading --}}
@section('heading')
   <h1>People</h1>
@stop


{{-- Main Body --}}
@section('content')

   <div class="row">
      <div class="col-xs-12">
         <ul class="xs-block-grid-1">
            @foreach($people as $person)
               <li>
                  {{$person->person_forename}} {{$person->person_surname}}
               </li>
            @endforeach
         </ul>
      </div>
   </div>

@stop
