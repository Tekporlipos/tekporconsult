<!DOCTYPE html>
<html lang="en">
  <head>
    <title>  TekporAca - Admin_page</title>
    <meta property="og:image" content="https://tekporacademy.tk/images/bg_1.jpg" />
    @include('include/head')
  </head>
  <body ondblclick="scrolling()">
    @include('include.header')

   <div >
   
    <!-- END nav -->
    <section class="hero-wrap hero-wrap-2" style="background-image: url('../images/bg_1.jpg');">
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
      <?php 
      use App\admin;
      $admins = admin::where('name',$id)->get();
      ?>
      @foreach ($admins as $item)
        
      <section class="container">
        
     
        <div class="content">
           
          <br>
          
            <div class="row">
  
              <div class="col-md-2">
              <img src="../{{$item->profile}}" id="imadim" class="thumbnail" style="border-radius: 50%" width="70px" height="70px" alt="Admin" srcset="the admin own the image">
              </div>
              <div class="col-md-6">
              
  <h1 class="small"><b> {{ $item->name }}</b></h1>
  <h6 class="small">{{ $item->subscription }} Subscribers</h6>
                              </div>
              <div class="col-md-4">
  <button class="btn btn-lg btn-danger"><a class="text-white" href="#"> Subscribe</a></button>
              </div>
            </div>
           
            
          </div> 
          <br>
      
          <div class="row text-center" >
            <div class="col-md-3">
    <i class="" aria-hidden="true"> <a href="../accountsuser/{{ $item->name }}">HOME</a> </i>
            </div>
           
          
            <div class="col-md-3">
                <i class="" aria-hidden="true"><a href="../accounts_channelsuser/{{ $item->name }}">CHANNEL</a></i>
            </div>
            <div class="col-md-3">
                <i class="" aria-hidden="true"><a href="../accounts_discustionuser/{{ $item->name }}">DISCUSSION</a></i>
            </div>
            <div class="col-md-3">
                <b class=" active" aria-hidden="true"><a href="../admin/{{ $item->name }}">ABOUT</a><b>
            </div>
        </div>
    </section>
    @endforeach


   <div class="jumbotron">
        <h1 class="display-3">ABOUT</h1>
  <hr class="my-2">

        <div class="container-fluid">

            <section class="ftco-section">
              <div class="container-fluid px-4">
                <div class="row">
                  <div class="col-md-6">
                    <h1 class="fas fa-h3  text-center  "> <u> Bio</u></h1>
                    <div class="container">
                      <p>
                        {{ $item->info }}
                      </p>
                      
                      </div> 
                  </div>        
                  <div class="col-md-6">
                    <h2 class="fas fa-h3  text-center  "><u> Scocial Status </u></h2>
                    <i class="fas fa-h2    "> <a href="http://{{ $item->facebook }}" target="blank">{{ $item->facebook }} </a> FACEBOOK ACCOUNT</i><br/>
                    <i class="fas fa-h2    "> <a href="http://{{ $item->twitter }}" target="blank">{{ $item->twitter }} </a>TWITTER ACCOUNT </i><br/>
                    <i class="fas fa-h2    "> <a href="http://{{ $item->website }}" target="blank">{{ $item->website }} </a>WEBSITE </i><br/>
                    <i class="fas fa-h2    "> <a href="http://{{ $item->youtube }}" target="blank">{{ $item->youtube }} </a>YOUTUBE ACCOUNT </i><br/>
                  </div>  
                   
                  </div>
      
                  <div class="container">
                    <h2 class=""><u> About {{ $item->name }} </u></h2>
                    <i class="fas fa-h2    ">EMAIL: <a href="mailto:{{ $item->email }}">{{ $item->email }}</a> </i><br/>
                    <i class="fas fa-h2    ">FIELD: {{ $item->field }}</i><br/>
                    <i class="fas fa-h2    ">INSTITUTION: {{ $item->school }}</i><br/>
                    <i class="fas fa-h2    ">ACCOUNT TYPE: {{ $item->type }}</i>
                  </div>
                </div>
              </div>
      
        <p class="lead">
            
        </p>
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