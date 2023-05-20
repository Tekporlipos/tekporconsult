<!DOCTYPE html>
<html lang="en">
  <head>
    <title>TekporAcademy - Basic store Category Class</title>
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
            <p class="breadcrumbs"><span class="mr-2"><a href="home">Home <i class="ion-ios-arrow-forward"></i></a> <a href="Games">store <i class="ion-ios-arrow-forward"></i></a></span> <span>Basic store<i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section">
      <h1 align="center" class="text-center text-danger"></h1>
      

      <div class="justify-content-center jumbotron">
        <div class="container">
          <p class="text-justified alert alert-danger text-center">
            <span class="ion-md-warning" aria-hidden="true"></span>
           <span class="sr-only">Under Development.</span>
           This side is currently under development .<br>
            Use the tutorials section to continue with your study. <br>
            To get  notificaton when is up and working <a href="../../contact" target="blank"> contact us</a>
          </p>
        </div>
      </div>


			<div class="container-fluid px-4">
				<div class="row">
          <div class="col-md-3 course ftco-animate">
						<div class="img" style="background-image: url(../images/basicedu.jpg);"></div>
						<div class="text pt-4">
							<p class="meta d-flex">
								<span><i class="icon-user mr-2"></i>WBHouse</span>
								<span><i class="icon-table mr-2"></i>12+</span>
								<span><i class="icon-calendar mr-2"></i>6/7</span>
							</p>
							<h3><a href="Basiccategory">Basic Education</a></h3>
							<p>The basic education programme has played a major role in supporting the nationwide publication of the guid...</p>
							<p><a href="/Basiccategory" class="btn btn-primary">Start Now</a></p>
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