
@extends('app')

@section('title')
   {{$person->forename}} {{$person->surname}}
@stop

@section('subnav-left')
   @include('segments.links.back')
   @include('segments.links.add_person')
   @include('segments.links.edit_person')
@stop

@section('content')

   <div class="row movie">

      <div id="left-hand-column" class="col-xs-12 col-sm-3 col-md-3 col-lg-3">

         <div class="row">
            <div class="col-xs-12">
               @if($person->cover_count == 1)
                  <img class="img-responsive img-rounded" src="http://placehold.it/300x450/cccccc/ffffff?text={{$person->image}}"  />
               @else
                  <img class="img-responsive img-rounded" src="{{asset($person->image)}}" />
               @endif
            </div>
         </div>

         <hr/>

         <div class="side-buttons">
            @include('segments.buttons.edit_person')
            @include('segments.buttons.imdb_person')
            @include('segments.layout.padding')
         </div>

      </div>

      <div class="col-xs-12 col-sm-offset-3 col-sm-9 col-md-offset-3 col-md-9 col-lg-offset-1 col-lg-8">

         @if (session('status'))
             <div class="alert alert-success">
                 {{session('status')}}
             </div>
         @endif

         <div class="row">
            <div class="col-xs-12"><h1>{{$person->forename}} {{$person->surname}}</h1></div>
         </div>

         <br/>

         <div class="row">
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-3"><b>Born</b></div>
            <div class="col-xs-12 col-sm-8 col-md-8 col-lg-9">{{$person->birthday}}</div>
         </div>

         @if($person->deceased)
            <div class="row">
               <div class="col-xs-12 col-sm-4 col-md-4 col-lg-3"><b>Died</b></div>
               <div class="col-xs-12 col-sm-8 col-md-8 col-lg-9">{{$person->deceased}}</div>
            </div>
         @endif

         <div class="row">
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-3"><b>Age</b></div>
            <div class="col-xs-12 col-sm-8 col-md-8 col-lg-9">{{$person->age}}</div>
         </div>

         <div class="row">
            <div class="col-xs-12"><p>{!! $person->bio !!} <a href="http://www.imdb.com/name/{{$person->imdb_id}}/bio" target="_blank">view full bio on IMDb</a></p></div>
         </div>

         @if(count($person->roles)!==0)
            <div class="row">
               <div class="col-xs-12"><h4>Roles</h4></div>
            </div>

            @foreach($person->roles as $role)
               <div class="row">
                  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6"><a href="{{ action('MovieController@show', $role->movie_id) }}"><b>{{$role->name}}</b></a><br/></div>
                  <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4"><i>{{$role->pivot->character}}</i><br/></div>
                  <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">{{$role->released}}</div>
               </div>
            @endforeach

            @include('segments.layout.padding')

         @endif

         @if(count($person->directed)!==0)
            <div class="row">
               <div class="col-xs-12"><h4>Directed</h4></div>
            </div>

            @foreach($person->directed as $job)
               <div class="row">
                  <div class="col-xs-12 col-sm-10 col-md-10 col-lg-10"><a href="{{ action('MovieController@show', $job->movie_id) }}"><b>{{$job->name}}</b></a><br/></div>
                  <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">{{$job->released}}</div>
               </div>
            @endforeach

            @include('segments.layout.padding')

         @endif

         @if(count($person->produced)!==0)
            <div class="row">
               <div class="col-xs-12"><h4>Produced</h4></div>
            </div>

            @foreach($person->produced as $job)
               <div class="row">
                  <div class="col-xs-12 col-sm-10 col-md-10 col-lg-10"><a href="{{ action('MovieController@show', $job->movie_id) }}"><b>{{$job->name}}</b></a><br/></div>
                  <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">{{$job->released}}</div>
               </div>
            @endforeach

            @include('segments.layout.padding')

         @endif

         @if(count($person->scripted)!==0)
            <div class="row">
               <div class="col-xs-12"><h4>Screenplay</h4></div>
            </div>

            @foreach($person->scripted as $job)
               <div class="row">
                  <div class="col-xs-12 col-sm-10 col-md-10 col-lg-10"><a href="{{ action('MovieController@show', $job->movie_id) }}"><b>{{$job->name}}</b></a><br/></div>
                  <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">{{$job->released}}</div>
               </div>
            @endforeach

            @include('segments.layout.padding')

         @endif

         @if(count($person->scored)!==0)
            <div class="row">
               <div class="col-xs-12"><h4>Composer</h4></div>
            </div>

            @foreach($person->scored as $job)
               <div class="row">
                  <div class="col-xs-12 col-sm-10 col-md-10 col-lg-10"><a href="{{ action('MovieController@show', $job->movie_id) }}"><b>{{$job->name}}</b></a><br/></div>
                  <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">{{$job->released}}</div>
               </div>
            @endforeach

            @include('segments.layout.padding')

         @endif

      </div>

   </div>

@stop
