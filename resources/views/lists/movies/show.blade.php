@extends('app')

@section('title')
   {{ $name }}
@stop

@section('content')

   <h2>{{$name}}</h2>
   <table>
      <tr><td width="100px">Released :</td><td width="200px">{{$released}}</td><td width="450px" rowspan="5">{{$description}}</td></tr>
      <tr><td>Running Time :</td><td>{{$running_time}} mins</td></tr>
      <tr><td>Certificate :</td><td>{{$certificate}}</td></tr>
      <tr><td>Format :</td><td>{{$format}}</td></tr>
      <tr><td>Studio :</td><td>{{$studio}}</td></tr>
   </table>
   <br/><br/>
   
   <h4>Actors</h4>
   <table>
      @foreach( $cast as $actor )
         <tr><td width="150px">{{$actor->person_forename}} {{$actor->person_surname}} </td><td width="150px">{{$actor->character_name}}</td></tr>
      @endforeach
   </table>
   <br/><br/>

   <a href="{{ action('MovieController@index') }}">back</a>

@stop
