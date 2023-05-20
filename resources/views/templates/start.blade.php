<!DOCTYPE html>
<html lang="en">
  <head>
    <title>TekporAcademy - Course-Name_page</title>
    <meta property="og:image" content="https://tekporacademy.tk/images/store_back.jpg" />
 @include('include/head')
  </head>
    <style>
    
    .working {
  -webkit-animation: 2s linear infinite condemned_blink_effect; // for Safari 4.0 - 8.0
  animation: 2s linear infinite condemned_blink_effect;
}
@-webkit-keyframes condemned_blink_effect { // for Safari 4.0 - 8.0
  0% {
    color: red;
  }
  50% {
    color: white;
  }
  100% {
    color: red;
  }
}
@keyframes condemned_blink_effect {
    0% {
    color: red;
  }
  50% {
    color: white;
  }
  100% {
    color: red;
  }
}
#myVideo {
  width: 100%;
  align-content: center;

}

.myVideo {
  width: 100%;
  align-content: center;

}
/* Add som content at the bottom of the video/page */
.content {
  position: relative;
  bottom: 0;
  background: rgba(0, 0, 0, 0.5);
  color: #f1f1f1;
  width: 100%;
  padding: 20px;
}

/* Style the button used to pause/play the video */
#myBtn {
  width: 200px;
  font-size: 18px;
  padding: 10px;
  border: none;
  background: #000;
  color: #fff;
  cursor: pointer;
}

#myBtn:hover {
  background: #ddd;
  color: black;
} 
    #imadim {
      border-radius: 50%;
    }
    </style>
  </head>
  <body ondblclick="scrolling()">
    @include('include.header')
	   <nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container d-flex align-items-center px-4">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>
	      <form action="#" class="searchform order-lg-last">
          <div class="form-group d-flex">
            <input type="text" class="form-control pl-3" placeholder="Search">
            <button type="submit" placeholder="" class="form-control search"><span class="ion-ios-search"></span></button>
          </div>
        </form>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav mr-auto">
	        	<li class="nav-item"><a href="../home" class="nav-link pl-0">Home</a></li>
	        	<li class="nav-item"><a href="../store" class="nav-link">Store</a></li>
	        	<li class="nav-item"><a href="../courseCategory" class="nav-link">Category</a></li>
	        	<li class="nav-item"><a href="../forum" class="nav-link">Forum</a></li>
	        	<li class="nav-item"><a href="../blog" class="nav-link">Blog</a></li>
	          <li class="nav-item"><a href="../Games" class="nav-link">Games/Quizzes</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
    
    <section class="hero-wrap hero-wrap-2" style="background-image: url('/images/uni.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h3 class="mb-2 bread">Course/Name</h3>
             <p class="breadcrumbs"><span class="mr-2"><a href="home">Home <i class="ion-ios-arrow-forward"></i></a></span> <span class="mr-2"><a href="category">Category <i class="ion-ios-arrow-forward"></i></a></span> <span><a href="courses">courses <i class="ion-ios-arrow-forward"></i></a></span>  <span><a href="name">name <i class="ion-ios-arrow-forward"></i></a></span> <span ><a href="name">Learning <i class="working" style="font-size:100px">.</i></a></span></p>
          </div>
        </div>
      </div>
    </section>
<br>
<br>
<br>
  

	<section>
  <?php 
    use App\coures;
    use App\admin;
    use App\playlist;
    use App\categoryComent;
    use App\User;
    use App\categoryreply;
    use Carbon\Carbon;
    $coures =  coures::where('title',$id)->take(1)->get();
?>
    <div class="container">
      <div class="row">

  @foreach ($coures as $item)
  <div class='col-md-8 bg-light'>
  <input type="hidden" name="type" id="type" width='100%' value="{{$item->id}}">
<div id="videoshow">
            <video id="myVideo" class="thumbnail" buffered="yes" controls>
                    <source src="{{$item->link}}" id="link" class="embed-responsive-item" type="video/mp4">
            </video>
</div>

<div class="content">
<h5 >NOW PLAYING: <U class="text-primary" id="title" style="text-transform: capitalize;"> {{$item->title}} </U></h5>
<?php
        $admin =  admin::where('name',$item->admin)->take(1)->get();
        ?>

<div class="row">
                    <div class="col-md-2">
        <img src='/@foreach($admin as $value){{$value->profile}}@endforeach' class="img img-circle" width="80%" alt="{{$value->name}}">
                    </div>
                     <div class="col-md-6">
                                        <h6><b id="play_list">@foreach($admin as $value)
                        {{$item->title}}
                        @endforeach </b></h6>
                        <h6 class="small"><b>@foreach($admin as $value)
                        {{$value->name}}
                        @endforeach</b></h6>
                        <h6 class="small">
                        @foreach($admin as $value)

                        <?php if(empty($value->subscription)){
                        echo 0;
                        }else {
                        echo $value->subscription;
                        }
                        ?>
                        @endforeach   Subscribers</h6>
                 </div>
                <div class="col-md-4">
        <button class="btn btn-lg btn-danger"><a class="text-white" href="#"> Subscribe</a></button>
                </div>
                <p>
                    <h4>Description:</h4>
                    {{$item->description}}}</p>
                </diV>
                    </div>
                    <hr>
        <?php
            $comment = categoryComent::where('blogType',$item->id)->orderBy('user_id','desc')->get();
        ?>
    
                <div class="mb-5 h4 font-weight-bold">{{ sizeOf($comment)}} Comments</div>
 <div class="pt-5 mt-5" style="padding:0px; margin:0px">
<div class="comment-form-wrap pt-5 ftco-animate">
                                <h3 class="mb-5 h4 font-weight-bold">Leave a comment</h3>
                                <div  class="p-5 "> 
                                    <div class="form-group">
                                        <label for="message">Message</label>
                                    
                                        <textarea name="comment" id="message" cols="30" rows="2" placeholder="Leave Your Comment Here(Note: only one comment)" class="form-control"></textarea>
                                        
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" onclick="comment('comment')" value="Submit Comment" class="btn py-3 px-4 btn-primary" required>
                                    </div>
                                </div>
                                <ul class="comment-list"  >
    <li class="comment" id="comment">
    </li>
    @foreach ($comment as $key=>$item)
    <li class="comment">
         <div class="vcard bio">
            <img src="/images/teacher-1.jpg" alt="Image comment">
            </div>
                     <div class="comment-body">
                                    <?php
                                    $user = User::where('id',$item->user_id)->take(1)->get();
                                    ?>
                                                @foreach ($user as $use)
                                                <h3>{{$use->name}}</h3>
                                                @endforeach
                                                
                                    <div class="meta mb-2">{{Carbon::now('UTC')->createFromTimeStamp(strtotime($item->created_at))->diffForHumans()}}</div>
                                    <p>{{$item->message}}</p>
                                <p id="replyed{{$key}}"><a onclick="showrep('replyed{{$key}}','replycont{{$key}}')" class="reply" style="cursor: pointer;">Reply</a></p>
                                </div>
                                
                                <ul class="children" style="padding-top:0px;border-top:0px">
                                <div id="replycont{{$key}}" style="display:none">
                                    <div class="form-group" >
                                        <textarea name="reply" id="reply" cols="30" rows="2" placeholder="Reply to comment" class="form-control"></textarea>
                                    <input type="hidden" id="com_id" value="{{$item->id}}">
                                        <div>
                                        <p>
                                        <a onclick="replyxml('replyfeed{{$key}}');onsen('replycont{{$key}}','replyed{{$key}}')" class="btn btn-sm btn-default reply">Reply</a></p>
                                        </div>
                                    </div>
                        </div>
                                    <li class="comment" id="replyfeed{{$key}}">

                                    </li>
                                    <?php
                                $reply = categoryreply::where('com_id',$item->id)->orderBy('id','desc')->get();
                                    ?>
                                            @foreach ($reply as $rep)
                                            <li class="comment">
                                                <div class="vcard bio">
                                                <img src="/images/teacher-3.jpg" alt="Image placeholder">
                                                </div>
                                                <div class="comment-body">
                                                <?php
                                        $uswwd = User::where('id',$rep->user_id)->take(1)->get();
                                            ?>
                                            @foreach ($uswwd as $use)
                                            <h3>{{$use->name}}</h3>
                                            @endforeach
                                                <div class="meta mb-2">{{Carbon::now('UTC')->createFromTimeStamp(strtotime($rep->created_at))->diffForHumans()}}</div>
                                                <p>{{$rep->reply}}</p>
                                                </div>
                                            </li>
                                            @endforeach

                                
                                </ul>
    @endforeach

</ul>

</div>                      
</div>

  </div>
  <div class='col-md-4'>

  <h4>Up Next</h4>
          
          <div class="jumbotron">
              <?php
              $next = playlist::where('course_id',$item->id)->orderBy('id','asc')->get();
              ?>
              @foreach($coures as $itemne)
              <div class="row">
                          <div class="col-md-12">
                              <video class="myVideo thumbnail" onclick="oncli('playlist','link','playlisttitle','title');changeVideo('videoshow','{{$itemne->link}}')" buffered="yes" id="playlisted" muted="yes" onmouseleave="pluse('playlisted')" onmouseover="play('playlisted')" style="cursor: pointer;" >
                                  <source id="playlist" src="{{$itemne->link}}" class="embed-responsive-item" type="video/mp4">
                              </video>
                          </div>
                  </div>
                  <div class="col-md-12">
                          <h6 id="playlisttitle" class="text-center">Introduction Video</h6>
                          <h6 class="small"></h6>
                      </div>
                  <hr>
              @endforeach 

              @foreach($next as $key=> $item1)
              <div class="row">
                          <div class="col-md-6">
                              <video class="myVideo thumbnail" onclick="oncli('playlist{{$key}}','link','playlisttitle{{$key}}','title');changeVideo('videoshow','{{$item1->link}}')" buffered="yes" id="playlisted{{$key}}" muted="yes" onmouseleave="pluse('playlisted{{$key}}')" onmouseover="play('playlisted{{$key}}')" style="cursor: pointer;" >
                                  <source id="playlist{{$key}}" src="{{$item1->link}}" class="embed-responsive-item" type="video/mp4">
                              </video>
                          </div>
                      <div class="col-md-6">
                          <h6 id="playlisttitle{{$key}}">{{$item1->title}}</h6>
                          <h6 class="small"></h6>
                      </div>
                  </div>
                  <hr>
              @endforeach 
          </div>
          
          
              
  </div>
  @endforeach
      </div>
    </section>
    
    <br>
<br>
<br>

     @include('include/footer')

      @include('include/down')

  </body>
       <script>
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

     function scrolling() {
     document.getElementById('onlines').style.display='none';
     };

     function comment(div){
         
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
     var sear = document.getElementById('message');
     var title = document.getElementById('type');
     var requst = `message=${sear.value}&title=${title.value}`;
     var urled = "{{ URL::to('categorycomment?')}}"+requst;
     coun.open('Get',urled );
     coun.setRequestHeader('content-type','application/x-www-form-urlencoded');
     coun.send(); 
     message.value = "";
     };

     function showrep(div1,div2) {
     document.getElementById(div1).style.display='none';
     document.getElementById(div2).style.display='block';
     };

     function replyxml(div){
         
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
         var sear = document.getElementById('reply');
         var comid = document.getElementById('com_id');
         var requst = `reply=${sear.value}&commet_id=${comid.value}`;
         var urled = "{{ URL::to('Categoryreply?')}}"+requst;
         coun.open('Get',urled );
         coun.setRequestHeader('content-type','application/x-www-form-urlencoded');
         coun.send(); 
         sear.value = "";
         };
         function onsen(div,div1) {
           var viewer = document.getElementById(div);
           viewer.style.display = 'none';
           var viewer1 = document.getElementById(div1);
           viewer1.style.display = 'block';
         };
         function play(argument) {
  var vid = document.getElementById(argument);
  vid.autoplay=true;
  vid.play();
  if (vid.currentTime >= 5) {
vid.currentTime=00;
  }
  
 }
 function pluse(argument) {
  var vid = document.getElementById(argument);
  vid.pause();
  vid.currentTime=00;
 };

 function oncli(div1,div2,div3,div4) {
  
   var vid1 = document.getElementById(div1);
   var vid2 = document.getElementById(div2);
 var vid3 = document.getElementById(div3);
   var vid4 = document.getElementById(div4);
 var  srcVid1 = vid3.innerText;
 var srcVid2 = vid4.innerText;
  vid4.innerText = srcVid1

  var video = document.getElementById('myVideo');
 video.play();
    };

    function changeVideo(div,div2){
      document.getElementById(div).innerHTML = '<div align="center" style="margin:30%;"><img src="/loader.gif"></div>'
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
         var requst = `video=${div2}`;
         var urled = "{{ URL::to('changevideo?')}}"+requst;
         coun.open('Get',urled );
         coun.setRequestHeader('content-type','application/x-www-form-urlencoded');
         coun.send();
         };
    
       </script>
</html>