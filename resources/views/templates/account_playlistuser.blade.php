<!DOCTYPE html>
<html lang="en">
  <head>
    <title>TekporAcademy - Courses_page</title>
    <meta property="og:image" content="https://tekporacademy.tk/images/bg_1.jpg" />
 @include('include/head')
  </head>
  <body ondblclick="scrolling()">
    @include('include.header')
   <div >
   
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_1.jpg');">
        <div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
              <h3 class="mb-2 bread">Accounts</h3>
              <p class="breadcrumbs"><span class="mr-2"><a href="/home">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Accounts <i class="ion-ios-arrow-forward"></i></span></p>
            </div>
          </div>
        </div>
      </section>

      <section class="container">
        
     
        <div class="content">
           
          <br>
          
            <div class="row">
  
              <div class="col-md-2">
  <img src="images/person_1.jpg" id="imadim" class="thumbnail" style="border-radius: 50%" width="70px" height="70px"  alt="Admin" srcset="the admin own the image">
              </div>
              <div class="col-md-6">
              
  <h1 class="small"><b> {{ Auth::user()->name }}</b></h1>
  <h6 class="small">2M Subscribers</h6>
                              </div>
              <div class="col-md-4">
  <button class="btn btn-lg btn-danger"><a class="text-white" href="#"> Subscribe</a></button>
              </div>
            </div>
           
            
          </div> 
          <br>
      
        <div class="row">
            <div class="col-md-2">
    <i class="" aria-hidden="true"> <a href="accounts">HOME</a> </i>
            </div>
            <div class="col-md-2">
              <i class="" aria-hidden="true"> <a href="accounts_subscription">SUBSCRIPTION</a> </i>
                      </div>
            <div class="col-md-2">
                <b class="" aria-hidden="true"><a href="accounts_playlist">PLAYLIST</a></b>
            </div>
            <div class="col-md-2">
                <i class="" aria-hidden="true"><a href="accounts_channels">CHANNEL</a></i>
            </div>
            <div class="col-md-2">
                <i class="" aria-hidden="true"><a href="ccounts_discustion">DISCUSSION</a></i>
            </div>
            <div class="col-md-2">
                <i class="" aria-hidden="true"><a href="accounts_about">ABOUT</a></i>
            </div>
        </div>
    </section>


    <div class="container-fluid">

      <section class="ftco-section">
        <div class="container-fluid px-4">
            <hr>
            <a href="">
                <i class="fas fa-h3    ">playlist 1</i>
            </a>
           
          <div class="row">        

            <div class="col-md-3 course ftco-animate">
              <div class="img" style="background-image: url(images/course-8.jpg);"></div>
              <div class="text pt-4">
               
                <h3 class="text-center"><a href="#">Robotics</a></h3>
              </div>
            </div>

            <div class="col-md-3 course ftco-animate">
              <div class="img" style="background-image: url(images/course-8.jpg);"></div>
              <div class="text pt-4">
               
                <h3 class="text-center"><a href="#">Robotics</a></h3>
              </div>
            </div>

            <div class="col-md-3 course ftco-animate">
              <div class="img" style="background-image: url(images/course-8.jpg);"></div>
              <div class="text pt-4">
               
                <h3 class="text-center"><a href="#">Robotics</a></h3>
              </div>
            </div>

            <div class="col-md-3 course ftco-animate">
              <div class="img" style="background-image: url(images/course-8.jpg);"></div>
              <div class="text pt-4">
               
                <h3 class="text-center"><a href="#">Robotics</a></h3>
              </div>
            </div>

            <div class="col-md-3 course ftco-animate">
              <div class="img" style="background-image: url(images/course-8.jpg);"></div>
              <div class="text pt-4">
               
                <h3 class="text-center"><a href="#">Robotics</a></h3>
              </div>
            </div>

            <div class="col-md-3 course ftco-animate">
              <div class="img" style="background-image: url(images/course-8.jpg);"></div>
              <div class="text pt-4">
               
                <h3 class="text-center"><a href="#">Robotics</a></h3>
              </div>
            </div>

            <div class="col-md-3 course ftco-animate">
              <div class="img" style="background-image: url(images/course-8.jpg);"></div>
              <div class="text pt-4">
               
                <h3 class="text-center"><a href="#">Robotics</a></h3>
              </div>
            </div>

            <div class="col-md-3 course ftco-animate">
              <div class="img" style="background-image: url(images/course-8.jpg);"></div>
              <div class="text pt-4">
               
                <h3 class="text-center"><a href="#">Robotics</a></h3>
              </div>
            </div>

            



            </div>
            <hr>
            <a href="">
                <i class="fas fa-h3    ">playlist 2</i>
            </a>
            <div class="row">
                

                <div class="col-md-3 course ftco-animate">
                    <div class="img" style="background-image: url(images/course-8.jpg);"></div>
                    <div class="text pt-4">
                     
                      <h3 class="text-center"><a href="#">Robotics</a></h3>
                    </div>
                  </div>
      
                  <div class="col-md-3 course ftco-animate">
                    <div class="img" style="background-image: url(images/course-8.jpg);"></div>
                    <div class="text pt-4">
                     
                      <h3 class="text-center"><a href="#">Robotics</a></h3>
                    </div>
                  </div>
                  <div class="col-md-3 course ftco-animate">
                    <div class="img" style="background-image: url(images/course-8.jpg);"></div>
                    <div class="text pt-4">
                     
                      <h3 class="text-center"><a href="#">Robotics</a></h3>
                    </div>
                  </div>
                  <div class="col-md-3 course ftco-animate">
                    <div class="img" style="background-image: url(images/course-8.jpg);"></div>
                    <div class="text pt-4">
                     
                      <h3 class="text-center"><a href="#">Robotics</a></h3>
                    </div>
                  </div>
            </div>
<hr>
<a href="">
    <i class="fas fa-h3    ">playlist 3</i>
</a>
            <div class="row">
                

                <div class="col-md-3 course ftco-animate">
                    <div class="img" style="background-image: url(images/course-8.jpg);"></div>
                    <div class="text pt-4">
                     
                      <h3 class="text-center"><a href="#">Robotics</a></h3>
                    </div>
                  </div>
      
                  <div class="col-md-3 course ftco-animate">
                    <div class="img" style="background-image: url(images/course-8.jpg);"></div>
                    <div class="text pt-4">
                     
                      <h3 class="text-center"><a href="#">Robotics</a></h3>
                    </div>
                  </div>
                  <div class="col-md-3 course ftco-animate">
                    <div class="img" style="background-image: url(images/course-8.jpg);"></div>
                    <div class="text pt-4">
                     
                      <h3 class="text-center"><a href="#">Robotics</a></h3>
                    </div>
                  </div>
                  <div class="col-md-3 course ftco-animate">
                    <div class="img" style="background-image: url(images/course-8.jpg);"></div>
                    <div class="text pt-4">
                     
                      <h3 class="text-center"><a href="#">Robotics</a></h3>
                    </div>
                  </div>
            </div>
<hr>
<a href="">
    <i class="fas fa-h3    ">playlist 4</i>
</a>
            <div class="row">
                

                <div class="col-md-3 course ftco-animate">
                    <div class="img" style="background-image: url(images/course-8.jpg);"></div>
                    <div class="text pt-4">
                     
                      <h3 class="text-center"><a href="#">Robotics</a></h3>
                    </div>
                  </div>
      
                  <div class="col-md-3 course ftco-animate">
                    <div class="img" style="background-image: url(images/course-8.jpg);"></div>
                    <div class="text pt-4">
                     
                      <h3 class="text-center"><a href="#">Robotics</a></h3>
                    </div>
                  </div>
                  <div class="col-md-3 course ftco-animate">
                    <div class="img" style="background-image: url(images/course-8.jpg);"></div>
                    <div class="text pt-4">
                     
                      <h3 class="text-center"><a href="#">Robotics</a></h3>
                    </div>
                  </div>
                  <div class="col-md-3 course ftco-animate">
                    <div class="img" style="background-image: url(images/course-8.jpg);"></div>
                    <div class="text pt-4">
                     
                      <h3 class="text-center"><a href="#">Robotics</a></h3>
                    </div>
                  </div>
            </div>
<hr>
<a href="">
    <i class="fas fa-h3    ">playlist 5</i>
</a>
            <div class="row">
                

                <div class="col-md-3 course ftco-animate">
                    <div class="img" style="background-image: url(images/course-8.jpg);"></div>
                    <div class="text pt-4">
                     
                      <h3 class="text-center"><a href="#">Robotics</a></h3>
                    </div>
                  </div>
      
                  <div class="col-md-3 course ftco-animate">
                    <div class="img" style="background-image: url(images/course-8.jpg);"></div>
                    <div class="text pt-4">
                     
                      <h3 class="text-center"><a href="#">Robotics</a></h3>
                    </div>
                  </div>
                  <div class="col-md-3 course ftco-animate">
                    <div class="img" style="background-image: url(images/course-8.jpg);"></div>
                    <div class="text pt-4">
                     
                      <h3 class="text-center"><a href="#">Robotics</a></h3>
                    </div>
                  </div>
                  <div class="col-md-3 course ftco-animate">
                    <div class="img" style="background-image: url(images/course-8.jpg);"></div>
                    <div class="text pt-4">
                     
                      <h3 class="text-center"><a href="#">Robotics</a></h3>
                    </div>
                  </div>
            </div>
<hr>
<a href="">
    <i class="fas fa-h3    ">playlist 6</i>
</a>
            <div class="row">
                

                <div class="col-md-3 course ftco-animate">
                    <div class="img" style="background-image: url(images/course-8.jpg);"></div>
                    <div class="text pt-4">
                     
                      <h3 class="text-center"><a href="#">Robotics</a></h3>
                    </div>
                  </div>
      
                  <div class="col-md-3 course ftco-animate">
                    <div class="img" style="background-image: url(images/course-8.jpg);"></div>
                    <div class="text pt-4">
                     
                      <h3 class="text-center"><a href="#">Robotics</a></h3>
                    </div>
                  </div>
                  <div class="col-md-3 course ftco-animate">
                    <div class="img" style="background-image: url(images/course-8.jpg);"></div>
                    <div class="text pt-4">
                     
                      <h3 class="text-center"><a href="#">Robotics</a></h3>
                    </div>
                  </div>
                  <div class="col-md-3 course ftco-animate">
                    <div class="img" style="background-image: url(images/course-8.jpg);"></div>
                    <div class="text pt-4">
                     
                      <h3 class="text-center"><a href="#">Robotics</a></h3>
                    </div>
                  </div>
            </div>
<hr>
<a href="">
    <i class="fas fa-h3    ">playlist 7</i>
</a>
            <div class="row">
                

                <div class="col-md-3 course ftco-animate">
                    <div class="img" style="background-image: url(images/course-8.jpg);"></div>
                    <div class="text pt-4">
                     
                      <h3 class="text-center"><a href="#">Robotics</a></h3>
                    </div>
                  </div>
      
                  <div class="col-md-3 course ftco-animate">
                    <div class="img" style="background-image: url(images/course-8.jpg);"></div>
                    <div class="text pt-4">
                     
                      <h3 class="text-center"><a href="#">Robotics</a></h3>
                    </div>
                  </div>
                  <div class="col-md-3 course ftco-animate">
                    <div class="img" style="background-image: url(images/course-8.jpg);"></div>
                    <div class="text pt-4">
                     
                      <h3 class="text-center"><a href="#">Robotics</a></h3>
                    </div>
                  </div>
                  <div class="col-md-3 course ftco-animate">
                    <div class="img" style="background-image: url(images/course-8.jpg);"></div>
                    <div class="text pt-4">
                     
                      <h3 class="text-center"><a href="#">Robotics</a></h3>
                    </div>
                  </div>
            </div>

          </div>

        </div>
  <div class="container text-right">
      <button type="button" class="tag-cloud-link lg">CREATE PLAYLIST</button>
  </div>
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