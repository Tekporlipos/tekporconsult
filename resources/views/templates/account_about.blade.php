<!DOCTYPE html>
<html lang="en">
  <head>
    <title>  TekporAcademy - Admin_page</title>
    @include('include/head')
    <meta property="og:image" content="https://tekporacademy.tk/images/bg_1.jpg" />
  </head>
  <body onscroll="scrolling()">
    @include('include.header')

   <div >
    
    <!-- END nav -->
    <section class="hero-wrap hero-wrap-2" id="showw" style="background-image: url('../images/bg_1.jpg');">
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
      $id = Auth::user()->id;
      $admins = admin::where('user_id',$id)->get();
      ?>
      @foreach ($admins as $item)
        
      <section class="container">
        
     
        <div class="content">
           
          <br>
          
            <div class="row">
  
              <div class="col-md-2">
                <?php
                $erro = "";
                $erro = @$_REQUEST['erro'];
                echo ("<i class='text-danger'>$erro</i>");
                if (empty($item->profile)) {
                  ?>
                   <img src="/images/person_2.jpg
                   " id="imadim" class="thumbnail" style="border-radius: 50%" width="70px" alt="Admin" srcset="the admin own the image"><br/>
                
                  <?php
                }else{
                  ?>
                  <div id="imagenowimagenowshow" onclick="changemode('somethin','profileUpload')">
                    <div style="position: absolute; top:25%;left:30%;color:red">
<i class="ion-md-camera" style="font-size: 25px; cursor:pointer"></i>
                    </div>
                    <div id="imagenow">
                 <img src="../{{$item->profile}}" id="imadim" class="thumbnail" style="border-radius: 50%;transform-origin:top;" title="change profile" height="100px"  width="100px" alt="Admin" srcset="the admin own the image"><br/>
                    </div>
                   
                  </div>
                   
<div id="somethin" class="text-danger">  <span id="message"></span></div>
<div class="form-group" id="profileUpload" style="display: none" >
  <form  id="upload_form" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}

<div class="row ">
<div class="col-9"> <input type="file" class="form-control" name="select_file" id="select_file"/> </div>
<input type="hidden" value="{{Auth::user()->id}}" id="imageid" name="imageid">
<div class="col-3" style="text-align: left"><input type="submit" onsubmit="imgg()" onclick="changemode('profileUpload','somethin')" name="upload" id="upload" class="btn-primary  btn btn-sm" value="Upload"></div>
</div>

    

</form>
</div>
              
                  <?php
                }
                                ?>
              </div>
              <div class="col-md-6">
              
  <h1 class="big"><b> {{ Auth::user()->name }}</b></h1>
  <h6 class="small">{{ $item->subscription }} Subscribers</h6>
                              </div>
              
            </div>
            
          </div> 
          <br>
      
          
    </section>
    @endforeach

<section class="container text-center">
<nav class="navbar navbar-expand-lg bg-light ftco-navbar-light" id="ftco-navbar2">
      <div class="container d-flex align-items-center bg-light px-4">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav2" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span style="color: blue" class="oi oi-menu"></span> Menu
        </button>
        <div class="collapse navbar-collapse" id="ftco-nav2">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item"><a href="../accounts" class="nav-link pl-0" style="color: blue">HOME</a></li>
        <li class="nav-item"><a href="../accounts_subscription" class="nav-link" style="color: blue">SUBSCRIPTION</a></li>
            <li class="nav-item"><a href="../accounts_repository" class="nav-link" style="color: blue">REPOSITORY</a></li>
            <li class="nav-item"><a href="../accounts_channels" class="nav-link" style="color: blue">CHANNEL</a></li>
            <li class="nav-item"><a href="../accounts_discustion" class="nav-link" style="color: blue">DISCUSSION</a></li>
            <li class="nav-item active"><a href="../accounts_about" class="nav-link" style="color: blue"><u>ABOUT</u></a></li>
          </ul>
        </div>
      </div>
    </nav>
   
    @include('include/astatistics')
    </section>
<div class="container-fluid">
  <div class="jumbotron">
    <h1 class="display-3">ABOUT</h1>
    <hr class="my-2">
  <?php
 use App\Notification;
              use App\ViewedNotification;
              use App\ViewedReplyNotification;
              use App\viewFollowNotification;
              use App\followNotification;
              use App\replyNotification;
              use App\forum;
        use App\follow;
        use App\User;
        use Carbon\Carbon;
        use App\forumAnswer;
        use App\like;
        use App\viewedPost;
if (!empty($item)) {
?>


<p class="lead">
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
            <h2 class=""><u> About </u></h2>
            <i class="fas fa-h2    ">BLOG EMAIL: {{ $item->email }} </i><br/>
            <i class="fas fa-h2    ">FIELD: {{ $item->field }}</i><br/>
            <i class="fas fa-h2    ">ACCOUNT TYPE: {{ $item->type }}</i><br/>
            <i class="fas fa-h2    ">SCHOOL: {{ Auth::user()->School }}</i><br/>
            <i class="fas fa-h2    ">COURSE: {{ Auth::user()->Course }}</i><br/>
            <i class="fas fa-h2    ">EMAIL: {{ Auth::user()->email }}</i>
            
          </div>
        </div>
      </div>

</p>

<?php
}else {
  ?>
<i class="fas fa-h2    ">SCHOOL: {{ Auth::user()->School }}</i><br/>
<i class="fas fa-h2    ">COURSE: {{ Auth::user()->Course }}</i><br/>
<i class="fas fa-h2    ">EMAIL: {{ Auth::user()->email }}</i>
  <?php
}
?>
  
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

 function changemode(div,div1) {
           var viewer = document.getElementById(div);
           viewer.style.display = 'none';
           var viewer1 = document.getElementById(div1);
           viewer1.style.display = 'block';
         };
      </script>
      <script>
        $(document).ready(function(){
        
        $('#upload_form').on('submit', function(event){
         event.preventDefault();
         $.ajax({
          url:"{{ route('ajaxupload.action') }}",
          method:"POST",
          data:new FormData(this),
          dataType:'JSON',
          contentType: false,
          cache: false,
          processData: false,
          success:function(data)
          {
           $('#message').css('display', 'block');
           $('#message').html(data.message);
           $('#message').addClass(data.class_name);
           $('#select_file').val("");
           imgg();
          }
         })
        });
        });
        
        function imgg(){
        if (window.XMLHttpRequest) {
        var coun = new XMLHttpRequest;
        }else{
        var coun = new ActiveXObject('Microsoft XMLHTTP');
        }
        coun.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
        document.getElementById('imagenow').innerHTML = this.responseText;
        }
        }
        var imafid =  document.getElementById('imageid');
        var requst = `imafid=${imafid.value}`;
        var urled = "{{ URL::to('searchimage?')}}"+requst;
        coun.open('Get',urled );
        coun.setRequestHeader('content-type','application/x-www-form-urlencoded');
        coun.send(); 
        };
        
    
</script>        
  </body>
</html>