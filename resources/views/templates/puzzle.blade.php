<!DOCTYPE html>
<html lang="en">
  <head>
    <title>TekporAcademy -Basic school Games_Page</title>
	<meta property="og:image" content="https://tekporacademy.tk/images/gaming.jpg" />
	@include('include/head')
  </head>
  <body ondblclick="scrolling()" contenteditable="false">
    @include('include.header')

   <div >
   
    <section class="hero-wrap hero-wrap-2" style="background-image: url('../images/gaming.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h3 class="mb-2 bread">Games</h3>
            <p class="breadcrumbs"><span class="mr-2"><a href="/home">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Games <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>
    @if (!isset(Auth::user()->id))
    <p class="text-justified alert alert-danger text-center">
      <span class="ion-md-warning" aria-hidden="true"></span>
     <span class="sr-only">SIGN UP:</span>
      We keep records of your Gaming history to help us ofter the best of our ability. Some games will not work if you have not. <a href="/Games/puzzles">SIGN Up</a>
    </p>
    @endif
    
    <section class="ftco-section">
			<div class="container-fluid px-4">
				<div class="row">
                    <div class="col-md-3 course ftco-animate">
						<div class="img" style="background-image: url(../images/jungle.png);"></div>
						<div class="text pt-4">
							<p class="meta d-flex">
								<span><i class="icon-user mr-2"></i>WBHouse</span>
								<span><i class="icon-table mr-2"></i>89+ qu</span>
								<span><i class="icon-calendar mr-2"></i>24/7</span>
							</p>
							<h3><a  href="../../Jangle?side=Basic">Into To The Jungle</a></h3>
							<p>This is a game of hide and seek, where there are predators looking for you. Use the arrow keys to control and when the circle comes you jump in to next level.</p>
							<p><a  href="../../Jangle?side=Basic" class="btn btn-primary">Play Me</a></p>
						</div>
          </div>

          <div class="col-md-3 course ftco-animate">
						<div class="img" style="background-image: url(../spellingBee/PinClipart.com_honey-bee-drawing-clip_5763235.png);"></div>
						<div class="text pt-4">
							<p class="meta d-flex">
								<span><i class="icon-user mr-2"></i>WBHouse</span>
								<span><i class="icon-table mr-2"></i>89+ qu</span>
								<span><i class="icon-calendar mr-2"></i>24/7</span>
							</p>
				<h3><a  href="../../Games/puzzle/Spelling_Bee?side=Basic">SPELLING BEE</a></h3>
							<p>A spelling bee is a competition in which contestants are asked to spell a broad selection of words, usually with a varying degree of difficulty.</p>
							<p><a  href="../../Games/puzzle/Spelling_Bee?side=Basic" class="btn btn-primary">Play Me</a></p>
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