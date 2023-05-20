<!DOCTYPE html>
<html lang="en">
  <head>
    <title>TekporAcademy - Secondary store Category Class</title>
	<meta property="og:image" content="https://tekporacademy.tk/images/store_back.jpg" />
 @include('include/head')
  </head>
  <body ondblclick="scrolling()">
    @include('include.header')

   <div >
    <section class="hero-wrap hero-wrap-2" style="background-image: url('../images/store_back.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h3 class="mb-2 bread">store</h3>
            <p class="breadcrumbs"><span class="mr-2"><a href="home">Home <i class="ion-ios-arrow-forward"></i></a> <a href="Games">store <i class="ion-ios-arrow-forward"></i></a></span> <span>Secondary store<i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section">
    	<h1 align="center" class="text-center text-danger">MAINTANACE</h1>
			<div class="container-fluid px-4">
				<div class="row">
				<!--	<div class="col-md-3 course ftco-animate">
						<div class="img" style="background-image: url(images/typingClass.jpg);"></div>
						<div class="text pt-4">
							<p class="meta d-flex">
								<span><i class="icon-user mr-2"></i>Mr. Khan</span>
								<span><i class="icon-table mr-2"></i>10 seats</span>
								<span><i class="icon-calendar mr-2"></i>4 Years</span>
							</p>
							<h3><a href="typingClasee">Typing Class</a></h3>
							<p>Welcome to this new & improved, and still humble typing web course. Here you'll find an expanded set of free online typing lessons and typing exercises. All for you, enjoy.</p>
							<p><a href="typingClasee" class="btn btn-primary">Play Me</a></p>
						</div>
					</div>
					-->

					
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