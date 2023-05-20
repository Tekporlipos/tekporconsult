<!DOCTYPE html>
<html lang="en">
  <head>
    <title>TekporAcademy - Basic Category Class</title>
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
            <h3 class="mb-2 bread">Basic Category Class</h3>
            <p class="breadcrumbs"><span class="mr-2"><a href="home">Home <i class="ion-ios-arrow-forward"></i></a> <a href="/courseCategory">Course <i class="ion-ios-arrow-forward"></i></a></span> <span>Basic Course<i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>

	<section class="ftco-section">
		<div class="container-fluid px-4">
			<div class="row">
				<div class="col-md-3 course ftco-animate">
					<div class="img" style="background-image: url(/faculty/beige-and-white-house-2869135.jpg);"></div>
					<div class="text pt-4">
						<p class="meta d-flex">
							<span><i class="icon-user mr-2"></i>WBHouse</span>
							<span><i class="icon-table mr-2"></i>12+</span>
							<span><i class="icon-calendar mr-2"></i>6/7</span>
						</p>
						<h3><a href="/basicLevel?field=Mathemathics">Mathematics</a></h3>
						<p>Mathematics is the science that deals with the logic of shape, quantity and arrangement. Math is all around us, in everything we do. It is the building block for everything...</p>
						<p><a href="/basicLevel?field=Mathematics" class="btn btn-primary">Read Now</a></p>
					</div>
				</div>
				<div class="col-md-3 course ftco-animate">
					<div class="img" style="background-image: url(../images/science.jpg);"></div>
					<div class="text pt-4">
						<p class="meta d-flex">
							<span><i class="icon-user mr-2"></i>WBHouse</span>
							<span><i class="icon-table mr-2"></i>12+</span>
							<span><i class="icon-calendar mr-2"></i>12/7</span>
						</p>
						<h3><a href="/basicLevel?field=General-Science">General Science</a></h3>
						<p>Science in a broad sense existed before the modern era and in many historical civilizations. Modern science is distinct in its approach and successful ...</p>
						<p><a href="/basicLevel?field=General-Science" class="btn btn-primary">Read Now</a></p>
					</div>
				</div>
				<div class="col-md-3 course ftco-animate">
					<div class="img" style="background-image: url(../images/english.jpeg);"></div>
					<div class="text pt-4">
						<p class="meta d-flex">
							<span><i class="icon-user mr-2"></i>WBHouse</span>
							<span><i class="icon-table mr-2"></i>18+</span>
							<span><i class="icon-calendar mr-2"></i>24/7</span>
						</p>
						<h3><a href="/basicLevel?field=English-Language">English Language</a></h3>
						<p>English is the primary language of several countries but widely spoken around the world. Its pronunciation and word forms have evolved over ...</p>
						<p><a href="/basicLevel?field=English-Language" class="btn btn-primary">Read Now</a></p>
					</div>
				</div>

				<div class="col-md-3 course ftco-animate">
					<div class="img" style="background-image: url(../images/Social_Studies.png);"></div>
					<div class="text pt-4">
						<p class="meta d-flex">
							<span><i class="icon-user mr-2"></i>WBHouse</span>
							<span><i class="icon-table mr-2"></i>18+</span>
							<span><i class="icon-calendar mr-2"></i>12/5</span>
						</p>
						<h3><a href="/basicLevel?field=Social-Studies">Social Studies</a></h3>
						<p>Social studies is the study of people in relation to each other and to their world. It is an issues- focused and inquiry-based interdisciplinary subject...</p>
						<p><a href="/basicLevel?field=Social-Studies" class="btn btn-primary">Read Now</a></p>
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