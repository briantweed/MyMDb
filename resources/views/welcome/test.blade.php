@extends('app')

@section('title')
   Test Page
@stop

{{-- Main Body --}}
@section('content')

   <style>

      @font-face {
      	font-family: 'Coves';
      	font-style: normal;
      	font-weight: 400;
      	src: url('../../font/Coves.otf');
      }
      @font-face {
      	font-family: 'Veneer';
      	font-style: normal;
      	font-weight: 400;
      	src: url('../../font/Veneer.ttf');
      }
      @font-face {
      	font-family: 'OpenSans';
      	font-style: normal;
      	font-weight: 400;
      	src: url('../../font/OpenSans.ttf');
      }

      body {
         font-size: 13px;
         background: #3b3838;
         color: #ffffff;
      }

      h1{
         font-family: Veneer !important;
         border:none !important;
         font-size: 10em;
         line-height: 0.9;
         margin-bottom: 0;
         text-shadow: -2px 2px 4px #000;
      }

      h2{
         font-family: Coves !important;
         border:none !important;
         font-size: 4em;
         margin: 0px 0 20px;
         text-shadow: -2px 2px 4px #000;
      }

      h3{
         font-family: Veneer !important;
         border:none !important;
         font-size: 3em;
      }

      h4{
         border: none !important;
         font-weight: bold;
         font-size: 1.5em
      }

      p{
         font-family: OpenSans !important;
         font-size: 1.2em;
         line-height: 2;
      }

      div.title-section { background: #4b545e; background-image: url('/images/diamond-bg.png')}

      div.flex-div {
         font-size: 100%;
         display: inline-flex;
         align-items: center;
         justify-content: center;
         transform: rotateZ(45deg);
         width: 100px;
         height: 100px;
         background: #69f;
         border-radius: .5em;
         color: #fafafa;
         box-shadow: 0 0 0 .3em #333, 0 0 0 .6em #69f;
         margin: 4em 0 4em 2.5em;
      }

      div.flex-div.small {
         width:40px;
         height:40px;
         margin:0;
         box-shadow: 0 0 0 .2em #333, 0 0 0 .4em #69f;
      }

      div.child-div {
         font-size: 4em;
         transform: rotateZ(-45deg);
      }

      div.child-div.small {
         font-size: 2em;
      }

      div.icon-div.front {
         animation: spin 2.5s infinite linear 1s;
         backface-visibility: hidden;
         -webkit-backface-visibility: hidden;
         position: absolute;
      }

      div.icon-div.back {
         transform: rotateY(180deg);
         animation: backspin 2.5s infinite linear 1s;
         backface-visibility: hidden;
         -webkit-backface-visibility: hidden;
      }

      @keyframes spin {
        0%   { transform: rotateY(0deg); }
        100% { transform: rotateY(359deg); }
      }

      @keyframes backspin {
        0%   { transform: rotateY(180deg); }
        100% { transform: rotateY(-179deg); }
      }

      #timeline {
      	width: 100%;
        margin: 30px auto;
      	position: relative;
        padding: 0 10px;
     }
      #timeline::before {
      		content:"";
      		width: 3px;
      		height: 100%;
      		background: #69f;
      		left: 0%;
      		top: 0;
      		position: absolute;
      	}
      .timeline-item {
         display:block;
         position: relative;
         margin-bottom: 3em;
      }

      .timeline-header {
         margin-left: 30px
      }

      .timeline-content h4{
         margin: 0 0 0.5em 16px;
      }
      .timeline-content h4 span{
         font-weight: bold;
         font-size: 70%;
         font-family: "OpenSans"
      }

      .timeline-content p {
         margin-left: 1em;
      }

      .timeline-content::before {
            content: '';
				position: absolute;
				left: -7px;
				top: 3px;
				width: 0;
				height: 0;
				border-top: 7px solid transparent;
				border-bottom: 7px solid transparent;
				border-left:7px solid #69f
      }

      .timeline-icon {
         position: absolute;
			top: 2px;
			left: -19px;
      }


      @media  (max-width: 767px) {

         div.flex-div { margin: 4em 0 4em 0; }
         .xs-text-center { text-align: center }

      }

      @media (min-width: 768px) and (max-width: 991px) {

         h1 { font-size: 8em }
         h2 { font-size: 3.2em }

      }

      @media (min-width: 992px) and (max-width: 1199px) {

      }


      @media (min-width: 1200px) {

      }

   </style>

   <div class="row">
      <div class="col-xs-12">
         <br/><br/><br/>
      </div>
   </div>
</div>
</div>

<div class="title-section">
   <div class="container">
      <div class="row">
         <div class="col-xs-12 col-sm-3 col-md-3 col-lg-2 xs-text-center">
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
         </div>
         <div class="col-xs-12 col-sm-9 col-md-9 col-lg-10 xs-text-center">
            <h1>Brian Tweed</h1>
            <h2>web designer / developer</h2>
         </div>
      </div>
   </div>
</div>

   <div class="container">

      <div class="row">

         <div id="left-column" class="col-xs-4">

            <div class="row">
               <div class="col-xs-12">
                  <h3>About Me</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc libero magna, tristique eget placerat a,
                     eleifend quis ligula. Praesent in ante nec lorem sollicitudin vulputate. Vestibulum malesuada vitae orci
                     id tristique. Phasellus est augue, posuere a gravida eu, pretium vel dolor. Cras maximus aliquet turpis,
                     in tempor tortor cursus vel. Quisque feugiat at nibh sed elementum. Sed elementum dolor id nibh convallis
                     fermentum. Vestibulum vel quam suscipit est semper tincidunt. Nullam fermentum sagittis ipsum ac finibus.
                     Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.
                  </p>
               </div>
            </div>

         </div> {{-- left column --}}

         <div id="right-column" class="col-xs-offset-1 col-xs-7">

            <div class="row">
               <div class="col-xs-12">
                  <div id="timeline">
                     <div class="timeline-header">
                        <h3>Work Experience</h3><br/>
                     </div>
                     <div class="timeline-icon">
                        <div class="flex-div small">
                           <div class="child-div small">
                              <div class="icon-div front">
                                 <i class="ft icon-empire"></i>
                              </div>
                              <div class="icon-div back">
                                 <i class="ft icon-rebel"></i>
                              </div>
                           </div>
                        </div>
                     </div>

                     <div class="timeline-item">
                        <div class="timeline-content">
                           <h4>Instagiv <span>(Jan 2015 - Present)</span></h4>
                           <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc libero magna, tristique eget placerat a,
                              eleifend quis ligula. Praesent in ante nec lorem sollicitudin vulputate.
                              Vestibulum malesuada vitae orci id tristique. Phasellus est augue, posuere a gravida eu, pretium vel dolor.
                           </p>
                        </div>
                     </div>

                     <div class="timeline-item">
                        <div class="timeline-content">
                           <h4>Instagiv</h4>
                           <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc libero magna, tristique eget placerat a,
                              eleifend quis ligula. Praesent in ante nec lorem sollicitudin vulputate.
                              Vestibulum malesuada vitae orci id tristique. Phasellus est augue, posuere a gravida eu, pretium vel dolor.
                           </p>
                        </div>
                     </div>

                  </div> <!-- timeline -->
               </div>
            </div>

         </div> <!-- right column -->

      </div>

   </div> <!-- container -->




@stop

@section('extensions')

@stop
