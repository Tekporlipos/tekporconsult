<!DOCTYPE html>
<html lang="en">
  <head>
    <title>TekporAcademy - Courses_page</title>
 @include('include/head')
 <meta property="og:image" content="https://tekporacademy.tk/images/bg_1.jpg" />
  </head>
  <body ondblclick="scrolling()">
    @include('include.header')

   <div >
   
    <!-- END nav -->
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
            <li class="nav-item"><a href="../accounts_channels" class="nav-link" style="color: blue"><u>CHANNEL</u></a></li>
            <li class="nav-item"><a href="../accounts_discustion" class="nav-link" style="color: blue">DISCUSSION</a></li>
            <li class="nav-item active"><a href="../accounts_about" class="nav-link" style="color: blue">ABOUT</a></li>
          </ul>
        </div>
      </div>
    </nav>
    
    @include('include/astatistics')
    </section>
    <div class="container-fluid">
      <div class="jumbotron">
        <h1 class="display-3">CHANNELS</h1>
        <hr class="my-2">
      <?php
  
  if (!empty($item)) {
  ?>
   
   
    <p class="lead">
      <div class="row">
    
        <div class="col-md-3">
        <img src="../{{$item->profile}}" id="imadim" class="thumbnail" style="border-radius: 50%" width="70px" height="70px" alt="Admin" srcset="the admin own the image">
        <h1 class="small"><b> {{ $item->name }}</b></h1>
  <h6 class="small">{{ $item->subscription }} Subscribers</h6>
        </div>
      </div>
    </p>
    <div class="container text-right">
      <a type="button"  href="/courseUpload/{{$item->name}}" class="tag-cloud-link lg">  CREATE NEW TUTORIAL</a>
  </div>
  
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
</html>