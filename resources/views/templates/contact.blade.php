<!DOCTYPE html>
<html lang="en">
  <head>
    <title>TekporAcademy - Contact_page</title>
    <meta property="og:image" content="https://tekporacademy.tk/images/bg_1.jpg" />
 @include('include/head')
  </head>
  <body ondblclick="scrolling()">
    @include('include.header')

   <div >
    <?php
    @$id = Auth::user()->id;
    @$email = Auth::user()->email;
    if (isset($id)) {
      if (isset($_GET['submit'])) {
      if (strlen($_GET['text']) > 10 && strlen($_GET['name']) > 5) {
        error_reporting(-1);
    ini_set('display_errors', 'On');
    set_error_handler("var_dump");
    ini_set("mail.log", "/tmp/mail.log");
    ini_set("mail.add_x_header", TRUE);
    $to = 'tekporacademyinfo@gmail.com';
    $subject = $_GET['subject'];
    $message = 'User '+$_GET['name']+' with id '+$id+' log a complain about '+$_GET['subject']+' that '+$_GET['text']+' is wrong';
    $headers = implode("\r\n", [
    'From: '+$email,
    'Reply-To: '+$email,
    'X-Mailer: PHP/' . PHP_VERSION
    ]);
    $result = mail($to, $subject, $message, $headers);
    if ($result) {
    exit;
    }
    else {
      echo("<h3 class='text-danger text-center'>complain failed  try again later</h3>");
    }

      }else {
        echo("<h3 class='text-danger text-center'>Provide more info.</h3>");
      }
  
    }
    }else {
      echo("<h3 class='text-danger text-center'>Please login. If your problem is about login, use the contact Number or email.</h3>");
    }

    
    ?>
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_1.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h3 class="mb-2 bread">Contact Us</h3>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Contact <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section contact-section">
      <div class="container">
        <div class="row d-flex contact-info">
          <div class="col-md-3 d-flex">
          	<div class="bg-light align-self-stretch box p-4 text-center">
          		<h3 class="mb-4">Address</h3>
	            <p>Kojokrom-Jerusalem Town Street 84th CL, Plot No. 216 Takoradi Western Region Ghana</p>
	          </div>
          </div>
          <div class="col-md-3 d-flex">
          	<div class="bg-light align-self-stretch box p-4 text-center">
          		<h3 class="mb-4">Contact Number</h3>
	            <p><a href="tel://+233270475728">+233 270 4757 28</a></p>
	            <p><a href="https://wa.me/233501654023">+233 501 6540 23</a></p>
	          </div>
          </div>
          <div class="col-md-3 d-flex">
          	<div class="bg-light align-self-stretch box p-4 text-center">
          		<h3 class="mb-4">Email Address</h3>
                <p><a href="mailto:info@tekporacademy.tk">info@tekporacademy.tk</a></p>
                <p><a href="mailto:tekporacademy@gmail.com">tekporacademy@gmail.com</a></p>
	          </div>
          </div>
          <div class="col-md-3 d-flex">
          	<div class="bg-light align-self-stretch box p-4 text-center">
          		<h3 class="mb-4">Website</h3>
	            <p><a href="WBHouse">https://www.tekporacademy.tk/WBHouse</a></p>
	          </div>
          </div>
        </div>
      </div>
    </section>

		<section class="ftco-section ftco-no-pt ftco-no-pb contact-section">
			<div class="container">
				<div class="row d-flex align-items-stretch no-gutters">
					<div class="col-md-6 p-4 p-md-5 order-md-last bg-light">
						<form action="/contact" method="GET">
              <div class="form-group">
                <input type="text"  name="name" class="form-control" required placeholder="Your Name">
              </div>
              <div class="form-group">
                <input type="text"  name="subject" class="form-control" required placeholder="Subject">
              </div>
              <div class="form-group">
                <textarea name="text" id="" cols="30" rows="7" required class="form-control" placeholder="Message"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" name="submit" value="Send Message" required class="btn btn-primary py-3 px-5">
              </div>
            </form>
					</div>
					<div class="col-md-6 d-flex align-items-stretch">
						<div id="map"></div>
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
