<!DOCTYPE html>
<html lang="en">
  <head>
    <title>TekporAcademy - Account_page</title>
    <meta property="og:image" content="https://tekporacademy.tk/images/bg_1.jpg" />
    @include('include/head')
  </head>
  <body ondblclick="scrolling()">
    @include('include.header')

   <div >
   
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
              <img src="../{{$item->profile}}" id="imadim" class="thumbnail" style="border-radius: 50%" width="70px" alt="Admin" srcset="the admin own the image">
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
    <b class="" aria-hidden="true"> <a href="../accountsuser/{{ $item->name }}">HOME</a> </b>
            </div>
           
          
            <div class="col-md-3">
                <i class="" aria-hidden="true"><a href="../accounts_channelsuser/{{ $item->name }}">CHANNEL</a></i>
            </div>
            <div class="col-md-3">
                <i class="" aria-hidden="true"><a href="../accounts_discustionuser/{{ $item->name }}">DISCUSTION</a></i>
            </div>
            <div class="col-md-3">
                <i class=" active" aria-hidden="true"><a href="../admin/{{ $item->name }}">ABOUT</a></i>
            </div>
        </div>
    </section>

    @endforeach


        
<div class="jumbotron">
  <h1 class="display-3">BLOG</h1>
  <hr class="my-2">
 
  <p class="lead">
  


    <?php 
    $admins = admin::where('id',$id)->get();
    ?>

    @foreach ($admins as $item)
        
    <section class="container">
      
   
      <div class="content">
         
      <br>
      
        <div class="row">

          <div class="col-md-2">
          <img src="../{{$item->profile}}" id="imadim" class="thumbnail" style="border-radius: 50%" width="70px" alt="Admin" srcset="the admin own the image">
          </div>
          <div class="col-md-6">
          
<h1 class="small"><b> {{ $item->name }}</b></h1>
<h6 class="small">{{$item->subscription}} Subscribers</h6>
                          </div>
          <div class="col-md-4">
<button class="btn btn-lg btn-danger"><a class="text-white" href="#"> Subscribe</a></button>
          </div>
        </div>
       
        
      </div> 
      <br>
      <div class="row">
        <div class="col-md-2">
<b class=" active" aria-hidden="true"> <a href="">HOME</a> </b>
       
        <div class="col-md-2">
            <i class="" aria-hidden="true"><a href="../../accounts_playlistuser/{{ $item->id }}">PLAYLIST</a></i>
        </div>
        <div class="col-md-2">
            <i class="" aria-hidden="true"><a href="../../accounts_channelsuser/{{ $item->id }}">CHANNEL</a></i>
        </div>
        <div class="col-md-2">
            <i class="" aria-hidden="true"><a href="../../accounts_discustionuser/{{ $item->id }}">DISCUSTION</a></i>
        </div>
        <div class="col-md-2">
            <i class="" aria-hidden="true"><a href="../admin/{{ $item->id }}">ABOUT</a></i>
        </div>
    </div>
      </div>
  </section>

    @endforeach
   
    <?php 
    use App\quizing;
    $quizing = quizing::where('admin',$id)->get();
    ?>
      
    
    <div class="container-fluid">

      <section class="ftco-section">
        <div class="container-fluid px-4">
          <div class="row">        
            @foreach ($quizing as $quiz)
 
            <div class="col-md-3 course ftco-animate">
              <div class="img" style="background-image: url(../{{$quiz->logo}});"></div>
              <div class="text pt-4">
               
              <h5 class="text-center"  title="{{$quiz->title}}"><a href="../Quizname/{{$quiz->title}}" style="color:black;overflow-x:hidden"><?php echo str_replace("_", " ", $quiz->title)?></a></h5>
              </div>
            </div>

           
            @endforeach

            </div>
          </div>
        </section>
     
    </div>

  </p>
</div>
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