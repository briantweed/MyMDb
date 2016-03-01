@extends('app')

@section('title')
   Test Page
@stop

{{-- Main Body --}}
@section('content')

   <style>

      body {
         font-size: 14px;
      }

      div.flex-div {
         font-size: 100%;
         display: inline-flex;
         align-items: center;
         justify-content: center;
         transform: rotateZ(45deg);
         width: 4em;
         height: 4em;
         background: #678aab;
         border-radius: .5em;
         color: #fafafa;
         box-shadow: 0 0 0 .3em #fff, 0 0 0 .6em #477cad;
         margin: 2em;
      }

      div.child-div {
         font-size: 2.5em;
         transform: rotateZ(-45deg);
      }

      div.icon-div.front {
         animation: spin 2.5s infinite linear 1s;
         backface-visibility: hidden;
         position: absolute;
      }

      div.icon-div.back {
         transform: rotateY(180deg);
         animation: backspin 2.5s infinite linear 1s;
         backface-visibility: hidden;
      }

      @keyframes spin {
        0%   { transform: rotateY(0deg); }
        100% { transform: rotateY(359deg); }
      }

      @keyframes backspin {
        0%   { transform: rotateY(180deg); }
        100% { transform: rotateY(-179deg); }
      }

   </style>

   <div class="row">
      <div class="col-xs-12">

         <div class="flex-div">
            <div class="child-div">
               <div class="icon-div front">
                  <i class="ft icon-empire"></i>
               </div>
               <div class="icon-div back">
                  <i class="ft icon-rebel"></i>
               </div>
            </div>
         </div>
         <div class="flex-div">
            <div class="child-div">
               <div class="icon-div front">
                  <i class="ft icon-rebel"></i>
               </div>
               <div class="icon-div back">
                  <i class="ft icon-empire"></i>
               </div>
            </div>
         </div>

      </div>
   </div>

@stop

@section('extensions')

@stop
