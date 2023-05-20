<?php
    use App\quizing;
    use App\admin;
$quizName =  quizing::where('title',$id)->take(1)->get();
    ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>TekporAcademy - <?php echo (str_replace("_", " ", $id)); ?></title>
    @foreach($quizName as $item)
    <meta name="twitter:image" content="https://tekporacademy.tk/{{ $item->logo }}">
    <meta property="og:image" content="https://tekporacademy.tk/{{ $item->logo }}" />
    
<meta property="og:type" content="text.store" />
<meta property="og:url" content="https://tekporacademy.tk/home" />
@endforeach
    @include('include.head')
  </head> 
  <body ondblclick="scrolling()">
    @include('include.header')

   <div >
  
    @foreach($quizName as $item)
    <section class="hero-wrap hero-wrap-2" style="background-image: url('../images/gaming.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h3 class="mb-2 bread"><?php echo (str_replace("_", " ", $id)); ?></h3>
             <p class="breadcrumbs"><span class="mr-2"><a href="/home">Home <i class="ion-ios-arrow-forward"></i></a></span> <span class="mr-2"><a href="/Games">Games <i class="ion-ios-arrow-forward"></i></a></span> <span><a href="/quizCourses">{{  $item->course }} <i class="ion-ios-arrow-forward"></i></a></span>  <span><a href="/Quizname/{{$id}}" id="titled"><?php echo (str_replace("_", " ", $id)); ?><i class="ion-ios-arrow-forward"></i></a></span></p>
          </div>
        </div>
      </div>
    </section>


		
		<section class="ftco-section">
			<div class="container-fluid">
				<div class="row">
          <div class="col-lg-8 ftco-animate">
            <h2 class="mb-3 ftco-animate"><?php echo (str_replace("_", " ", $id)); ?></h2>
            <p class="ftco-animate">

              {{ substr($item->description,0,200)  }}

            </p>
            <p class="ftco-animate">
              <img src="../{{ $item->logo }}" alt="" width="100%" class="img-fluid">
            </p>
            <p class="ftco-animate">{{ substr($item->description,200,5000)  }}
            </p>
            <div class="tag-widget post-tag-container mb-5 mt-5 ftco-animate">
              <div class="tagcloud">
              <a href="../QuizStart/{{  $item->id }}?title={{$id}}" target="blank" class="tag-cloud-link lg" onclick="starting()">Start The Quiz</a>
               
              </div>
            </div>
            
            <div class="about-author d-flex p-4 bg-light ftco-animate">
              <div class="bio mr-5">
                <img src="{{ asset('images/bg_1.jpg') }}" alt="Image placeholder" class="img-fluid mb-4">
              </div>
              <div class="desc">
                <h3>{{ $item->admin }}</h3>
                <p>
                  <span id="greatings">
                    <script>
                      date = Date();
                  var time = date.substr(16,2);
                  time = Number(time);
                  if(time < 12 & time > 3){document.write("GOOD MORNING");}
                  if(time > 12 & time < 16){document.write("GOOD AFTERNOON");}
                  if(time > 16 ){document.write("GOOD EVENING")}
              
                    </script> 
                     </span>wonderful students of TekporAcademy, I am your Instructor for this quiz. And I am very ready to answer all your questions you may have, just comment them in the comment section and I will answer them within 24 hours.
                  <br/> LET HAVE FUN.
                </p>
              </div>
            </div>
            <input type="hidden" id="type" value="{{$item->id}}">
@endforeach
            <div class="pt-5 mt-5">
              <?php
              use App\comments;
              use App\User;
              use App\reply;
              use Carbon\Carbon;
              $comment = comments::where('blogType',$item->id)->orderBy('user_id','desc')->get();
              ?>
              <div class="comment-form-wrap pt-5 ftco-animate">
                <h3 class="mb-5 h4 font-weight-bold">Leave a comment</h3>
                <div  class="p-5 bg-light"> 
                  <div class="form-group">
                    <label for="message">Message</label>
                  
                    <textarea name="comment" id="message" cols="30" rows="5" placeholder="Leave Your Comment Here(Note: only one comment)" class="form-control"></textarea>
                  </div>
                  <div class="form-group">
                    <input type="submit" onclick="comment('comment')" value="Submit Comment" class="btn py-3 px-4 btn-primary" required>
                  </div>
                </div>
              </div>
              <h3 class="mb-5 h4 font-weight-bold"> {{ sizeOf($comment)}} Comments</h3>
              <!-- i turn the display off-->
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
                $reply = reply::where('com_id',$item->id)->orderBy('id','desc')->get();
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
                </li>
@endforeach
              
              </ul>
              <!-- END comment-list -->
              
            </div>
          </div> <!-- .col-md-8 -->
          <div class="col-lg-4 sidebar ftco-animate">
            @include('include/sidebar')
          </div><!-- END COL -->
        </div>
			</div>
		</section>
		
    @include('include/footer')
    
    @include('include/down')

    <script type="text/javascript">
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
     var urled = "{{ URL::to('comment?')}}"+requst;
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
         var urled = "{{ URL::to('reply?')}}"+requst;
         coun.open('Get',urled );
         coun.setRequestHeader('content-type','application/x-www-form-urlencoded');
         coun.send(); 
         sear.value = "";
         };
    </script>
    
  </body>
</html>