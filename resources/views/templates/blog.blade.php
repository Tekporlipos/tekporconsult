<!DOCTYPE html>
<html lang="en">
  <head>
    <title>TekporAcademy - Blog_page</title>
	<meta property="og:image" content="https://tekporacademy.tk/images/bg_1.jpg" />
    @include('include/head')
  </head>
  <body ondblclick="scrolling()">
    @include('include.header')
	   
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_1.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h3 class="mb-2 bread">The Perfect Place To Start Everything</h3>
            <p class="breadcrumbs"><span class="mr-2"><a href="/home">Home <i class="ion-ios-arrow-forward"></i></a href="/blog" ></span> <span>Very Recent Blogs <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>

		
		<section class="ftco-section bg-light">
			<div class="container">
				<div>
					<h5>QUIZ</h5><hr>
				</div>
				<div class="row">
          
          <?php
					use App\quizing;
					use App\books;
					use App\admin;
					use Carbon\Carbon;
					use App\comments;

					$quizingblog =  quizing::orderBy('id','desc')->take(6)->get();
					$books =  books::orderBy('id','desc')->take(6)->get();
					
					?>

					@foreach ($quizingblog as $item)
					<?php   
					$id = $item->admin;
					$admins = admin::where('name',$id)->get();
					$comment = comments::where('blogType',$item->id)->orderBy('user_id','desc')->get();
					?>
					<div class="col-md-4 col-lg-3 ftco-animate">
						<div class="blog-entry">
						  <a href="../../Quizname/{{$item->title}}" class="block-20 d-flex align-items-end" style="background-image: url('{{$item->logo}}');">
											<div class="meta-date text-center p-2">
							  <span class="day"> {{Carbon::now('UTC')->createFromTimeStamp(strtotime($item->created_at))->diffForHumans()}}</span>
							  
							</div>
						  </a>
						  <div class="text bg-white p-4">
						  <h3 class="heading"><a href="../../Quizname/{{$item->title}}"><?php echo (substr(str_replace("_", " ", $item->title),0,30)); ?>...</a></h3>
							<p>{{ substr($item->description,0,100)  }}...</p>
							<div class="d-flex align-items-center mt-4">
								<p class="mb-0"><a href="../../Quizname/{{$item->title}}" class="btn btn-primary">Read More <span class="ion-ios-arrow-round-forward"></span></a></p>
								<p class="ml-auto mb-0">
								<a href="admin/{{$item->admin}}" class="mr-2">
										 @foreach($admins as $adm)
								
										{{ substr($adm->name,0,7)  }}
									@endforeach</a>
									<a href="#" class="meta-chat"><span class="icon-chat"></span> {{ sizeOf($comment)}}</a>
								</p>
							</div>
						  </div>
						</div>
					  </div>


					@endforeach
		</div>
		<div>
			<h5>BOOKS</h5><hr>
		</div>
		<div class="row">
  
					  @foreach ($books as $item)
					  <?php   
					  $id = $item->admin;
					  $admins = admin::where('name',$id)->get();
					  $comment = comments::where('blogType',$item->id)->orderBy('user_id','desc')->get();
					  ?>
					  <div class="col-md-4 col-lg-3 ftco-animate">
						  <div class="blog-entry">
							<a href="../../Bookname/{{$item->title}}" class="block-20 d-flex align-items-end" style="background-image: url('{{$item->logo}}');">
											  <div class="meta-date text-center p-2">
								<span class="day"> {{Carbon::now('UTC')->createFromTimeStamp(strtotime($item->created_at))->diffForHumans()}}</span>
								
							  </div>
							</a>
							<div class="text bg-white p-4">
							<h3 class="heading"><a href="../../Bookname/{{$item->title}}"><?php echo (substr(str_replace("_", " ", $item->title),0,30)); ?>...</a></h3>
							  <p>{{ substr($item->description,0,100)  }}...</p>
							  <div class="d-flex align-items-center mt-4">
								  <p class="mb-0"><a href="../../Bookname/{{$item->title}}" class="btn btn-primary">Read More <span class="ion-ios-arrow-round-forward"></span></a></p>
								  <p class="ml-auto mb-0">
								  <a href="admin/{{$item->admin}}" class="mr-2">
										   @foreach($admins as $adm)
								  
										  {{ substr($adm->name,0,7)  }}
									  @endforeach</a>
									  <a href="#" class="meta-chat"><span class="icon-chat"></span> {{ sizeOf($comment)}}</a>
								  </p>
							  </div>
							</div>
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