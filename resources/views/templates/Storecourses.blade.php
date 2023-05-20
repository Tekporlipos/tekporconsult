<!DOCTYPE html>
<html lang="en">
  <head>
    <title>TekporAcademy - {{$id}}</title>
    <meta property="og:image" content="https://tekporacademy.tk/images/store_back.jpg" />
    <meta content="{{ $id }}">
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
            <p class="breadcrumbs"><span class="mr-2"><a href="/home">Home <i class="ion-ios-arrow-forward"></i></a></span> <span class="mr-2"><a href="/store">Store <i class="ion-ios-arrow-forward"></i></a></span>  <span class="mr-2"><a href="/store">Collage <i class="ion-ios-arrow-forward"></i></a></span> <span>{{$id}} <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>

	<section class="ftco-section">
		<div class="container-fluid px-4">
			<div class="row">

	<?php   
		use App\books;
    $id = str_replace("_", " ", $id);
    $category = $_GET['category'];
		$books =  books::where('course','LIKE','%All%')->orWhere('course', 'LIKE',"%$id%")->orderBy('id','desc')->get();
	?>
@foreach ($books as $item)

<div class="col-md-2 col-sm-12 course ftco-animate img-thumbnail" style="border-radius: 30px; box-shadow: black 2px 2px">
					<div class="img" style="background-image: url(/{{$item->logo}});"></div>
					<div class="text pt-4">
						<div class="text-center"><a href="/Bookname/{{$item->title}}" style="font-size:15px">
              <?php echo (str_replace("_", " ", $item->title)); ?></a></div>
					</div>
				</div>


@endforeach
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