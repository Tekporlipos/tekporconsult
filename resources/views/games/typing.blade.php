<!DOCTYPE html>
<html lang="en">
  <head>
    <title>TekporAcademy - Games_Typing Class</title>
	<meta property="og:image" content="https://tekporacademy.tk/typingimg/tekporacatyping_class.png" />
	@include('include/head')
 <link rel="stylesheet" href="{{ asset('css/typing.css') }}">
  </head>
<?php
use App\typing;
use App\typingClase;
$user = Auth::user()->id;
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
  <body class="code">


		 <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#577380"/></svg>
		 </div>
	  <div id="body" class="code">
		  <div class="warning">
			<p class="text-justified alert alert-danger">
				<span class="ion-md-warning" aria-hidden="true"></span>
			   <span class="sr-only">TAKE NOTE:</span>
			   We are very sorry to let you know, the device you are tring to run this application on does not support. This typing class can only work on device with physical keyboard. But we will be heppy to help you on this regard.
				 <a href="../contact" target="blank">Help</a>
			  </p>
		  </div>
		  <div class="text-danger" id="error"></div>
		<div id="header">
			<div id="screen">
				<div id="message">
					<div class="row">
						<div class="col-6">
							<p class="lead">
								<blockquote>Welcome To TekporAcademy Typing Class.</blockquote>
								Click the READY button to continue with lesson plan.
							</p>
						</div>
						<div class="col-6">
							<img id="tepor" src="/typingimg/tekporacademy_typers_edit.jpg" class="img-thumbnail" alt="Tekpor">
						</div>
					</div>
				</div>
				<div id="finish" class="code">
					<div class="row">
						<div class="col-6">
							<img src="/typingimg/tekporaca.jpg"  class="img-thumbnail" id="image">
						</div>
						<div class="col-6" id="table">
							<div class="row">
								<div class="col-8">Accuracy</div>
								<div class="col-4"><span id="accuracy">00</span>%</div>
							</div>
							<div class="row">
								<div class="col-8">Typing Speed</div>
								<div class="col-4"><span id="calpm">00</span>CPS</div>
							</div>
							<div class="row">
								<div class="col-8">Errors</div>
								<div class="col-4"> <span id="errorcal">00</span> (<span id="errorno">00</span>)</div>
							</div>
							<div class="row">
								<div class="col-8">Adjusted Speed</div>
								<div class="col-4"><span id="calalpm">00</span>ACPS</div>
							</div>
						</div>
					</div>
					<hr/>
					<input type="hidden" value="00" id="time">
					<input type="hidden" value="start" id="pauseTime">
					<div class="lead">Keep practicing, you still need some work to master the keyboard. Your accuracy was <span id="passcentage">00</span>% and your typing speed was <span id="typingspeed">00</span>CPS. You made <span class="error" id="aerror">00</span> errors in this lession, so your Adjusted speed was <span id="alpm">00</span>ACPS.</div>
				</div>
			<div id="text" class="code">
				@foreach ($typing as $item)
				<div id="intext1">{{$item->text}}</div>
			<input type="hidden" id="typingid" value="{{$item->id}}">
				<textarea aria-autocomplete="none" disabled="true" autocomplete="none" id="inputtext1" autofocus="ture" oninput="error()" onkeydown="keyboard()" aria-expanded="false" spellcheck="false"></textarea>
				<div   style="display: none" id="intext2"></div>
				<textarea  style="display: none" disabled="true" aria-autocomplete="none" autocomplete="none"  aria-expanded="false" spellcheck="false" id="inputtext2"></textarea>
				@endforeach
			</div>
			</div>
			<div id="indicators" class="code">
				<div id="indibody">
					<div id="start" onclick="start()" onmouseover="onbegin()" title="click the BEGIN botton to begin Lesson">BEGIN</div>
					<div id="nextStart" onmouseover="onstarted()" onclick="nextSart()" title="click the START botton to start">START</div>
					<div id="ready" onmousemove="clickready()"   onclick="ready()">READY</div>
					<div id="Bready" onmouseover="clickready()"  onclick="Bready()">READY</div>
					<div id="print" onclick="print()" onmouseover="onprint()">PRINT</div>
					@foreach ($typingClass as $item1)
					<div id="level">{{$item1->level}}</div>
					<div id="timej"><span id="H">00</span> : <span id="M">00</span> : <span id="S">00</span></div>
				<div id="speed"><span id="speedmeter">{{$item1->speed}}</span> ACPS</div>
					@endforeach
					<div id="pause" onclick="pause()" onmouseover="onpaused()" data-toggle="modal" data-target="#pausemadel">PAUSE</div>
					<div id="next" onclick="nextSart()" onmouseover="onnext()" >NEXT</div>
					<div id="wait" onclick="wait()" onmouseover="onwait()">WAIT</div>
					<div id="break" style="display: none" id="break" onmouseover="onbreak()" onclick="breakt()">BREAK</div>
				</div>
			
			</div>
				  </div>

				<div id="footer" class="code">
			<div id="keyboard" class="code">
				<!-- blank -->
			<img  src="/Keyset/blank.png" id="key0"  width="100%" height="100%">
			<!-- small -->
			<img  src="/Keyset/small/a_key.png" id="key1" class="key_image" width="100%" height="100%">
			<img  src="/Keyset/small/b_key.png" id="key2" class="key_image" width="100%" height="100%">
			<img  src="/Keyset/small/c_key.png" id="key3" class="key_image" width="100%" height="100%">
			<img  src="/Keyset/small/d_key.png" id="key4" class="key_image" width="100%" height="100%">
			<img  src="/Keyset/small/e_key.png" id="key5" class="key_image" width="100%" height="100%">
			<img  src="/Keyset/small/f_key.png" id="key6" class="key_image" width="100%" height="100%">
			<img  src="/Keyset/small/g_key.png" id="key7" class="key_image" width="100%" height="100%">
			<img  src="/Keyset/small/h_key.png" id="key8" class="key_image" width="100%" height="100%">
			<img  src="/Keyset/small/i_key.png" id="key9" class="key_image" width="100%" height="100%">
			<img  src="/Keyset/small/j_key.png" id="key10" class="key_image" width="100%" height="100%">
			<img  src="/Keyset/small/k_key.png" id="key11" class="key_image" width="100%" height="100%">
			<img  src="/Keyset/small/l_key.png" id="key12" class="key_image" width="100%" height="100%">
			<img  src="/Keyset/small/m_key.png" id="key13" class="key_image" width="100%" height="100%">
			<img  src="/Keyset/small/n_key.png" id="key14" class="key_image" width="100%" height="100%">
			<img  src="/Keyset/small/o_key.png" id="key15" class="key_image" width="100%" height="100%">
			<img  src="/Keyset/small/p_key.png" id="key16" class="key_image" width="100%" height="100%">
			<img  src="/Keyset/small/q_key.png" id="key17" class="key_image" width="100%" height="100%">
			<img  src="/Keyset/small/r_key.png" id="key18" class="key_image" width="100%" height="100%">
			<img  src="/Keyset/small/s_key.png" id="key19" class="key_image" width="100%" height="100%">
			<img  src="/Keyset/small/t_key.png" id="key20" class="key_image" width="100%" height="100%">
			<img  src="/Keyset/small/u_key.png" id="key21" class="key_image" width="100%" height="100%">
			<img  src="/Keyset/small/v_key.png" id="key22" class="key_image" width="100%" height="100%">
			<img  src="/Keyset/small/w_key.png" id="key23" class="key_image" width="100%" height="100%">
			<img  src="/Keyset/small/x_key.png" id="key24" class="key_image" width="100%" height="100%">
			<img  src="/Keyset/small/y_key.png" id="key25" class="key_image" width="100%" height="100%">
			<img  src="/Keyset/small/z_key.png" id="key26" class="key_image" width="100%" height="100%">
					<!-- symbols -->
			<img  src="/Keyset/symbol/space_key.png" id="key27" class="key_image" alt="blank key" width="100%" height="100%">
			<img  src="/Keyset/symbol/semicom_key.png" id="key28" class="key_image" alt="blank key" width="100%" height="100%">
			
	<!-- capital -->
			</div>
				</div>
	  </div>
	  <!-- modal -->
	  <div class="modal fade" id="pausemadel" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-body">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	<div class="jumbotron jumbotron-fluid" id="modal_body">
<p class="lead">
	Your session is currently paused. If you would like to continue your lesson, click the RESUME button.
</p>
<p class="lead">
	If you would like to start this lesson over. Simply click the START OVER button.
</p>
<p class="lead">
	If you would like to go back to the beginning of this section, click the END button.
</p>
	</div>
<div class="row" class="code">
	<div class="col-4"><button type="button" data-dismiss="modal" aria-hidden="true" onclick="resume()" onmouseover="onresume()" class="btn-sm btn btn-primary">RESUME</button></div>
	<div class="col-4"><button type="button" data-dismiss="modal" aria-hidden="true" onclick="startOver()" onmouseover="onstartover()" class="btn-sm btn btn-primary">START OVER</button></div>
	<div class="col-4"><button  type="button" onclick="closed()" onmouseover="onend()" data-dismiss="modal" aria-hidden="true" class="btn-sm btn btn-primary">END</button></div>
</div>
			
			</div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
	</div>
	  </div>
	  <!-- library-->
	  <audio id="welcome" autoplay style="display: hidden" src="/Library/welcome.wav"></audio>
	  <audio id="clickreadyau" style="display: hidden" src="/Library/ready.wav"></audio>
	  <audio id="breakau" style="display: hidden" src="/Library/Break.wav"></audio>
	  <audio id="pausedau" style="display: hidden" src="/Library/paused.wav"></audio>
	  <audio id="resumeau" style="display: hidden" src="/Library/resume.wav"></audio>
	  <audio id="session" style="display: hidden" src="/Library/session.wav"></audio>
	  <audio id="startoverau" style="display: hidden" src="/Library/startover.wav"></audio>
	  <audio id="waitau" style="display: hidden" src="/Library/wait.wav"></audio>
	  <audio id="startau" style="display: hidden" src="/Library/start.wav"></audio>
	  <audio id="endau" style="display: hidden" src="/Library/end.wav"></audio>
	  <audio id="printau" style="display: hidden" src="/Library/print.wav"></audio>
	  <audio id="beginau" style="display: hidden" src="/Library/begin.wav"></audio>
	  <audio id="nextau" style="display: hidden" src="/Library/next.wav"></audio>
	  <audio id="practi" style="display: hidden" src="/Library/finish.wav"></audio>
	  <audio id="errorau" style="display: hidden" src="/Library/error.wav"></audio>
	  <audio id="em" style="display: hidden" src="/Library/errorm.wav"></audio>





    @include('include/down')
  </body>
  <script type="text/javascript">
	$(document).ready(function() {
	  $('body').bind('cut copy paste', function (e) {
		e.preventDefault();
	  })
	  $(".code").on("contextmenu", function(e) {
		return false;
	  })
	})
	$(document).keydown(function (event) {
		console.log(event.keyCode)
	  if (event.keyCode == 123) { 
		  return false;
	  } else if (event.ctrlKey && event.shiftKey && event.keyCode == 73) {     
		  return false;
	  } else if (event.ctrlKey && event.shiftKey && event.keyCode == 67) {     
		  return false;
	  } else if (event.keyCode == 8){
		return false;
	  } else if (event.keyCode == 13){
		return false;
	  }
	  else if (event.keyCode == 37){
		return false;
	  }
	  else if (event.keyCode == 38){
		return false;
	  }
	  else if (event.keyCode == 6-9){
		return false;
	  }
	  else if (event.keyCode == 40){
		return false;
	  }
	  
  });
	</script>
	<script>
		   var imgs = document.getElementsByTagName("img");

// loop through fetched images
for (i = 0; i < imgs.length; i++) {
	// and define onmousedown event handler
	imgs[i].onmousedown = disableDragging;
}

function disableDragging(e) {
	e.preventDefault();
}
	</script>
		<script src="{{ asset('js/typing.js') }}"></script>
</html>