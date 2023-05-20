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
      use App\Adviser;
      use App\ChatRoom;
     
     // 
      $id = Auth::user()->id;
      $admins = admin::where('user_id',$id)->get();
     // 
      ?>
      @foreach ($admins as $item)
        
      <section class="container">
        
     
        <div class="content">
           
          <br>
          
            <div class="row">
  
              <div class="col-md-2">
                <?php
                $adminType = $item->type;
                $admin_id = $item->id;
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
              
  <h1 class="big"><b> {{$advicername =  Auth::user()->name }}</b></h1>
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
        <li class="nav-item"><a href="../accounts_subscription" class="nav-link" style="color: blue"><u>SUBSCRIPTION</u></a></li>
            <li class="nav-item"><a href="../accounts_repository" class="nav-link" style="color: blue">REPOSITORY</a></li>
            <li class="nav-item"><a href="../accounts_channels" class="nav-link" style="color: blue">CHANNEL</a></li>
            <li class="nav-item"><a href="../accounts_discustion" class="nav-link" style="color: blue">DISCUSSION</a></li>
            <li class="nav-item active"><a href="../accounts_about" class="nav-link" style="color: blue">ABOUT</a></li>
          </ul>
        </div>
      </div>
    </nav>
   @include('include/astatistics')
    </section>
<?php 
 $adviser=[];
if ($adminType == 'Conciliator'||$adminType == 'adviser' ) {
  $adviser = Adviser::take(15)->orderBy('id','desc')->get();
}
?>


    
<div class="container-fluid">
  <div class="jumbotron text-center" style="background-color: rgb(207, 134, 101)">
    <h1 class="display-3">Request</h1>
   <i id="responeing" class="success"></i>
    @foreach ($adviser as $item)
    
<?php 
$ChatRoom = ChatRoom::where('token',md5($item->created_at))->get();

if (sizeOf($ChatRoom) > 0) {
  $ChatRoomadin = ChatRoom::where('token',md5($item->created_at))->where('adminid',$admin_id)->get();
  if (sizeOf($ChatRoomadin) <= 0) {
    continue;
  }
}
?>


    
    <hr class="my-2">
<div class="row table" style="font-size: 12px">
  <div class="col-2" style="overflow-y: scroll">
    <a href="careerGuidance?token={{md5($item->created_at)}}&to={{$item->LName}}">{{$item->LName}} {{$item->FName}}</a>

  </div>
  <div class="col-2" style="overflow-y: scroll">
    {{$item->category}}
  </div>
  <div class="col-2" style="overflow-y: scroll">
    {{$item->phone}}
  </div>
  <div class="col-3" style="overflow-y: scroll">
    {{$item->message}}
  </div>
  <div class="col-2" style="overflow-y: scroll">
    <?php
$user = User::where('id',$item->Use_id)->take(1)->get();
    ?>
    @foreach ($user as $users)
    {{$useremail = $users->email}}
    
    @endforeach
  </div>
  <div class="col-1" onclick="sendingMail('responeing','{{$useremail}}','{{$item->LName}}','{{$item->created_at}}','{{$item->id}}','{{$advicername}}','{{$admin_id}}')" style="overflow-y: scroll;cursor: pointer">
 <?php 
  $ChatRoom = ChatRoom::where('token',md5($item->created_at))->where('user_seen',null)->get();
 ?>
  
    @if (sizeOf($ChatRoom) > 0 )
    <i class="ion-md-mail text-danger" title="You have {{sizeOf($ChatRoom)}} unread messages"></i>
    @else
    <i class="ion-md-mail"></i>
    @endif

  </div>
</div>
@endforeach
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
        
 function sendingMail(div,div1,div2,div4,div5,div6,div3){
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
 
 var requst = `email=${div1}&advicername=${div6}&time=${div4}&chatid=${div5}&name=${div2}&admin_id=${div3}`;
 var urled = "{{ URL::to('adviser?')}}"+requst;
 coun.open('Get',urled );
 coun.setRequestHeader('content-type','application/x-www-form-urlencoded');
 coun.send(); 
 message.value = "";
   
 };
    
</script>   
        </body>
</html>