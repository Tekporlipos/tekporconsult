<!DOCTYPE html>
<html lang="en">
  <head>
	<title>TekporAcademy</title>
	<meta property="og:image" content="https://tekporacademy.tk/images/favicon.png" />
 @include('include/head')
  </head>
	<style>
	    @media screen and (max-width: 600px) {
  #slided{
    display:none;
  };
  #slided1{
    display:block;
  }
  #quote{
  	color: #00adfd;
  }
  .mb-4{
  	font-size: 22px;
  	color: black;
  }
}

	    @media screen and (min-width: 601px) {
  
  #slided1{
    display:none;
  }
  
}
	</style>
  </head>
  <body ondblclick="scrolling()" contenteditable="false">
    @include('include.header')

	

<!-- Hero Section Begin -->
<section class="hero" id="searchshow" style="z-index: 1">
	<div class="container">
		<div class="row">
			<div class="col-lg-3">
				<div class="hero__categories">
					<div class="hero__categories__all">
						<i class="oi oi-menu"></i>
						<span>BOOKS</span>
						<ul style="padding: 5px;">
							<?php 
use App\books;
$books = books::take(5)->orderBy('id','desc')->get();
							?>
							@foreach ($books as $item)
						<li class="ftco-animate"><a href="/Bookname/{{$item->title}}">{{str_replace("_", " ", $item->title)}}</a></li>
						<hr>
							@endforeach
						 
					 </ul>
					</div>
					
				</div>
			</div>
			<div class="col-lg-9">
		
				<section class="home-slider owl-carousel" id="slided">
				 <div class="slider-item" style="background-image:url(images/bg_11.jpg);border-image-repeat: none">
				   <div class="overlay"></div>
				   <div class="container" id="slided">
					 <div class="row no-gutters slider-text align-items-center justify-content-start" data-scrollax-parent="true">
					 <div class="col-md-6 ftco-animate">
					   <h3 class="mb-4" style="color:white">Failure is the opportunity to begin again...</h3>
					   <p>Failure is the opportunity to begin again more intelligently. Strive for progress, not perfection.
			   <br>	<span class="small">By: Henry Ford.</span>	</p>
					   <p><a href="blog" class="btn btn-primary px-4 py-3 mt-3">Blog</a></p>
					 </div>
				   </div>
				   </div>
				 </div>
		   
				 <div class="slider-item" style="background-image:url(images/bg_2.jpg);">
				   <div class="overlay"></div>
				   <div class="container">
					 <div class="row no-gutters slider-text align-items-center justify-content-start" data-scrollax-parent="true">
					 <div class="col-md-6 ftco-animate">
					   <h3 class="mb-4" style="color:white">Successful and unsuccessful people do not vary greatly...</h3>
					   <p>Successful and unsuccessful people do not vary greatly in abilities. They vary in their desires to reach their potential.
				 <br/>	<span class="small">by: John Maxwell.<span></p>
					   <p><a href="courses" class="btn btn-primary px-4 py-3 mt-3">Courses</a></p>
					 </div>
				   </div>
				   </div>
			   </div>
			   
		   
				 <div class="slider-item" style="background-image:url(images/bg_3.jpg);border-image-repeat: none">
			   <div class="overlay"></div>
			   <div class="container">
			   <div class="row no-gutters slider-text align-items-center justify-content-start" data-scrollax-parent="true">
			   <div class="col-md-6 ftco-animate">
				 <h3 class="mb-4"  style="color:white">Don't let what you cannot do interfere...</h3>
				 <p>Don't let what you cannot do interfere with what you can do.
				 There are no shortcuts to any place worth going.
			   <br> <span class="small">By: John Wooden and Beverly Sills.</span>	</p>
				 <p><a href="teachers" class="btn btn-primary px-4 py-3 mt-3">Teachers</a></p>
			   </div>
			   </div>
			   </div>
			 </div>
			 <div class="slider-item" style="background-image:url(images/bg_4.jpg);border-image-repeat: none">
			   <div class="overlay"></div>
			   <div class="container">
			   <div class="row no-gutters slider-text align-items-center justify-content-start" data-scrollax-parent="true">
			   <div class="col-md-6 ftco-animate">
				 <h3 class="mb-4" style="color:white">Vision is perhaps our greatest strength...</h3>
				 <p> Vision is perhaps our greatest strength… it has kept us alive to the power and continuity of thought through the centuries, it makes us peer into the future and lends shape to the unknown.
			 <br>	<span class="small">By: Li KaShing.</span>	 </p>
				 <p><a href="about" class="btn btn-primary px-4 py-3 mt-3">About Us</a></p>
			   </div>
			   </div>
			   </div>
			 </div>
			 <div class="slider-item" style="background-image:url(images/bg_5.jpg);border-image-repeat: none">
			   <div class="overlay"></div>
			   <div class="container">
			   <div class="row no-gutters slider-text align-items-center justify-content-start" data-scrollax-parent="true">
			   <div class="col-md-6 ftco-animate">
				 <h3 class="mb-4" style="color:white">It is fine to celebrate success... </h3>
				 <p>It is fine to celebrate success but it is more important to heed the lessons of failure.
			   <br>	  <span class="small">By: Bill Gates.</span>
				  </p>
				 <p><a href="contact" class="btn btn-primary px-4 py-3 mt-3">Contact Us</a></p>
			   </div>
			   </div>
			   </div>>
		   
			 </div>
		   
			 <div class="slider-item" style="background-image:url(images/bg_6.jpg);border-image-repeat: none">
			   <div class="overlay"></div>
			   <div class="container">
			   <div class="row no-gutters slider-text align-items-center justify-content-start" data-scrollax-parent="true">
			   <div class="col-md-6 ftco-animate">
				 <h3 class="mb-4" style="color:white">Some people dream of accomplishing great things....</h3>
				 <p>Some people dream of accomplishing great things. Other stay awake and make it happen.
				 Push yourself, because no one else is going to do it for you.
				 There is no substitute for hard work.
			   <span class="small">By: Thomas Edison</span>	. </p>
				 <p><a href="policy" class="btn btn-primary px-4 py-3 mt-3">Our Policy</a></p>
			   </div>
			   </div>
			   </div>
			 </div>
			   </section>

			</div>
		</div>
	</div>
</section>




    
		
		<section class="ftco-section ftco-no-pt ftc-no-pb">
			<div class="container-fluid">
				<div class="row d-flex">
					<div class="col-md-5 order-md-last wrap-about wrap-about d-flex align-items-stretch">
						<section class="ftco-services ftco-no-pb" >
							<div class="container-wrap">
								<div class="row no-gutters">
				
					<div class="col-md-6 d-flex services align-self-stretch py-5 px-4 ftco-animate bg-primary">
						<div class="media block-6 d-block text-center">
						  <div class="icon d-flex justify-content-center align-items-center">
								<span class="flaticon-teacher"></span>
						  </div>
						  <div class="media-body p-2 mt-3">
							<a href="forum" style="color:white">
							<h3 class="heading" style="color:white">Ask Your questions</h3>
							<p>Come let clear our doubt, ask your questions let solve them together as one family.</p>
						</a>
						  </div>
						</div>      
					  </div>
					
				
				
				
					<div class="col-md-6 d-flex services align-self-stretch py-5 px-4 ftco-animate bg-darken">
						<div class="media block-6 d-block text-center">
						  <div class="icon d-flex justify-content-center align-items-center">
								<span class="flaticon-reading"></span>
						  </div>
						  <div class="media-body p-2 mt-3">
							<a href="/courseCategory">
							<h3 class="heading">Special Education</h3>
							<p>Courses here are selected carefully to teach you from no idea to advance. grab your cup of java, relax and follow.</p>
						</a>
						  </div>
						</div>    
					  </div>
				
						 
						
						 
						
							<div class="col-md-6 d-flex services align-self-stretch py-5 px-4 ftco-animate bg-darken">
								<div class="media block-6 d-block text-center">
								  <div class="icon d-flex justify-content-center align-items-center">
										<span class="flaticon-diploma"></span>
								  </div>
								  <div class="media-body p-2 mt-3">
									<a href="Games">
									<h3 class="heading">Game Clubs</h3>
									<p>Time for fun, online games and quizzes to cheer you up. About 27 interesting and educative games available for you. Quizzes on all the courses</p>
								</a>
								  </div>
								</div>      
							  </div>
						
						  
							<div class="col-md-6 d-flex services align-self-stretch py-5 px-4 ftco-animate bg-primary">
								<div class="media block-6 d-block text-center">
								  <div class="icon d-flex justify-content-center align-items-center">
										<span class="flaticon-books"></span>
								  </div>
								  <div class="media-body p-2 mt-3">
									<a href="store"  style="color:white">
									<h3 class="heading">Book &amp; Library</h3>
									<p>We have online library to offer you all the learning materials you may need to complete your courses.</p>
								</a>
								  </div>
								</div>      
							  </div>
						
						</div>
							</div>
						</section>
					</div>
					<div class="col-md-7 wrap-about py-5 pr-md-4 ftco-animate">
          	
				<a href="Offer" class="ftco-animate">
					<h2 class="mb-4">What We Offer</h2>
					
				</a>		
		
						<div class="row mt-5">
							<div class="col-lg-6 ftco-animate">
								<div class="services-2 d-flex">
									<div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="flaticon-security"></span></div>
									<div  class="text pl-3">
										
										<a  href="../../#Career-Guidance">
											<h3>Safety First</h3>
											<p>We have career guidance board here to assist you on your decisions.</p>
										</a>
									</div>
								</div>
							</div>
							<div class="col-lg-6 ftco-animate">
								<div class="services-2 d-flex">
									<div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="flaticon-reading"></span></div>
									<div class="text pl-3">
										<a href="#"> 

											<h3>Regular Update Classes</h3>
											<p>The courses here put you on track with version control to keep you up to date.</p>
										</a>
										
									</div>
								</div>
							</div>
							<a href="">
							<div class="col-lg-6 ftco-animate" >
							
								<div class="services-2 d-flex">
									<div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="flaticon-diploma"></span></div>
									<div class="text pl-3">
										<a href="#">
											<h3>Certified Teachers</h3>
											<p>All the teacher here are tested carefully in order to provide good and quality information on what you choose to study.</p>
										</a>
									
									</div>
								</div>
							</div>
						</a>
							<a href="">
							<div class="col-lg-6 ftco-animate">
								<div class="services-2 d-flex">
									<div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="flaticon-education"></span></div>
									<div class="text pl-3">
										<a href="#Classrooms">
											<h3>Live Courses</h3>
											<p>There are live course for student who will want to ask questions.</p>
										</a>
										
									</div>
								</div>
							</a>
						
							</div>
							<div class="col-lg-6 ftco-animate">
								<div class="services-2 d-flex">
									<div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="flaticon-jigsaw"></span></div>
									<div class="text pl-3">
										<a href="#Creative">
											<h3>Creative Lessons</h3>
											<p>We provide a conducive environment to test and access your skills.</p>
										</a>
										
									</div>
								</div>
							</div>
							<div class="col-lg-6 ftco-animate">
								<div class="services-2 d-flex">
									<div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="flaticon-kids"></span></div>
									<div class="text pl-3">
										<a href="Games">
											<h3>Games</h3>
											<p>We provide you with games and learning make fun activities to make learning easy and fun.</p>
										</a>
										
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		

		<section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(images/bg_3.jpg);" data-stellar-background-ratio="0.5">
    	<div class="container">
    		<div class="row justify-content-center mb-5 pb-2 d-flex">
    			<div class="col-md-6 align-items-stretch d-flex">
    				<div class="img img-video d-flex align-items-center" style="background-image: url(images/about-2.jpg);">
    					<div class="video justify-content-center">
								<a href="https://www.google.com/maps/@6.6732949,-1.5671186,189m/data=!3m1!1e3" class="icon-video popup-vimeo d-flex justify-content-center align-items-center">
									<span class="ion-ios-play"></span>
		  					</a>
							</div>
    				</div>
    			</div>
          <div class="col-md-6 heading-section heading-section-white ftco-animate pl-lg-5 pt-md-0 pt-5">
            <h2 class="mb-4">Tekpor Academy</h2>
            <p>TekporAcademy main goal is to provide quality and affordable services to all and sundry regardless of location or status. It started with books house and later expanded to online class room and now TekporAcademy for all. Feel free to use all the resources this site provide it is purposely made for you.</p>
            <p>TekporAcademy is maintained and managed by beautiful members of the world. Is through their donation this site still stands, So we use this opportunity to say very big thank you for your support.</p>
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


		<section class="ftco-section">
			<div class="container-fluid px-4">
				<div class="row justify-content-center mb-5 pb-2">
          <div class="col-md-8 text-center heading-section ftco-animate">
			<h2 class="mb-4"><span>New</span> Quizzes</h2>
            <p>These are the most recent Quizzes, </p>
          </div>
        </div>	
				<div class="row">

					<?php

					use App\quizing;
					use Carbon\Carbon;
					$quizing =  quizing::orderBy('id','desc')->take(4)->get();
					
					?>

					@foreach ($quizing as $item)
					<?php   
					$id = $item->admin;
					$admins = admin::where('name',$id)->get();
					?>
					<div class="col-md-3 course ftco-animate">
						<div class="img" style="background-image: url(../{{ $item->logo }});"></div>
						<div class="text pt-4">
							<p class="meta d-flex">
								<span><i class="icon-user mr-2"></i> @foreach ($admins as $adm)
								
									{{ substr($adm->name,0,7)  }}
								@endforeach</span>
								<span><i class="icon-table mr-2"></i>100+</span>
								<span><i class="icon-calendar mr-2"></i> {{Carbon::now('UTC')->createFromTimeStamp(strtotime($item->created_at))->diffForHumans()}}</span>
							</p>
							<h3><a href="{{ $item->course }}"><?php echo (str_replace("_", " ", $item->title)); ?></a></h3>
							<p>{{ substr($item->description,0,200)  }}...</p>
							<p><a href="../Quizname/{{$item->title}}" class="btn btn-primary">Play Now</a></p>
						</div>
					</div>
					@endforeach
			
				</div>
			</div>
		</section>

		<section class="ftco-section bg-light">
			<div class="container-fluid px-4">
				<div class="row justify-content-center mb-5 pb-2">
          <div class="col-md-8 text-center heading-section ftco-animate">
			<h2 class="mb-4">Certified Teachers</h2>
            <p>These are the list of very current enrolled teachers and their social status.</p>
          </div>
        </div>	
				<div class="row">
					<?php   
					$id = $item->admin;
					$admins =  admin::orderBy('id','desc')->take(4)->get();

					?>
@foreach ($admins as $item)
<div class="col-md-6 col-lg-3 ftco-animate">
	<div class="staff">
		<div class="img-wrap d-flex align-items-stretch">
			<div class="img align-self-stretch" style="background-image: url({{$item->profile}});"></div>
		</div>
		<div class="text pt-3 text-center">
		<h3> {{$item->name}} </h3>
		<span class="position mb-2"><a href="../admin/{{$item->name}}">{{$item->type}}</a></span>
			<div class="faded">
			<p>{{  substr($item->info,0,100)}}...</p>
				<ul class="ftco-social text-center">
				<li class="ftco-animate"><a href="{{$item->twitter}}"><span class="icon-twitter"></span></a></li>
	<li class="ftco-animate"><a href="{{$item->facebook}}"><span class="icon-facebook"></span></a></li>
	<li class="ftco-animate"><a href="{{$item->youtube}}"><span class="icon-youtube"></span></a></li>
	<li class="ftco-animate"><a href="{{$item->website}}"><span class="icon-instagram"></span></a></li>
  </ul>
</div>
		</div>
	</div>
</div>
@endforeach
				</div>
			</div>
		</section>
    <section id="Career-Guidance" class="ftco-section ftco-consult ftco-no-pt ftco-no-pb" style="background-image: url(images/bg_5.jpg);" data-stellar-background-ratio="0.5">
    	<div class="overlay"></div>
    	<div class="container">
    		<div class="row justify-content-end">
    			<div class="col-md-6 py-5 px-md-5">
    				<div class="py-md-5">
		          <div class="heading-section heading-section-white ftco-animate mb-5">
		            <h2 class="mb-4">Request An Adviser</h2>
		            <p>Are you confuse about your career? Contact a career Adviser let talk about future.</p>
		          </div>
		          <?php
if (isset(Auth::user()->id)) {
	?>
<form action="/Adviser" method="post" class="appointment-form ftco-animate">
	@csrf
	<input type="hidden" name="user_id" value="{{Auth::user()->id}}">
<div class="text-center text-success">{{@$_GET[message]}}</div>
	<?php
}else{
?>
<div class="appointment-form ftco-animate">
	<div class="text-danger text-center" id="erroee" style="display: none" >
<a href="../register"   class="text-danger text-center"  >
	SIGN IN
</a>
	</div>
<?php
}
		          ?>
		    				<div class="d-md-flex">
			    				<div class="form-group">
			    					<input type="text" name="FName" class="form-control" onkeydown="showerro()"  placeholder="First Name" required>
			    				</div>
			    				<div class="form-group ml-md-4">
			    					<input type="text" onkeydown="showerro()"  name="LName" class="form-control" placeholder="Last Name" required>
			    				</div>
		    				</div>
		    				<div class="d-md-flex">
		    					<div class="form-group">
									<input type="text" onkeydown="showerro()"  name="category" class="form-control" placeholder="Eductional Field" required>
			    				</div>
		    					<div class="form-group ml-md-4">
			    					<input type="text" onkeydown="showerro()"  name="phone" class="form-control" placeholder="Phone" required>
			    				</div>
		    				</div>
		    				<div class="d-md-flex">
		    					<div class="form-group">
			              <textarea name="message" id="" onkeydown="showerro()" required cols="30" rows="2" class="form-control" placeholder="Brief Message"></textarea>
			            </div>
			            <div class="form-group ml-md-4">
			              <input type="submit" onclick="showerro()"  value="Request An Adviser" class="btn btn-primary py-3 px-4">
			            </div>
		    				</div>
		    			</form>
		    		</div>
    			</div>
        </div>
    	</div>
    </section>

		<section class="ftco-section bg-light">
			<div class="container">
				<div class="row justify-content-center mb-5 pb-2">
          <div class="col-md-8 text-center heading-section ftco-animate">
            <h2 class="mb-4"><span>Recent</span> Blog Feed</h2>
            <p>News from our teachers and bloggers. Follow the link to read more.</p>
          </div>
        </div>
				<div class="row">
					<?php
					
					$quizingblog =  quizing::orderBy('id','desc')->take(3)->get();
					
					?>

					@foreach ($quizingblog as $item)
					<?php   
					$id = $item->admin;
					$admins = admin::where('name',$id)->get();
					?>
					
					<div class="col-md-6 col-lg-4 ftco-animate">
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
									<a href="#" class="meta-chat"><span class="icon-chat"></span> 0</a>
								</p>
							</div>
						  </div>
						</div>
					  </div>


					@endforeach
	  

        </div>
			</div>
		</section>


		
			
			<section class="ftco-section testimony-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-2">
          <div class="col-md-8 text-center heading-section ftco-animate">
            <h2 class="mb-4">NEW BOOKS</h2>
            <p>Check it out new books just arrived.</p>
          </div>
        </div>
        <div class="row ftco-animate justify-content-center">
          <div class="col-md-12">
            <div class="carousel-testimony owl-carousel">


				<?php
				
				$booksblog =  books::orderBy('id','desc')->take(7)->get();
				
				?>


@foreach ($booksblog as $item)
	
<div class="item">
	<div class="testimony-wrap d-flex">
	<div class="user-img mr-4" style="background-image: url(/{{$item->logo}})">
	  </div>
	  <div class="text ml-2">
		  <span class="quote d-flex align-items-center justify-content-center">
		  <i class="icon-quote-left"></i>
		</span>
		<p>{{ substr($item->description,0,100)  }}...</p>
		<p class="name"><?php echo (str_replace("_", " ", $item->title)); ?></p>
		<span class="position"><a style="text-decoration:none" href="/Bookname/{{$item->title}}">{{$item->author}}</a></span>
	  </div>
	</div>
  </div>

@endforeach

            
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
 
 };
   
 function showerro() {

	 var show = document.getElementById('erroee');
	 show.style.display='block';
 }
      </script>
  </body>
  
</html>
