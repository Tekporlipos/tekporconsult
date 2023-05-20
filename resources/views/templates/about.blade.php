<!DOCTYPE html>
<html lang="en">
  <head>
    <title>TekporAcademy - About_page</title>
  @include('include/head')
  <meta property="og:type" content="text.question" />
<meta property="og:url" content="https://tekporacademy.tk/home" />
<meta property="og:image" content="https://tekporacademy.tk/images/bg_1.jpg" />
  </head>
  <body ondblclick="scrolling()" contenteditable="false">
    @include('include.header')

   <div >

    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_1.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h3 class="mb-2 bread">About Us</h3>
            <p class="breadcrumbs"><span class="mr-2"><a href="/home">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>About us <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>
		
	<div class="container" style="color: rgb(33, 35, 36)">
		<h3 class="text-center">
			<i class="fas fa-h3   text-center ">TekporAcademy</i>
		</h3>
		
		<p>TekporAcademy main goal is to provide quality and affordable services to all and sundry regardless of location or status. It started with books house and later expanded to online class room and now TekporAcademy for all. Feel free to use all the resources this site provide it is purposely made for you.</p>
		<p>TekporAcademy is maintained and managed by beautiful members of the world. Is through their donation this site still stands, So we use this opportunity to say very big thank you for your support.</p>
	</div>
		

		<section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(images/bg_3.jpg);" data-stellar-background-ratio="0.5">
    	<div class="container">
    		<div class="row justify-content-center mb-5 pb-2 d-flex">
    			<div class="col-md-6 align-items-stretch d-flex">
    				<div class="img img-video d-flex align-items-center" style="background-image: url(images/about-2.jpg);">
    					<div class="video justify-content-center">
								<a href="https://vimeo.com/45830194" class="icon-video popup-vimeo d-flex justify-content-center align-items-center">
									<span class="ion-ios-play"></span>
		  					</a>
							</div>
    				</div>
    			</div>
          <div class="col-md-6 heading-section heading-section-white ftco-animate pl-lg-5 pt-md-0 pt-5">
            <h2 class="mb-4">Tekpor Academy</h2>
            <p>How TekporAcademy works: Aside massive support from individual, TekporAcademy also gain some of it revenue from advertisement and affiliations to services form third parties.
              We understand, you have the browser and the website. <br/> You have every right to have you ads blocker on.
              We only plea that you turn it off, because is through those our developer get motivated.<br/>
              Thank you very much for your support and understanding.</p>
          </div>
        </div>	
    			<?php
use App\admin;
use App\User;
$contingTeachers =  admin::orderBy('id','desc')->get();
$contingUsers =  User::orderBy('id','desc')->get();
		?>
    		<div class="row d-md-flex align-items-center justify-content-center">
    			<div class="col-lg-12">
    				<div class="row d-md-flex align-items-center">
		          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		            	<div class="icon"><span class="flaticon-doctor"></span></div>
		              <div class="text">
		                <strong class="number" data-number=" {{ sizeOf($contingTeachers)}}">0</strong>
		                <span>Certified Teachers</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		            	<div class="icon"><span class="flaticon-doctor"></span></div>
		              <div class="text">
		                <strong class="number" data-number="{{ sizeOf($contingUsers)}}">0</strong>
		                <span>Students</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		            	<div class="icon"><span class="flaticon-doctor"></span></div>
		              <div class="text">
		                <strong class="number" data-number="23">0</strong>
		                <span>Courses</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		            	<div class="icon"><span class="flaticon-doctor"></span></div>
		              <div class="text">
		                <strong class="number" data-number="2">0</strong>
		                <span>Awards Won</span>
		              </div>
		            </div>
		          </div>
	          </div>
          </div>
        </div>
    	</div>
    </section>
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