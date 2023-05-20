<!DOCTYPE html>
<html lang="en">
  <head>
    <title>TekporAcademy - Games_Typing Class</title>
    <meta property="og:image" content="https://tekporacademy.tk/typingimg/tekporacatyping_class.png" />
 @include('include/head')
  </head>
  <body ondblclick="scrolling()">
    @include('include.header')
 
    <section class="hero-wrap hero-wrap-2" style="background-image: url('/typingimg/pngwing.com.png');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">Games</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="home">Home <i class="ion-ios-arrow-forward"></i></a> <a href="Games">Games <i class="ion-ios-arrow-forward"></i></a></span> <span><b><a href="/typingClass">Typing Class</a> </b> <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>

    <div class="embed-responsive embed-responsive-16by9">
      <video class="embed-responsive-item" id="videoIntro" src="/Library/VID-20200614-WA0001.m4v" controls aria-controls="true" autoplay></video>
      </div>
    

		@include('include/footer')    @include('include/down')
  </body>
  <script>
    function playnowway() {
      var videoint = document.getElementById('videoIntro');
      videoint.play();
    };
    playnowway();
  </script>
</html>