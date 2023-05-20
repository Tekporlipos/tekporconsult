<!DOCTYPE html>
<html lang="en">
  <head>
    <title>TekporAcademy - Courses_page</title>
    <meta property="og:image" content="https://tekporacademy.tk/images/bg_1.jpg" />
    <style>
      details summary::-webkit-details-marker{
        display: none;
      }
    </style>
	 @include('include/head')
  </head>
  <body ondblclick="scrolling()" contenteditable="false">
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
    @endforeach <section class="container text-center">
<nav class="navbar navbar-expand-lg bg-light ftco-navbar-light" id="ftco-navbar2">
      <div class="container d-flex align-items-center bg-light px-4">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav2" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span style="color: black" class="oi oi-menu"></span><span style="color: black"> Menu </span>
        </button>
        <div class="collapse navbar-collapse" id="ftco-nav2">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item"><a href="../accounts" class="nav-link pl-0" style="color: blue">HOME</a></li>
        <li class="nav-item"><a href="../accounts_subscription" class="nav-link" style="color: blue">SUBSCRIPTION</a></li>
            <li class="nav-item"><a href="../accounts_repository" class="nav-link" style="color: blue">REPOSITORY</a></li>
            <li class="nav-item"><a href="../accounts_channels" class="nav-link" style="color: blue">CHANNEL</a></li>
            <li class="nav-item"><a href="../accounts_discustion" class="nav-link" style="color: blue"><u>DISCUSSION</u></a></li>
            <li class="nav-item active"><a href="../accounts_about" class="nav-link" style="color: blue">ABOUT</a></li>
          </ul>
        </div>
      </div>
    </nav>

    @include('include/astatistics')
    </section>

    <div class="container-fluid">
      <div class="jumbotron" style="overflow-x: scroll;">
        <div class="row">
          <div class="col-md-6" style="overflow-x:scroll">
              <h4 class="display-4">NOTIFICATIONS</h4>
        <hr class="my-2">
       
        <p class="lead" style="font-size:15px">
         
          
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
      if (isset(Auth::user()->id)) {
        
      
        ?>
                <span id="checkNoti" >
                  <?php
      
      if (isset(Auth::user()->id)) {
        $id = Auth::user()->id;
        $user_name = Auth::user()->name;
        $course = Auth::user()->Course;
      };
       $Notif =  Notification::where('Category','LIKE', "%$course%")->where('admin','!=', $id)->orderBy('id','desc')->get();
       $repNoti =  replyNotification::where('repleyed',$user_name)->where('user_id','!=', $id)->orderBy('id','desc')->get();
       $followNotification =  followNotification::where('user_id',$id)->orderBy('id','desc')->get();
                  ?>
                  @foreach($Notif as $item)
      <?php $not_id =  $item->id;
       $ViewedNotif =  ViewedNotification::where('user_id',$id)->where('notifi_id',$not_id)->get();
      if (sizeOf($ViewedNotif) > 0 ) {
        ?>
         <details>
          <summary class="dropdown-toggle" style="list-style-type: none; color: black">{{$item->notification}} @ {{Carbon::now('UTC')->createFromTimeStamp(strtotime($item->created_at))->diffForHumans()}}
          </summary >
          <a  class="nav-link  ftco-animate" title="{{$item->link}}"  href="/{{$item->link}}?token=2032jkfnmuihjkdWD3e312da&notification=seen&count={{$item->id}}" role="button" >{{$item->link}}</a>
        </details>
       
         <?php 
      }else{
        ?>
             <details>
              <summary class="dropdown-toggle" style="list-style-type: none; color: rgb(0, 8, 122)">{{$item->notification}} @ {{Carbon::now('UTC')->createFromTimeStamp(strtotime($item->created_at))->diffForHumans()}}
              </summary >
              <a  class="nav-link  ftco-animate" title="{{$item->link}}" href="/{{$item->link}}?token=2032jkfnmuihjkdWD3e312da&notification=seen&count={{$item->id}}" role="button" >{{$item->link}}</a>
            </details>

       
         <?php           
      }?>
                  @endforeach 
                       <!--follow-->
        @foreach($followNotification as $item)
      <?php $not_id =  $item->id;
       $viewFollowNotification =  viewFollowNotification::where('user_id',$id)->where('notifi_id',$not_id)->get();
      if (sizeOf($viewFollowNotification) > 0 ) {
        ?>
        <details>
          <summary class="dropdown-toggle" style="list-style-type: none; color:black">{{$item->message}} @ {{Carbon::now('UTC')->createFromTimeStamp(strtotime($item->created_at))->diffForHumans()}}
          </summary >
          <a  class="nav-link ftco-animate" title="{{$item->link}}" href="/{{$item->link}}?token=oirksdolike09p4i0i9oiklrio4wja3fkoiw&notification=seen&count={{$item->id}}?" role="button" >{{$item->link}}</a>
        </details>

      
        <?php
      }else{
        ?>
         <details>
          <summary class="dropdown-toggle" style="list-style-type: none; color:rgb(0, 8, 122)">{{$item->message}} @ {{Carbon::now('UTC')->createFromTimeStamp(strtotime($item->created_at))->diffForHumans()}}
          </summary >
          <a  class="nav-link  ftco-animate" title="{{$item->link}}" href="/{{$item->link}}?token=oirksdolike09p4i0i9oiklrio4wja3fkoiw&notification=seen&count={{$item->id}}?" role="button" >{{$item->link}}</a>
        </details>
        
         <?php           
      }?>
                  @endforeach
                  <!--follow--> 
                </span>
        <?php
      }
      
      
      ?>
      
        </p>
          </div>
            <div class="col-md-6" style="overflow-x:scroll">
              <h4 class="display-4">DISCUSSION</h4>
        <hr class="my-2">
       
        <p class="lead" style="font-size:15px">
       @foreach($repNoti as $item1)
       <?php $not_id =  $item1->id;
        $ViRepNoti =ViewedReplyNotification::where('user_id',$id)->where('repleyed_id',$not_id)->get();
      if (sizeOf($ViRepNoti) > 0 ) {
        ?>
         <details>
          <summary class="dropdown-toggle" style="list-style-type: none; color:black">{{$item->notification}} @ {{Carbon::now('UTC')->createFromTimeStamp(strtotime($item->created_at))->diffForHumans()}}
          </summary >
          <a  class="nav-link ftco-animate" title="{{$item1->link}}" href="/{{$item1->link}}?token=iujudhskghwtwioepuyblsjhqyendj89e8mksckj&notification=seen&count={{$item1->id}}" role="button" >{{$item1->link}}?
           </a>
        </details>
        
       
         <?php 
      }else{
        ?>
        <details>
          <summary class="dropdown-toggle" style="list-style-type: none; color:rgb(0, 8, 122)">{{$item1->repleyed}}, {{$item1->message}} @ {{Carbon::now('UTC')->createFromTimeStamp(strtotime($item1->created_at))->diffForHumans()}}
          </summary >
          <a  class="nav-link  ftco-animate" title="{{$item1->link}}" href="/{{$item1->link}}?token=iujudhskghwtwioepuyblsjhqyendj89e8mksckj&notification=seen&count={{$item1->id}}" role="button" >{{$item1->link}}?</a>
        </details>

      
         <?php           
      }
      ?>
        @endforeach          
        </p>
          </div>
        
      </div>
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