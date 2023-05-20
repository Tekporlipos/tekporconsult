<!DOCTYPE html>
<html lang="en">
  <head>
    <title>TekporAcademy - Store Faculties</title>
	<meta property="og:image" content="https://tekporacademy.tk/images/store_back.jpg" />
	@include('include/head')
  </head>
  <body ondblclick="scrolling()">
    @include('include.header')

   <div >
    
    <section class="hero-wrap hero-wrap-2" style="background-image: url('/images/store_back.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h3 class="mb-2 bread">Faculties</h3>
            <p class="breadcrumbs"><span class="mr-2">
				<a href="../home"> <i class="ion-ios-arrow-forward">Home </i></a> 
				<a href="../store"> <i class="ion-ios-arrow-forward"> Store</i></a>
				<a href="#"> <i class="ion-ios-arrow-forward">Health Science Faculties</i></a></span> 
				<i class="ion-ios-arrow-forward"></i>
			</span> 
			
				<span>Faculties<i class="ion-ios-arrow-forward"> </i>
				</span></p>
          </div>
        </div>
      </div>
    </section>
	<section class="ftco-section">
		<div class="container-fluid px-4">
			<div class="row">
				<div class="col-md-3 course ftco-animate">
					<div class="img" style="background-image: url(/faculty/brown-brick-high-rise-mansion-3371246.jpg);"></div>
					<div class="text pt-4">
						<p class="meta d-flex">
							<span><i class="icon-user mr-2"></i>WBHouse</span>
							<span><i class="icon-stars mr-2"></i>Admin</span>
							<span><i class="icon-calendar mr-2"></i>4 Years</span>
						</p>
						<h3><a href="Pharmacy and Pharmaceutical">Pharmacy and Pharmaceutical</a></h3>
						<p>Biochemistry and Biotechnology is branch of science that explores the chemical processes within and related to living organisms. It is a laboratory based science that brings...</p>
						<p><a href="../StoreCourses/Pharmacy and Pharmaceutical" class="btn btn-primary">Check Out</a></p>
					</div>
				</div>
				<div class="col-md-3 course ftco-animate">
					<div class="img" style="background-image: url(/faculty/architectural-design-architecture-building-business-137618.jpg);"></div>
					<div class="text pt-4">
						<p class="meta d-flex">
							<span><i class="icon-user mr-2"></i>WBHouse</span>
							<span><i class="icon-stars mr-2"></i>Admin</span>
							<span><i class="icon-calendar mr-2"></i>4 Years</span>
						</p>
						<h3><a href="Medical Sciences">Medical Sciences</a></h3>
						<p>Food Science and Technology is the basic science and applied science of food; its scope starts at overlap with agricultural science and nutrition and leads through...</p>
						<p><a href="../StoreCourses/Medical Sciences" class="btn btn-primary">Check Out</a></p>
					</div>
				</div>
				<div class="col-md-3 course ftco-animate">
					<div class="img" style="background-image: url(/faculty/architecture-building-campus-clark-hall-207684.jpg);"></div>
					<div class="text pt-4">
						<p class="meta d-flex">
							<span><i class="icon-user mr-2"></i>WBHouse</span>
							<span><i class="icon-stars mr-2"></i>Admin</span>
							<span><i class="icon-calendar mr-2"></i>4 Years</span>
						</p>
						<h3><a href="Clinical Medicine">Clinical Medicine</a></h3>
						<p>Optometry and Visual Science  is a health care profession that involves examining the eyes and applicable visual systems for defects or abnormalities as well as the...</p>
						<p><a href="../StoreCourses/Clinical Medicine" class="btn btn-primary">Check Out</a></p>
					</div>
				</div>
				<div class="col-md-3 course ftco-animate">
					<div class="img" style="background-image: url(/faculty/architecture-building-campus-clark-hall-207684.jpg);"></div>
					<div class="text pt-4">
						<p class="meta d-flex">
							<span><i class="icon-user mr-2"></i>WBHouse</span>
							<span><i class="icon-stars mr-2"></i>Admin</span>
							<span><i class="icon-calendar mr-2"></i>4 Years</span>
						</p>
						<h3><a href="Health Sciences">Allied Health Sciences</a></h3>
						<p>Optometry and Visual Science  is a health care profession that involves examining the eyes and applicable visual systems for defects or abnormalities as well as the...</p>
						<p><a href="../StoreCourses/Health Sciences" class="btn btn-primary">Check Out</a></p>
					</div>
				</div>
				<div class="col-md-3 course ftco-animate">
					<div class="img" style="background-image: url(/faculty/architecture-building-campus-clark-hall-207684.jpg);"></div>
					<div class="text pt-4">
						<p class="meta d-flex">
							<span><i class="icon-user mr-2"></i>WBHouse</span>
							<span><i class="icon-stars mr-2"></i>Admin</span>
							<span><i class="icon-calendar mr-2"></i>4 Years</span>
						</p>
						<h3><a href="Veterinary Medicine">Veterinary Medicine</a></h3>
						<p>Optometry and Visual Science  is a health care profession that involves examining the eyes and applicable visual systems for defects or abnormalities as well as the...</p>
						<p><a href="../StoreCourses/Veterinary Medicine" class="btn btn-primary">Check Out</a></p>
					</div>
				</div>
				<div class="col-md-3 course ftco-animate">
					<div class="img" style="background-image: url(/faculty/architecture-building-campus-clark-hall-207684.jpg);"></div>
					<div class="text pt-4">
						<p class="meta d-flex">
							<span><i class="icon-user mr-2"></i>WBHouse</span>
							<span><i class="icon-stars mr-2"></i>Admin</span>
							<span><i class="icon-calendar mr-2"></i>4 Years</span>
						</p>
						<h3><a href="Optometry">Dental School</a></h3>
						<p>Optometry and Visual Science  is a health care profession that involves examining the eyes and applicable visual systems for defects or abnormalities as well as the...</p>
						<p><a href="../StoreCourses/Optometry and Visual Science" class="btn btn-primary">Check Out</a></p>
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