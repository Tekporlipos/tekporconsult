<!DOCTYPE html>
<html lang="en">
  <head>
    <title>TekporAcademy - career Guidance Class</title>
	<meta property="og:image" content="https://tekporacademy.tk/images/bg_1.jpg" />
 @include('include/head')
  </head>
  <body ondblclick="scrolling()">
    @include('include.header')

   <div >
   
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_1.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h3 class="mb-2 bread">Career Guidance</h3>
            <p class="breadcrumbs"><span class="mr-2"><a href="home">Home <i class="ion-ios-arrow-forward"></i></a> <a href="Games">Games <i class="ion-ios-arrow-forward"></i></a></span> <span>career Guidance<i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
      <br>
      <br>
      <h4 class="text-center text-primary">
       <u><b>With {{@$_GET['to']}}.</b></u> 
      </h4>
    </section>
@if (isset($_GET['token']))
<section class="ftco-section">
<h1 align="center" class="text-center text-danger"><button class="btn btn-primary btn-lg"><a style="color: black" href="StartChat?token={{$_GET['token']}}&to={{@$_GET['to']}}">Start Chat</a></button> </h1>
</section>
@endif
    
		
		@include('include/footer')

      @include('include/down')
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
      </script>
  </body>
</html>