<!DOCTYPE html>
<html lang="en">
  <head>
	<title>TekporAcademy - Registration_Page</title>
  @include('include.head')
  <meta property="og:type" content="text.question" />
  <meta property="og:url" content="https://tekporacademy.tk/addQuestion/register" />
  <meta property="og:image" content="https://tekporacademy.tk/images/bg_5.jpg" />
      
      
  <?php
  $user_id = @Auth::user()->id;
  if (isset($user_id)) {
   ?>
  <script>
  window.location.href = "../home";
  </script>
  
   <?php
  }
  
  ?>
      
   </head>
  <body ondblclick="scrolling();scroll()" class="code">
    @include('include.header')
    <section class="ftco-section ftco-consult ftco-no-pt ftco-no-pb" style="background-image: url(images/bg_5.jpg);" data-stellar-background-ratio="0.5"     id="signin">
    	<div class="overlay"></div>
        <div class="container" >
    		<div class="row justify-content-end">
    			<div class="col-md-6 py-5 px-md-5">
    				<div class="py-md-5" >
		          <div class="heading-section heading-section-white ftco-animate mb-5">
		            <h2 class="mb-4">Sign In</h2>
		            <p>Welcome back; Sign In let get started.</p>
		          </div>







              <form method="POST" action="{{ route('login') }}" class="appointment-form ftco-animate">
                @csrf
		    				<div class="d-md-flex">
			    				<div class="form-group">
                    <input id="email" type="email" value="<?php if(isset($_COOKIE["email"]) && isset($_COOKIE["pass"])){
                      echo $_COOKIE['email'];
                                            }  ?>" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="email">
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
			    				</div>

		    				</div>
		    				<div class="d-md-flex">

		    					<div class="form-group ml-md-4">
                    <div class="input-group">
                      <input id="password" value="<?php if(isset($_COOKIE["email"]) && isset($_COOKIE["pass"])){
echo $_COOKIE['pass'];
                      }  ?>" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="password">
                      @if (null == isset($_COOKIE["pass"]))
                      <span class="input-group-addon text-primary" style="cursor: pointer" > <i onclick="showpass('password','eye','eyeoff')" id="eye" class="ion-md-eye"></i><i onclick="hidepass('password','eyeoff','eye')" class="ion-md-eye-off" id="eyeoff" style="display: none"></i></span>
                      @endif
                      

    


                      </div>

			    					@error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
			    				</div>
                </div>
                <div class="form-group row">
                  <div class="col-md-6 offset-md-4">
                      <div class="form-check">
                          <input class="form-check-input"  onchange="rememberME('remember','password','email')" <?php if(isset($_COOKIE["email"]) && isset($_COOKIE["pass"])){
                            echo('checked');
                                                  }  ?>  type="checkbox" name="remember"  id="remember" {{ old('remember') ? 'checked' : '' }}>

                          <label class="form-check-label" for="remember">
                              {{ __('Remember Me') }}
                          </label>



                      </div>
                  </div>
              </div>

		    				<div class="d-md-flex">
		    					<div class="form-group">

			            <div class="form-group ml-md-4">
                    <button type="submit"  class="btn btn-primary py-3 px-4">
                      {{ __('Login') }}
                  </button>
                    <hr>
                    <hr>
                    @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif
                    <!--    <label class="form-check-label">
                        <div onclick="changeto()" class="g-signin2"  data-onsuccess="onSignIn"></div>
                     </label>    -->
                     <div align="center">
                     <label class="form-check-label">
                      <a href="/redirect"><img src="/sign-in-google.png" width="120px" height="36px" style="vertical-align: baseline;"/></a>
                    </label>
                       <label class="form-check-label">
                       <a href="/fredirect"><img src="/facebook-verified.png" width="120px" height="36px" style="vertical-align: baseline;"/></a>
                     </label>
                     </div>
                  
                        </div>
                        <hr/><hr/>
                        <div class="form-group ml-md-4">
                            <span class="btn btn-primary py-3 px-4" onclick="hide('signin','signup')">SIGN UP</span>
		    				</div>
                        </form>









                    </div>

    			</div>
        </div>
    	</div>

    </section>



    <section class="ftco-section ftco-consult ftco-no-pt ftco-no-pb" style="background-image: url(images/bg_5.jpg); display:none" data-stellar-background-ratio="0.5"     id="signup">
    	<div class="overlay"></div>
        <div class="container" >
    		<div class="row justify-content-end">
    			<div class="col-md-6 py-5 px-md-5">
    				<div class="py-md-5" >
		          <div class="heading-section heading-section-white ftco-animate mb-5">
		            <h2 class="mb-4">Sign UP</h2>
		            <p>Sign up to use the full features this website provide</p>
		          </div>





              <form method="POST" action="{{ route('register') }}" class="appointment-form ftco-animate">
                @csrf
		    				<div class="d-md-flex">
			    				<div class="form-group">
                    
                    <input id="Username" type="text" class="form-control @error('Username') is-invalid @enderror" name="Username" value="{{ old('Username') }}" required autocomplete="Username" autofocus placeholder="First Name">

                    @error('Username')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                  </div>

                  <div class="form-group ml-md-4">
                    <input id="Lname" type="text" class="form-control @error('Lname') is-invalid @enderror" name="Lname" value="{{ old('Lname') }}" required autocomplete="Lname" autofocus placeholder="Last Name">

                    @error('Lname')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                  </div>


		    				</div>
                <div class="d-md-flex">
                  <div class="form-group">
                  <div id="usererror" class="text-danger"></div>
                    <input id="name" onkeyup="username()" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Username">

                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                  </div>



			    				<div class="form-group ml-md-4">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email">
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

			    				</div>
                </div>
                <div class="d-md-flex">
			    				<div class="form-group">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password" >
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

			    				</div>
			    				<div class="form-group ml-md-4">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Comfirm Password" >
                </div>
              </div>
		    				<div class="d-md-flex">
		    					<div class="form-group">
			    					<div class="form-field">
		        					<div class="select-wrap">
		                    <div class="icon"><span class="ion-ios-arrow-down"></span></div>
		                    <select name="Course" id="" class="form-control" required >
                           <option value="">Category</option>
                    <option value="Agriculture">Agriculture </option>
                    <option value="Art">Art and Built</option>
                    <option value="Computing">Computing</option>
                    <option value="Courses">Forum Review</option>
                     <option value="Engineering">Engineering</option>
                    <option value="Health">Health Sciences</option>
                    <option value="Humanities">Humanities</option>
                     <option value="Robotics">Robotics</option>
                    <option value="Science">Science</option>
                    <option value="Vocational">Vocational</option>
                    <option value="Others">Others</option>
                        </select>
                        @error('Course')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
		                  </div>
			              </div>
			    				</div>
		    					<div class="form-group ml-md-4">
                    <input type="text" name="School" class="form-control" placeholder="School Name" required >
                    @error('School')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
			    				</div>
		    				</div>
		    				<div class="d-md-flex">
		    					<div class="form-group">

			            <div class="form-group ml-md-4">
                    <button type="submit" class="btn btn-primary">
                      {{ __('Register') }}
                  </button>
                        </div>
                        <hr/><hr/>
                        <div class="form-group ml-md-4"><!--<span  class="btn btn-primary py-3 px-4"  >SIGN IN</span>-->
                            <span class="btn btn-primary py-3 px-4" onclick="hide('signup','signin')" >SIGN IN</span>
		    				</div>
                        </form>








                    </div>

    			</div>
        </div>
    	</div>

    </section>

    @include('include/footer')
    @include('include/down')


  <script>
  function hide(para1,para2){
      var inds = document.getElementById(para1);
      var outsd = document.getElementById(para2);
      inds.style.display = "none";

      outsd.style.display = "block";
  };
  function changeto(){
      window.location.href = "/redirect";
  }
  function username() {
  var hand =  document.getElementById('name');
  var handvalue = hand.value;
  var error = document.getElementById('usererror');
if (handvalue.includes(' ')) {
  error.innerHTML = "Username can not contain white space";
  hand.value= "";
}else{
  error.innerHTML = "";
}
  }
function showpass(div1,div2,div3) {
  var inputed = document.getElementById(div1);
  var hide = document.getElementById(div2);
  var show = document.getElementById(div3);
  inputed.type = 'text';
  hide.style.display= 'none';
  show.style.display = 'block';
}
function hidepass(div1,div2,div3) {
  var inputed = document.getElementById(div1);
  var hide = document.getElementById(div2);
  var show = document.getElementById(div3);
  inputed.type = 'password';
  hide.style.display= 'none';
  show.style.display = 'block';
}
  </script>
   </script>
   <script type="text/javascript">
function rememberME(div1,div2,div3){
  var rem = document.getElementById(div1);
  if (rem.checked) {
    if (window.XMLHttpRequest) {
    var coun = new XMLHttpRequest;
    }else{
    var coun = new ActiveXObject('Microsoft XMLHTTP');
    }
    coun.onreadystatechange = function(){
 if(this.readyState == 4 && this.status == 200){
console.log("cokies");
 }
 }
 var pass = document.getElementById(div2);
 var email = document.getElementById(div3);
 var requst = `pass=${pass.value}&email=${email.value}`;
    var urled = "{{ URL::to('cookies?')}}"+requst;
    coun.open('Get',urled );
    coun.setRequestHeader('content-type','application/x-www-form-urlencoded');
    coun.send(); 
  }
};
     </script>
  </body>
</html>
