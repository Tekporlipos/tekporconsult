<?php
use App\quizing;
use App\admin;
use Carbon\Carbon;
$quizing =  quizing::orderBy('id','desc')->take(2)->get();
?>

<footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-6 col-lg-3 ftco-animate">
            <div class="ftco-footer-widget mb-5">
            	<h2 class="ftco-heading-2">Contact<i class="fas fa-location-circle    "></i></h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text"> Ghana->Takoradi->Kojokrom<br/>84th CL->PT216</span></li>
	                <li><a href="tel://+233270475728"><span class="icon icon-phone"></span><span class="text">+233 270 4757 28</span></a></li>
	                <li><a href="mailto:info@tekporacademy.tk"><span class="icon icon-envelope"></span><span class="text">info@tekporacademy.tk</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>


          <div class="col-md-6 col-lg-3 ftco-animate">
            <div class="ftco-footer-widget mb-5">
              <h2 class="ftco-heading-2">Activities</h2>

              @foreach ($quizing as $item)

              <?php
					$id = $item->admin;
					$admins = admin::where('name',$id)->take(1)->get();
					?>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(../../{{ $item->logo }});"></a>
                <div class="text">
                <h3 class="heading"><a href="../../Quizname/{{$item->title}}"> <?php echo (str_replace("_", " ", $item->title)); ?></a></h3>
                  <div class="meta">
                  <div><a href="#"><span class="icon-calendar"></span> {{Carbon::now('UTC')->createFromTimeStamp(strtotime($item->created_at))->diffForHumans()}}</a></div>
                    @foreach($admins as $adm)

                  <div><a href="../../admin/{{$adm->name}}"><span class="icon-person"></span> {{ substr($adm->name,0,7)  }}</a></div>
                    @endforeach
                    <div><a href="../../Games"><span class="icon-chat"></span>Quiz</a></div>
                  </div>
                </div>
              </div>
              @endforeach
            </div>
          </div>
          <div class="col-md-6 col-lg-3 ftco-animate">
            <div class="ftco-footer-widget mb-5 ml-md-4">
              <h2 class="ftco-heading-2">Services</h2>
              <ul class="list-unstyled">
                <li><a href="../../about"><span class="ion-ios-arrow-round-forward mr-2"></span>About</a></li>
                <li><a href="../../accounts"><span class="ion-ios-arrow-round-forward mr-2"></span>Accounts</a></li>
                <li><a href="../../blogger_Registration"><span class="ion-ios-arrow-round-forward mr-2"></span>blogger Registration</a></li>
                <li><a href="../../contact"><span class="ion-ios-arrow-round-forward mr-2"></span>Contact</a></li>
                <li><a href="../../category"><span class="ion-ios-arrow-round-forward mr-2"></span>Departments</a></li>
                <li><a href="../../savedTutorials"><span class="ion-ios-arrow-round-forward mr-2"></span>Saved Tutorials</a></li>
                <li><a href="../../donation"><span class="ion-ios-arrow-round-forward mr-2"></span>Donation</a></li>
               <li><a href="../../policy"><span class="ion-ios-arrow-round-forward mr-2"></span>Policy</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 ftco-animate">
            <div class="ftco-footer-widget mb-5">
            	<h2 class="ftco-heading-2">Subscribe Us For Update On Our Services</h2>
              <h3 class="text-success" id="subscribe"></h3>
              <div class="subscribe-form" style="background-color: black;border:solid #7722228889 2px">
                <div class="form-group">
                  <input type="text" id="email" class="form-control mb-2 text-center" placeholder="Enter email address" required>
                  <select name="category" id="category" class="form-control mb-2 text-center"  required >
                           <option value="">Category</option>
                    <option value="Agriculture">Agriculture </option>
                    <option value="Art">Art and Built</option>
                    <option value="Computing">Computing</option>
                    <option value="Courses">Forum Review</option>
                     <option value="Engineering">Engineering</option>
                    <option value="Health">Health Sciences</option>
                    <option value="Humanities">Humanities</option>
                     <option value="Robotics">Robotics</option>
                    <option value="Sciences">Sciences</option>
                    <option value="Vocational">Vocational</option>
                    <option value="Others">Others</option>
                        </select>

                  <button type="submit" onclick="subscribed()" class="form-control submit px-3 text-center">Subscribe</button>
                </div>
              </div>
            </div>
            <div class="ftco-footer-widget mb-5">
            	<h2 class="ftco-heading-2 mb-0">Connect Us</h2>
            	<ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
                <li class="ftco-animate"><a href="https://twitter.com/johntekpordzik1" title="twitter"><span class="ion-logo-twitter"></span></a></li>
                <li class="ftco-animate"><a href="https://www.facebook.com/Tekpor_Acadamey" title="facebook"><span class="ion-logo-facebook"></span></a></li>
                <li class="ftco-animate"><a href="https://www.instagram.com/tekpor_academy/" title="instagram"><span class="ion-logo-instagram"></span></a></li>
                <li class="ftco-animate"><a href="https://wa.me/233501654023" title="whatsapp"><span class="ion-logo-whatsapp"></span></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div style="" class="row">
          <div class="col-md-12 text-center ftco-animate">

            <p>
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This website is developed by <a href="https://tekporacademy.tk/WBHouse" target="_blank"> WBHouse</a> And <a href="https://colorlib.com/wp/templates/" target="_blank"> Colorlib</a>
  </p>
          </div>
        </div>
      </div>
    </footer>
<script type="text/javascript">

  function subscribed(){
 if (window.XMLHttpRequest) {
 var coun = new XMLHttpRequest;
 }else{
 var coun = new ActiveXObject('Microsoft XMLHTTP');
 }
 coun.onreadystatechange = function(){
 if(this.readyState == 4 && this.status == 200){
 document.getElementById('subscribe').innerHTML = this.responseText;
 }
 }
 var email = document.getElementById('email');
 var category = document.getElementById('category');
 var requst = `email=${email.value}&category=${category.value}`;
 var urled = "{{ URL::to('subscribe?')}}"+requst;
 coun.open('Get',urled );
 coun.setRequestHeader('content-type','application/x-www-form-urlencoded');
 coun.send();
 message.value = "";
 };
</script>
