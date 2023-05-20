<!DOCTYPE html>
<html lang="en">
  <head>
    <title>TekporAcademy -Quiz {{  str_replace("_", " ", $quizName->title) }}</title>
    <meta property="og:image" content="https://tekporacademy.tk/images/bg_1.jpg" />
    @include('include/head')
    <style>
    
    .working {
  -webkit-animation: 2s linear infinite condemned_blink_effect; // for Safari 4.0 - 8.0
  animation: 2s linear infinite condemned_blink_effect;
}
@-webkit-keyframes condemned_blink_effect { // for Safari 4.0 - 8.0
  0% {
    color: red;
  }
  50% {
    color: white;
  }
  100% {
    color: red;
  }
}
@keyframes condemned_blink_effect {
    0% {
    color: red;
  }
  50% {
    color: white;
  }
  100% {
    color: red;
  }
}
#myVideo {
  width: 100%;
  align-content: center;

}

.myVideo {
  width: 100%;
  align-content: center;

}
/* Add som content at the bottom of the video/page */
.content {
  position: relative;
  bottom: 0;
  background: rgba(0, 0, 0, 0.5);
  color: #f1f1f1;
  width: 100%;
  padding: 20px;
}

/* Style the button used to pause/play the video */
#myBtn {
  width: 200px;
  font-size: 18px;
  padding: 10px;
  border: none;
  background: #000;
  color: #fff;
  cursor: pointer;
}

#myBtn:hover {
  background: #ddd;
  color: black;
} 
    #imadim {
      border-radius: 50%;
    }
    </style>
  </head>
  <body class="code">



<?php 
  use App\flagSolution;
?>

    @include('include.header')
    
    <section class="hero-wrap hero-wrap-2" style="background-image: url('{{ asset('images/uni.jpg') }}');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h3 class="mb-2 bread">{{  str_replace("_", " ", $quizName->title) }}</h3>
             <p class="breadcrumbs"><span class="mr-2"><a href="../../home">Home <i class="ion-ios-arrow-forward"></i></a></span> <span class="mr-2"><a href="../../Games">Games<i class="ion-ios-arrow-forward"></i></a></span> <span><a href="../../Games">{{  $quizName->course }} <i class="ion-ios-arrow-forward"></i></a></span>  <span><a href="/quizname">{{str_replace("_", " ", $quizName->title)}}><i class="ion-ios-arrow-forward"></i></a></span> <span ><a href="name">Learning <i class="working" style="font-size:100px">.</i></a></span></p>
          </div>
        </div>
      </div>
    </section>

    <section class="container-fluid">
    <div class="jumbotron" > 
    <h5 class="display-5"><u>{{str_replace("_", " ", $quizName->title)}}</u></h4>
   <div class="" id="top">

   
    <div class="row">
        
        <div class="col-md-4">
            <i class="fas fa-h3   ">customize</i><br>
            USAGE:( <span id="usage">Unfriendly</span> )<br>
            <div class="btn-group" role="group" aria-label="...">
                <button type="button" id="friendly" class="btn btn-primary" onclick="customEvent('usage','friendly');usage('friendly')">Friendly</button>
                <button type="button" id="unfriendly" class="btn btn-primary" onclick="customEvent('usage','unfriendly');usage('unfriendly')">Unfriendly</button>
                </div>
                    </div>
    </div>

      
    
    <hr class="my-2">
    
    <div class="row">
        <div class="col-md-4">
            <h3>TIMMER:</h3>
            <p>count down: <span id="H" style="font-size:25px">{{  $quizName->H }} </span> <span class="working" style="color:white">:</span> <span id="M" style="font-size:25px">{{  $quizName->M }}</span> <span class="working" style="color:white">:</span> <span id="S" style="font-size:25px"> {{  $quizName->S }}</span></p>
            <p class="lead">
                <a class="btn btn-primary btn-lg" id="puse" onclick="stopTiming()" style="display:none" role="button">STOP TIMMER</a>
            </p>
        </div>
        <div class="col-md-4">
            <h3>SCORE BOARD</h3>
            <div>
<span id="scoreBoard" class="text-success" style="font-size:50px" > <span id="scoreing">NA</span> %</span>
            </div>
        </div>
        <div class="col-md-4">
            <h3>QUESTION TAG:</h3>
            <div class="row">
                
                <br>
                <div></div>
                <script>
                    for (let index = 1; index < 11; index++) {
                       
                    document.write("<div class='tag-widget post-tag-container mb-5 mt-5'><div class='tagcloud'><a href='#question"+index+"' class='tag-cloud-link sm'>"+index+"</a></div></div>");
                   
                    }
                </script>
                </div>
              
            </div>
        </div>
    </div>
 
</div>
</div>
<input type="text" style="display: none" value="1" name="page" id="repage">
<div  id="response">
  <form method="get"  class="code">
    <input type="hidden" name="usage" id="usageHidden" value="unfriendly">
      <input type="hidden" name="page" id="pagination" value="">
      <input type="hidden" name="title"  value="{{$quizName->title}}">
    <input type="hidden" name="token" id="token" value="IHJUIA34sfafajklmka;555;stF66E3wggfgh%aaf*fafada335f*(sfsf(hhUIcwOIEfy3E">
  
      
          <div class="container" >
            <div style="cursor: pointer text-center">
              <div class="btn-group pagination pagination-lg" role="group" aria-label="...">
                <nav>
                <ul class="pagination">
                                    <li class="page-item disabled" aria-disabled="true">
                            <span class="page-link">« Previous</span>
                        </li>
                                    <li class="page-item" onclick="next('response','{{$quizName->id}}','2','{{$quizName->title}}');startnewtimee()">
                            <a class="page-link" href="#response"  rel="next">Next »</a>
                        </li>
                            </ul>
            </nav>
                 <hr>
                 <hr>
                 
                  </div>
             </div>
             <ol>
               @if ($_GET['title']== $quizName->title)
               @foreach ($questions as $key => $quest)
                 
  
               <div class="row">
                <div class="col-md-8">
                 <i class="fas fa-divide    ">
                     
                     <p>
                       
                     <li id="question{{ $key + 1 }}" style="font-size:20px"> <b> {!!$quest->question!!}</b>  </li> 
                     </p>
                         <input type="radio" name="question{{ $key + 1 }}" id="a" value="{{$quest->option1_code}}"> {!!$quest->option1!!}<br>
                         <input type="radio" name="question{{ $key + 1 }}" id="a"  value="{{$quest->option2_code}}"> {!!$quest->option2!!} <br>
                         <input type="radio" name="question{{ $key + 1 }}" id="a" value="{{$quest->option3_code}}"> {!!$quest->option3!!} <br>
                         <input type="radio" name="question{{ $key + 1 }}" id="a" value="{{$quest->option4_code}}"> {!!$quest->option4!!} <br>
                         <input type="radio" name="question{{ $key + 1 }}" id="a" value="{{$quest->option5_code}}"> {!!$quest->option5!!}
     <br>
     <br>
                         <input type="button" id="disableSide{{ $key + 1 }}" style="display:none" onclick="solution('solution{{ $key + 1 }}')"  value="Show Answer">
                     <hr>
                 </i>
                
                </div>
                <div class="col-md-4">
                    <i class="fas fa-h3    "> <u>Solution</u> </i>

                    <div id="solution{{ $keyed =  $key + 1 }}" style="display:none">
@if (@$_GET["question$keyed"] != 1)

  <b class="text-danger"> <em> {!!$quest->solution!!}</em> </b> 
@else
  <b> <em> {!!$quest->solution!!}</em> </b> 
@endif

@if (isset(Auth::user()->id))

<br>
<br>

<div>

  
  <?php

     $flaged =  flagSolution::where('questionsgid',$quest->id)->take(1)->orderBy('id','desc')->get();
  ?>
  <div style="border: solid black 2px;border-radius: 5px">
    @foreach ($flaged as $item)
    <div class="container" >
      <p class=" text-small text-success">Flaged by {{$item->user}}</p>
          <p class="lead">{{$item->text}}</p>
          <hr class="my-4">
  </div>
    @endforeach
  
  
  <div id="flagresponse{{$key}}">
  
  </div>
  </div>


  <div class="text-center" id="flaf{{$key}}">
  <span class="btn-md btn btn-primary" onclick="hideFlag('flaf{{$key}}','flafForm{{$key}}')">FLAG <i class="ion-md-flag"></i></span>
  <span class="btn-md btn btn-primary" data-toggle="modal" data-target="#fladgs" onclick="seeFlas('{{$quest->id}}','lFlag')">SEE <i class="ion-ios-flag"></i></span>
</div>


<div style="display: none" id="flafForm{{$key}}">

    
<textarea name="flagq" id="flagged{{$key}}" name="text"  placeholder="Suggest your answer"  style="width: 100%; font-family:monospace;border: 1px block black;border-radius: 5px"></textarea>

<div  style="text-align: center">
  <br>
  <div class="text-center">
    <span type="submit" onclick="flagNow('{{$quest->id}}','flagged{{$key}}','flagresponse{{$key}}')"  name="flag" value="flaged" class="btn-md btn btn-primary">FLAG <i class="ion-md-flag"></i></span>
     <span  class="btn-md btn btn-primary" onclick="hideFlag('flafForm{{$key}}','flaf{{$key}}')">CANCEL <i class="ion-md-flag"></i></span>
  </div>

</div>
</div>

@else
<br>
<div class="text-danger text-center">To flag this question <br> <a class='text-danger'  title='Refresh the page after SIGN UP' href='/AQuizStart/{{$quizName->id}}?title={{$_GET['title']}}'>SIGN UP</a></div>

@endif

                  </div>
     




                </div>
            </div>
          </div>
    
               @endforeach
              
               @endif
             
             </ol>
             
             
      <br>
      <div class="text-center">
          <input class="btn btn-lg btn-primary" type="submit" id="submited" value="SUBMIT"><br/><br>
          <button type="button" class="btn btn-primary" onclick="">  <a href="#question1" style="color:white">Review</a> </button>
      
          <br>
          <br>
          <br>
          <div style=" cursor: pointer">
           <div class="btn-group pagination pagination-lg" role="group" aria-label="...">
             <nav>
             <ul class="pagination">
                                 <li class="page-item disabled" aria-disabled="true">
                         <span class="page-link">« Previous</span>
                     </li>
                                 <li class="page-item" onclick="next('response','{{$quizName->id}}','2','{{$quizName->title}}');startnewtimee()">
                         <a class="page-link" href="#response"  rel="next">Next »</a>
                     </li>
                         </ul>
         </nav>
              <hr>
              <hr>
              
               </div>
          </div>
        </div>
      
            
              
              <br>
              <br>
          </div>
              
  </form>
</div>

    </section>

    <div class="modal fade" id="fladgs" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
<h4 class="text-center">List of Flags</h4>
<div class="content" style="background: white;border: solid black 2px;border-radius: 5px">
 <div id="lFlag">

 </div>
</div>
                    <div class="modal-footer">
                      </div>
              </div>
          </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
  </div>
	
    @include('include/footer')
    @include('include/down')

    
    
<script src="{{ asset('js/quzievent.js') }}"></script>

<script type="text/javascript">
	
  $(document).ready(function() {
    $('body').bind('cut copy paste', function (e) {
      e.preventDefault();
    })
    $(".code").on("contextmenu", function(e) {
      return false;
    })
  })
  $(document).keydown(function (event) {
    if (event.keyCode == 123) { 
        return false;
    } else if (event.ctrlKey && event.shiftKey && event.keyCode == 73) {     
        return false;
    }  else if (event.ctrlKey && event.shiftKey && event.keyCode == 69) {     
              return false;
          }
});
  </script>
  <script type="text/javascript">
          function seacher(div){
   document.getElementById('onlines').style.display='block';
 if (window.XMLHttpRequest) {
 var coun = new XMLHttpRequest;
 }else{
 var coun = new ActiveXObject('Microsoft XMLHTTP');
 }
 coun.onreadystatechange = function(){
 if(this.readyState == 4 && this.status == 200){
 document.getElementById(div).innerHTML = this.responseText;
 }
 }
 var sear = document.getElementById('search');
 var requst = `searched=${sear.value}`;
 var urled = "{{ URL::to('search?')}}"+requst;
 coun.open('Get',urled );
 coun.setRequestHeader('content-type','application/x-www-form-urlencoded');
 coun.send(); 
 message.value = "";
 };

 function next(res,div,page,title){
  let url = window.location.search;
  let query = new URLSearchParams(url);
  if ( query.get('token') == "IHJUIA34sfafajklmka;555;stF66E3wggfgh%aaf*fafada335f*(sfsf(hhUIcwOIEfy3E") {
    window.location.replace('/QuizStart/'+div+'?title='+title+'&page='+page);
        }else{
   document.getElementById('onlines').style.display='block';
 if (window.XMLHttpRequest) {
 var coun = new XMLHttpRequest;
 }else{
 var coun = new ActiveXObject('Microsoft XMLHTTP');
 }
 coun.onreadystatechange = function(){
 if(this.readyState == 4 && this.status == 200){
 document.getElementById(res).innerHTML = this.responseText;
 }
 }
 
 var requst = `id=${div}&page=${page}&title=${title}`;
 var urled = "{{ URL::to('aquestion?')}}"+requst;
 coun.open('Get',urled );
 coun.setRequestHeader('content-type','application/x-www-form-urlencoded');
 coun.send(); 
 }};


 function hideFlag(self,other) {
  document.getElementById(self).style.display = "none";
  document.getElementById(other).style.display = "Block";
 };

 function flagNow(solotoinid,text,response){
 if (window.XMLHttpRequest) {
 var coun = new XMLHttpRequest;
 }else{
 var coun = new ActiveXObject('Microsoft XMLHTTP');
 }
 coun.onreadystatechange = function(){
 if(this.readyState == 4 && this.status == 200){
 document.getElementById(response).innerHTML = this.responseText;
 }
 }
 var sear = document.getElementById(text);
 var requst = `text=${sear.value}&solotoinid=${solotoinid}`;
 var urled = "{{ URL::to('flagQuestion?')}}"+requst;
 coun.open('Get',urled );
 coun.setRequestHeader('content-type','application/x-www-form-urlencoded');
 coun.send(); 
 sear.value = "";
 }
 function seeFlas(id,response){
  if (window.XMLHttpRequest) {
 var coun = new XMLHttpRequest;
 }else{
 var coun = new ActiveXObject('Microsoft XMLHTTP');
 }
 coun.onreadystatechange = function(){
 if(this.readyState == 4 && this.status == 200){
 document.getElementById(response).innerHTML = this.responseText;
 }
 }
 var requst = `solotoinid=${id}`;
 var urled = "{{ URL::to('listflag?')}}"+requst;
 coun.open('Get',urled );
 coun.setRequestHeader('content-type','application/x-www-form-urlencoded');
 coun.send(); 
 }
      </script>
  </body>
</html>