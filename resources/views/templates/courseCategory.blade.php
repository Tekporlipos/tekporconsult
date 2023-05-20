<!DOCTYPE html>
<html lang="en">
  <head>
    <title>TekporAcademy - Store_Page</title>
	<meta property="og:image" content="https://tekporacademy.tk/images/bg_1.jpg" />
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
			  <h3 class="mb-2 bread">Category</h3>
			  <p class="breadcrumbs"><span class="mr-2"><a href="home">Home <i class="ion-ios-arrow-forward"></i></a> <a href="/courseCategory">Category <i class="ion-ios-arrow-forward"></i></a></span> </p>
			</div>
		  </div>
		</div>
	  </section>

    <section class="ftco-section">
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
					<div class="col-md-3 course ftco-animate">
						<div class="img" style="background-image: url(../images/collage.jpg);"></div>
						<div class="text pt-4">
							<p class="meta d-flex">
								<span><i class="icon-user mr-2"></i>WBHouse</span>
								<span><i class="icon-table mr-2"></i>12+</span>
								<span><i class="icon-calendar mr-2"></i>12/7</span>
							</p>
							<h3><a href="/Secondarycategory">Secondary Education</a></h3>
							<p>Secondary education is the stage of education following primary education. The next stage ...</p>
							<p><a href="/Secondarycategory" class="btn btn-primary">Start Now</a></p>
						</div>
					</div>
					<div class="col-md-3 course ftco-animate">
						<div class="img" style="background-image: url(../images/uni.jpg);"></div>
						<div class="text pt-4">
							<p class="meta d-flex">
								<span><i class="icon-user mr-2"></i>WBHouse</span>
								<span><i class="icon-table mr-2"></i>18+</span>
								<span><i class="icon-calendar mr-2"></i>24/7</span>
							</p>
							<h3><a href="tertiarycategory">Tertiary Education</a></h3>
							<p> Tertiary educations is defined as the third-stage of learning that is done after graduating from high school or entering the workplace.</p>
							<p><a href="tertiarycategory" class="btn btn-primary">Start Now</a></p>
						</div>
					</div>

					<div class="col-md-3 course ftco-animate">
						<div class="img" style="background-image: url(../images/guide.jpg);"></div>
						<div class="text pt-4">
							<p class="meta d-flex">
								<span><i class="icon-user mr-2"></i>WBHouse</span>
								<span><i class="icon-table mr-2"></i>18+</span>
								<span><i class="icon-calendar mr-2"></i>12/5</span>
							</p>
							<h3><a href="../../#Career-Guidance">Career Guidance</a></h3>
							<p>Career guidance is the process to help individuals acquire information, skills and experience necessary to identify career options and narrow down to make right decisions.</p>
							<p><a href="../../#Career-Guidance"" class="btn btn-primary">Start Now</a></p>
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
 coun.onStartystatechange = function(){
 if(this.StartyState == 4 && this.status == 200){
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