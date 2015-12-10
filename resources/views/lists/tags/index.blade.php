@extends('app')


{{-- Page Title --}}
@section('title')
   All keywords
@stop


{{-- Page Heading --}}
@section('heading')
   <h1>Keywords</h1>
@stop


{{-- Main Body --}}
@section('content')

   <div class="row">
      <div class="col-xs-12">
         <ul class="xs-block-grid-4">
            @foreach($keywords as $keyword)
               <li>
                  {{$keyword->keyword_id}}) {{$keyword->keyword_word}}
               </li>
            @endforeach
         </ul>
      </div>
   </div>



@stop
