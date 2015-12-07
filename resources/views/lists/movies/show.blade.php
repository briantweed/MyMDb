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
   <br/>
   <a href="{{ action('MovieController@index') }}">back</a>

@stop
