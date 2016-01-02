@extends('app')


{{-- Page Title --}}
@section('title')
   All People
@stop


{{-- Subnav --}}
@section('subnav-left')
   @include('segments.links.add_person')
@stop

@section('subnav-right')

@stop


{{-- Main Body --}}
@section('content')

   <div class="row">
      <div class="col-xs-12">
         <ul class="xs-block-grid-3 sm-block-grid-6 md-block-grid-8 lg-block-grid-8">
            @foreach($people as $person)
               <li class="movie text-center">
                  <a href="{{ action('PersonController@show', $person->person_id) }}">
                     @if($person->cover_count == 1)
                        <img class="img-responsive img-rounded lazy" data-original="http://placehold.it/300x450/cccccc/ffffff?text={{$person->cover}}"  />
                     @else
                        <img class="img-responsive img-rounded lazy" data-original="{{asset($person->cover)}}"  />
                     @endif
                     <span class="title-wrapper hidden-xs">{{$person->forename}} {{$person->surname}}</span>
                  </a>
               </li>
            @endforeach
         </ul>
      </div>
   </div>

@stop
