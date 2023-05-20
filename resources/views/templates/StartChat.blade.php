<!DOCTYPE html>
<html lang="en">
  <head>
    <title>TekporAcademy - career Guidance Class</title>
	<meta property="og:image" content="https://tekporacademy.tk/images/bg_1.jpg" />
 @include('include/head')
  </head>
  <body ondblclick="scrolling()" class="code">
    @include('include.header')

   <div >

    <input type="text" style="display: none" id="tokencheck" value="{{$_GET['token']}}">
    <?php
use App\ChatRoom;
use App\Adviser;
use Carbon\Carbon;


$ChatRoom = ChatRoom::where('token',$_GET['token'])->get();
$Adviser = Adviser::where('token',$_GET['token'])->take(1)->get();

foreach ($Adviser as $value) {
 $admin_id = $value->Adminid;
 $user_id = $value->Use_id;
}
    ?>
    <section class="ftco-section" style="padding: 0px;">
      
    <div class="container bg-light" style="border-radius: 15px">

        <div class="jumbotron jumbotron-fluid"  style="border-radius: 15px;">
            <div class="container">
                <h4 class="display-6 text-primary">CHAT WITH {{$_GET['to']}}</h4>
<hr>
              <div>
                <ul class="comment-list" id="reponse" >
               
@foreach ($ChatRoom as $item)
<?php
if ($item->sender == Auth::user()->id ) {
  ?>
        <div class="text-right" style="border-radius: 25px; width=80%; background-color:rgb(227, 231, 218);margin-left: 35%;">
      
          <p class="comment-body"  style="margin: 15px;">
            {{$item->message}}
              <br>
              <span class="text-succuss" style="color: rgba(129, 121, 111, 0.575)">@if ($item->user_seen == 1)
                  seen {{Carbon::now('UTC')->createFromTimeStamp(strtotime($item->created_at))->diffForHumans()}}
                  @else
                  Delivered {{Carbon::now('UTC')->createFromTimeStamp(strtotime($item->created_at))->diffForHumans()}}
              @endif</span>
          </p>
  </div>
  <?php
}else {
  ?>
     <div class="text-left" style="border-radius: 25px;background-color:rgb(227, 231, 218);margin-right: 35%;"">
  
          <p class="comment-body" style="margin: 15px;">
              {{$item->message}}
             
              <span class="text-succuss" style="color: rgba(122, 115, 107, 0.726)">
                seen {{Carbon::now('UTC')->createFromTimeStamp(strtotime($item->created_at))->diffForHumans()}}</span>
          </p>
  </div>
  <?php
}
?>
@endforeach
          
                </ul>  

            </div>
        </div>
        <div class="input-group">
            
            <textarea type="text" autofocus autocapitalize="true" autocomplete="true" aria-activedescendant="true" aria-autocomplete="both" aria-busy="true" id="message" style="border-radius: 30px;border: 2px red solid;font-family: initial;"" class="form-control mb-2" placeholder="Enter Message" required></textarea>
        <span class="input-group-btn" id="clicker" onclick="sendMessage('sent','{{$_GET['token']}}','{{$user_id}}','{{$admin_id}}','{{Auth::user()->id}}');update()">
                <button  class="btn btn-default btn-lg" style="padding-top: 15px;font-size: 40px;padding-left: 0px;" type="button"><i style="color: red;" class="ion-ios-send"></i></button >
                                </span>
        </div>
    </div>
      

	</section>
		
		@include('include/footer')

      @include('include/down')
      <script type="text/javascript">
          function sendMessage(div,div1,div2,div3,div4){
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
 var message = document.getElementById('message');

 var requst = `message=${message.value}&token=${div1}&userid=${div2}&adminid=${div3}&sender_id=${div4}`;
 var urled = "{{ URL::to('message?')}}"+requst;
 coun.open('Get',urled );
 coun.setRequestHeader('content-type','application/x-www-form-urlencoded');
 coun.send(); 
 message.value = "";
 };



 function update(){
 if (window.XMLHttpRequest) {
 var coun = new XMLHttpRequest;
 }else{
 var coun = new ActiveXObject('Microsoft XMLHTTP');
 }
 coun.onreadystatechange = function(){
 if(this.readyState == 4 && this.status == 200){
 document.getElementById('reponse').innerHTML = this.responseText;
 }
 }
 var token = document.getElementById('tokencheck');

 var requst = `token=${token.value}`;
 var urled = "{{ URL::to('messageudate?')}}"+requst;
 coun.open('Get',urled );
 coun.setRequestHeader('content-type','application/x-www-form-urlencoded');
 coun.send(); 
 };
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
};
    </script>
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
          } else if (event.ctrlKey && event.shiftKey && event.keyCode == 69) {     
              return false;
          }
      });

      setInterval(() => {
        update();
      },5000);
        </script>
  </body>

</html>