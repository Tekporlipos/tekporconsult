<!DOCTYPE html>
<html lang="en">
  <head>
    <title>TekporAcademy - {{$id}}</title>
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
            <h3 class="mb-2 bread">Courses</h3>
            <p class="breadcrumbs"><span class="mr-2"><a href="/home">Home <i class="ion-ios-arrow-forward"></i></a></span> <span class="mr-2"><a href="/category">Store <i class="ion-ios-arrow-forward"></i></a></span>  <span class="mr-2"><a href="/category">Collage <i class="ion-ios-arrow-forward"></i></a></span> <span>{{$id}} <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>

	<section class="ftco-section">
		<div class="container-fluid px-4">
			<div class="row">

	<?php   
		use App\coures;
	 	$books =  coures::where('course',$id)->orWhere('course','All')->orderBy('id','desc')->get();

					?>
@foreach ($books as $key=>$item)

			
			<div class="col-md-2 course ftco-animate bg-light"  style="inline-size: inherit;padding-top:0px; border-radius: 5px" title="{{$item->title}}">
				<video src="{{$item->link}}" class="thumbnail" style="cursor: pointer;" onmouseleave="pluse('video{{$key}}')" muted="yes" onmouseover="play('video{{$key}}')" id="video{{$key}}" width="100%" height="150px"></video>
				<div class="text pt-4">
				<i><a href="/start/{{$item->title}}" style="font-size:15px">{{$item->title}}</a></i>
				
					
				</div>
			</div>
	

@endforeach
</div>
</div>
</section>@include('include/footer')


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