<!DOCTYPE html>
<html lang="en">
  <head>
    <title>TekporAcademy - Games_Typing Class</title>
	<meta property="og:image" content="https://tekporacademy.tk/typingimg/tekporacatyping_class.png" />
 @include('include/head')
 <style>
	 .playnow{
		 cursor: pointer;
	 }
 </style>
  </head>
  <body ondblclick="scrolling()">
    @include('include.header')
   <div >

    
    <section class="hero-wrap hero-wrap-2" style="background-image: url('/typingimg/pngwing.com.png');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h3 class="mb-2 bread">Games</h3>
            <p class="breadcrumbs"><span class="mr-2"><a href="home">Home <i class="ion-ios-arrow-forward"></i></a> <a href="Games">Games <i class="ion-ios-arrow-forward"></i></a></span> <span><b><a href="/typingClass">Typing Class</a> </b> <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>
	<?php
	use App\typing;
	use App\typingClase;
	@$user = Auth::user()->id;
	if (isset($user)) {
		$typingClass = typingClase::where('user',$user)->get();
	
	if (sizeOf($typingClass) <= 0) {
		$typingClase = new typingClase;
	 $typingClase->user = $user;
	  $typingClase->typing_id = 1;
	  $typingClase->level = "BEGINNER";
	  $typingClase->accurate = 00;
	  $typingClase->speed = 00;
	$typingClase->save();
	
	$typingClass = typingClase::where('user',$user)->get();
	foreach ($typingClass as $key => $Class) {
		$typing = typing::where('id',"$Class->typing_id")->get();
	}
	}else {
		foreach ($typingClass as $key => $Class) {
		$typing = typing::where('id',"$Class->typing_id")->get();
	}	
	}
	?>
<input type="hidden" id="check" name="signedIn" value="yescango">
	<?php
	}else {
		?>
<input type="hidden" id="check" name="signedIn" value="nocannotgo">
		<p class="text-justified alert alert-danger text-center">
                  <span class="ion-md-warning" aria-hidden="true"></span>
                 <span class="sr-only">SIGN UP:</span>
                  We keep records of your typing history to help us ofter the best of our ability. We can not do that if you have not. <a href="/typingSignin">SIGN Up</a>
                </p>
		<?php
	}

	
	?>
	
    <section class="ftco-section">
			<div class="container-fluid px-4">
				<h3 class="fas fa-h3 ftco-animate text-primary" style="font-family:cursive" align="center"><u>BEGINNER</u></h3>
				<div class="row">
				<div class="col-md-2 course ftco-animate" title="Introduction" style="height: 100px">
	<a class="playnow" onclick="playnowt('/typingIntroduction#videoIntro','<?php if (isset($typingClass)) {foreach ( @$typingClass as $key => $value ) { echo $value->typing_id;} }else{echo 0;} ?>',0)">
						<div class="img" style="background-image: url(/typingimg/introduction.png);height:100px"></div>
					</a>	
					</div>
					<div class="col-md-2 course ftco-animate" title="right home key" style="height: 100px">
						<a class="playnow" onclick="playnowt('/typing','<?php if (isset($typingClass)) {foreach ( @$typingClass as $key => $value ) { echo $value->typing_id;} }else{echo 0;} ?>',1)">
							<div class="img" style="background-image: url(/typingimg/rigjthomekey.png);height:100px"></div>
						</a>	
						</div>
						<div class="col-md-2 course ftco-animate" title="left home key" style="height: 100px">
							<a class="playnow" onclick="playnowt('/typing','<?php if (isset($typingClass)) {foreach ( @$typingClass as $key => $value ) { echo $value->typing_id;} }else{echo 0;} ?>',11)">
								<div class="img" style="background-image: url(/typingimg/lefthomekey.png);height:100px"></div>
							</a>	
							</div>
							<div class="col-md-2 course ftco-animate" title="g & h key" style="height: 100px">
								<a class="playnow" onclick="playnowt('/typing','<?php if (isset($typingClass)) {foreach ( @$typingClass as $key => $value ) { echo $value->typing_id;} }else{echo 0;} ?>',21)">
									<div class="img" style="background-image: url(/typingimg/g&hkey.png);height:100px"></div>
								</a>	
								</div>
								<div class="col-md-2 course ftco-animate"  title="e & i key" style="height: 100px">
									<a class="playnow" onclick="playnowt('/typing','<?php if (isset($typingClass)) {foreach ( @$typingClass as $key => $value ) { echo $value->typing_id;} }else{echo 0;} ?>',31)">
										<div class="img" style="background-image: url(/typingimg/e&ikey.png);height:100px"></div>
									</a>	
									</div>
									<div class="col-md-2 course ftco-animate" title="r & u key" style="height: 100px">
										<a class="playnow" onclick="playnowt('/typing','<?php if (isset($typingClass)) {foreach ( @$typingClass as $key => $value ) { echo $value->typing_id;} }else{echo 0;} ?>',41)">
											<div class="img" style="background-image: url(/typingimg/r&ukey.png);height:100px"></div>
										</a>	
										</div> 
										<div class="col-md-2 course ftco-animate" title="t & Y key"  style="height: 100px">
											<a class="playnow" onclick="playnowt('/typing','<?php if (isset($typingClass)) {foreach ( @$typingClass as $key => $value ) { echo $value->typing_id;} }else{echo 0;} ?>',51)">
												<div class="img" style="background-image: url(/typingimg/t&Ykey.png);height:100px"></div>
											</a>	
											</div>
											<div class="col-md-2 course ftco-animate" title="w & o key" style="height: 100px">
												<a class="playnow" onclick="playnowt('/typing','<?php if (isset($typingClass)) {foreach ( @$typingClass as $key => $value ) { echo $value->typing_id;} }else{echo 0;} ?>',61)">
													<div class="img" style="background-image: url(/typingimg/w&okey.png);height:100px"></div>
												</a>	
												</div>
												<div class="col-md-2 course ftco-animate" title="n & m key" style="height: 100px">
													<a class="playnow" onclick="playnowt('/typing','<?php if (isset($typingClass)) {foreach ( @$typingClass as $key => $value ) { echo $value->typing_id;} }else{echo 0;} ?>',71)">
														<div class="img" style="background-image: url(/typingimg/n&mkey.png);height:100px"></div>
													</a>	
													</div>
													<div class="col-md-2 course ftco-animate" title="v & b key" style="height: 100px">
														<a class="playnow" onclick="playnowt('/typing','<?php if (isset($typingClass)) {foreach ( @$typingClass as $key => $value ) { echo $value->typing_id;} }else{echo 0;} ?>',81)">
															<div class="img" style="background-image: url(/typingimg/v&bkey.png);height:100px"></div>
														</a>	
														</div>
														<div class="col-md-2 course ftco-animate" title="c & ' key" style="height: 100px">
															<a class="playnow" onclick="playnowt('/typing','<?php if (isset($typingClass)) {foreach ( @$typingClass as $key => $value ) { echo $value->typing_id;} }else{echo 0;} ?>',91)">
																<div class="img" style="background-image: url(/typingimg/ckey.png);height:100px"></div>
															</a>	
															</div>
															<div class="col-md-2 course ftco-animate" title="z & x key" style="height: 100px">
																<a class="playnow" onclick="playnowt('/typing','<?php if (isset($typingClass)) {foreach ( @$typingClass as $key => $value ) { echo $value->typing_id;} }else{echo 0;} ?>',101)">
																	<div class="img" style="background-image: url(/typingimg/z&xkey.png);height:100px"></div>
																</a>	
																</div>
																	<div class="col-md-2 course ftco-animate" title=". & / key" style="height: 100px">
																<a class="playnow" onclick="playnowt('/typing','<?php if (isset($typingClass)) {foreach ( @$typingClass as $key => $value ) { echo $value->typing_id;} }else{echo 0;} ?>',121)">
																	<div class="img" style="background-image: url(/typingimg/dotandslashkey.png);height:100px"></div>
																</a>	
																</div>
																<div class="col-md-2 course ftco-animate" style="height: 100px">
																	<a class="playnow" onclick="playnowt('/typing','<?php if (isset($typingClass)) {foreach ( @$typingClass as $key => $value ) { echo $value->typing_id;} }else{echo 0;} ?>',131)">
																		<div class="img" style="background-image: url(/typingimg/fun1.png);height:100px"></div>
																	</a>	
																	</div>
																	<div class="col-md-2 course ftco-animate" style="height: 100px">
																		<a class="playnow" onclick="playnowt('/typing','<?php if (isset($typingClass)) {foreach ( @$typingClass as $key => $value ) { echo $value->typing_id;} }else{echo 0;} ?>',131)">
																			<div class="img" style="background-image: url(/typingimg/fun2.png);height:100px"></div>
																		</a>	
																		</div>
																		<div class="col-md-2 course ftco-animate" style="height: 100px">
																			<a class="playnow" onclick="playnowt('/typing','<?php if (isset($typingClass)) {foreach ( @$typingClass as $key => $value ) { echo $value->typing_id;} }else{echo 0;} ?>',131)">
																				<div class="img" style="background-image: url(/typingimg/fun3.png);height:100px"></div>
																			</a>	
																			</div>

																			<div class="col-md-2 course ftco-animate" style="height: 100px">
																				<a class="playnow" onclick="playnowt('/typing','<?php if (isset($typingClass)) {foreach ( @$typingClass as $key => $value ) { echo $value->typing_id;} }else{echo 0;} ?>',131)">
																					<div class="img" style="background-image: url(/typingimg/fun4.png);height:100px"></div>
																				</a>	
																				</div>
																				<div class="col-md-2 course ftco-animate" style="height: 100px">
																					<a class="playnow" onclick="playnowt('/typing','<?php if (isset($typingClass)) {foreach ( @$typingClass as $key => $value ) { echo $value->typing_id;} }else{echo 0;} ?>',131)">
																						<div class="img" style="background-image: url(/typingimg/fun5.png);height:100px"></div>
																					</a>	
																					</div>
																				
				</div>
				<h3 class="fas fa-h3 ftco-animate text-primary" style="font-family:cursive" align="center"><u>INTERMEDIATE</u></h3>
				<div class="row">
				<div class="col-md-2 course ftco-animate" style="height: 100px">
					<a href="">
						<div class="img" style="background-image: url(/typingimg/mentanace.png);height:100px"></div>
					</a>	
					</div>
					<div class="col-md-2 course ftco-animate" style="height: 100px">
						<a href="">
							<div class="img" style="background-image: url(/typingimg/mentanace.png);height:100px"></div>
						</a>	
						</div>
						<div class="col-md-2 course ftco-animate" style="height: 100px">
							<a href="">
								<div class="img" style="background-image: url(/typingimg/mentanace.png);height:100px"></div>
							</a>	
							</div>
							<div class="col-md-2 course ftco-animate" style="height: 100px">
								<a href="">
									<div class="img" style="background-image: url(/typingimg/mentanace.png);height:100px"></div>
								</a>	
								</div>
								<div class="col-md-2 course ftco-animate" style="height: 100px">
									<a href="">
										<div class="img" style="background-image: url(/typingimg/mentanace.png);height:100px"></div>
									</a>	
									</div>
									<div class="col-md-2 course ftco-animate" style="height: 100px">
										<a href="">
											<div class="img" style="background-image: url(/typingimg/mentanace.png);height:100px"></div>
										</a>	
										</div>
										<div class="col-md-2 course ftco-animate" style="height: 100px">
											<a href="">
												<div class="img" style="background-image: url(/typingimg/mentanace.png);height:100px"></div>
											</a>	
											</div>
											<div class="col-md-2 course ftco-animate" style="height: 100px">
												<a href="">
													<div class="img" style="background-image: url(/typingimg/mentanace.png);height:100px"></div>
												</a>	
												</div>
												<div class="col-md-2 course ftco-animate" style="height: 100px">
													<a href="">
														<div class="img" style="background-image: url(/typingimg/mentanace.png);height:100px"></div>
													</a>	
													</div>
													<div class="col-md-2 course ftco-animate" style="height: 100px">
														<a href="">
															<div class="img" style="background-image: url(/typingimg/mentanace.png);height:100px"></div>
														</a>	
														</div>
														<div class="col-md-2 course ftco-animate" style="height: 100px">
															<a href="">
																<div class="img" style="background-image: url(/typingimg/mentanace.png);height:100px"></div>
															</a>	
															</div>
															<div class="col-md-2 course ftco-animate" style="height: 100px">
																<a href="">
																	<div class="img" style="background-image: url(/typingimg/mentanace.png);height:100px"></div>
																</a>	
																</div>
				</div>
				<h3 class="fas fa-h3 ftco-animate text-primary" style="font-family:cursive" align="center"><u>ADVANCE</u></h3>
				<div class="row">
				<div class="col-md-2 course ftco-animate" style="height: 100px">
					<a href="">
						<div class="img" style="background-image: url(/typingimg/mentanace.png);height:100px"></div>
					</a>	
					</div>
					<div class="col-md-2 course ftco-animate" style="height: 100px">
						<a href="">
							<div class="img" style="background-image: url(/typingimg/mentanace.png);height:100px"></div>
						</a>	
						</div>
						<div class="col-md-2 course ftco-animate" style="height: 100px">
							<a href="">
								<div class="img" style="background-image: url(/typingimg/mentanace.png);height:100px"></div>
							</a>	
							</div>
							<div class="col-md-2 course ftco-animate" style="height: 100px">
								<a href="">
									<div class="img" style="background-image: url(/typingimg/mentanace.png);height:100px"></div>
								</a>	
								</div>
								<div class="col-md-2 course ftco-animate" style="height: 100px">
									<a href="">
										<div class="img" style="background-image: url(/typingimg/mentanace.png);height:100px"></div>
									</a>	
									</div>
									<div class="col-md-2 course ftco-animate" style="height: 100px">
										<a href="">
											<div class="img" style="background-image: url(/typingimg/mentanace.png);height:100px"></div>
										</a>	
										</div>
										<div class="col-md-2 course ftco-animate" style="height: 100px">
											<a href="">
												<div class="img" style="background-image: url(/typingimg/mentanace.png);height:100px"></div>
											</a>	
											</div>
											<div class="col-md-2 course ftco-animate" style="height: 100px">
												<a href="">
													<div class="img" style="background-image: url(/typingimg/mentanace.png);height:100px"></div>
												</a>	
												</div>
												<div class="col-md-2 course ftco-animate" style="height: 100px">
													<a href="">
														<div class="img" style="background-image: url(/typingimg/mentanace.png);height:100px"></div>
													</a>	
													</div>
													<div class="col-md-2 course ftco-animate" style="height: 100px">
														<a href="">
															<div class="img" style="background-image: url(/typingimg/mentanace.png);height:100px"></div>
														</a>	
														</div>
														<div class="col-md-2 course ftco-animate" style="height: 100px">
															<a href="">
																<div class="img" style="background-image: url(/typingimg/mentanace.png);height:100px"></div>
															</a>	
															</div>
															<div class="col-md-2 course ftco-animate" style="height: 100px">
																<a href="">
																	<div class="img" style="background-image: url(/typingimg/mentanace.png);height:100px"></div>
																</a>	
																</div>
				</div>
			</div>
		</section>
		
		
		@include('include/footer')    @include('include/down')
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
	  <script>
		  function playnowt(div1,div2,div4) {
			if (div2 >= div4 && div2 <= div4+10) {
	var check = document.getElementById('check');
 if (check.value =="yescango" ) {
	window.location.href = div1;
 }else{
     window.alert("YOU HAVE NOT SING UP, WE CAN NOT LET YOU USE.");
 };
 }else if(div2 > div4){
	window.alert("YOU ARE GOING BACK.");
 }else{
     window.alert("YOU ARE NOT QUALIFY TO PLAY THIS LEVEL.");
 };
 }
	  </script>
  </body>
</html>