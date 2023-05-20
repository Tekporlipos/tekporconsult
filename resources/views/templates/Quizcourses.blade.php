<!DOCTYPE html>
<html lang="en">
  <head>
    <title>TekporAcademy - <?php echo (str_replace("_", " ", $id)); ?></title>
	<meta property="og:image" content="https://tekporacademy.tk/images/bg_1.jpg" />
    <meta content="<?php echo (str_replace("_", " ", $id)); ?>">
    @include('include/head')
  </head>
  <body ondblclick="scrolling()">
    @include('include.header')

   <div >
   
    <section class="hero-wrap hero-wrap-2" style="background-image: url('../images/bg_1.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h3 class="mb-2 bread">Courses</h3>
            <p class="breadcrumbs"><span class="mr-2"><a href="home">Home <i class="ion-ios-arrow-forward"></i></a></span> <span class="mr-2"><a href="Games">Games <i class="ion-ios-arrow-forward"></i></a></span>  <span class="mr-2"><a href="home">quiz <i class="ion-ios-arrow-forward"></i></a></span> <span>{{$id}} <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section">
			<div class="container-fluid px-4">
				<div class="row">
					
					@foreach ($quizing as $item)
					
					<div class="col-md-3 course ftco-animate">
						<div class="img" style="background-image: url(../{{ $item->logo }});"></div>
						<div class="text pt-4">
							<p class="meta d-flex">
								<span><i class="icon-user mr-2"></i>{{ $item->admin }}</span>
								<span><i class="icon-table mr-2"></i>100+</span>
								<span><i class="icon-calendar mr-2"></i>4 Years</span>
							</p>
							<h3><a href="{{ $item->course }}"><?php echo (str_replace("_", " ", $item->title)); ?></a></h3>
							<p>{{ substr($item->description,0,200)  }}</p>
							<p><a href="../Quizname/{{$item->title}}" class="btn btn-primary">Play Now</a></p>
						</div>
					</div>
					@endforeach
			
				</div>
			</div>
		</section>		@include('include/footer')
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