<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
    $id = str_replace("⚡", "/", $id);?>
    <title> TekporAcademy -Question-review - {{$id}}</title>
  
    @include('include.head')
<meta property="og:type" content="text.question" />
<meta property="og:url" content="https://tekporacademy.tk/addQuestion/QuestionReview" />
<meta property="og:image" content="https://tekporacademy.tk/images/guide.jpg" />
  </head>
  <body ondblclick="scrolling();scroll()">
    @include('include.header')

   <div >

    
    <section class="hero-wrap hero-wrap-2 ftco-animate" style="background-image: url('{{ asset('images/guide.jpg') }}');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h3 class="mb-2 bread">Discussion Room</h3>
             <p class="breadcrumbs"><span class="mr-2"><a href="/home">Home <i class="ion-ios-arrow-forward"></i></a></span> <span class="mr-2"><a href="../../forum">FORUM <i class="ion-ios-arrow-forward"></i></a></span><span class="mr-2"><a>QUESTION PREVIEW</i></a></span></p>
          </div>
        </div>
      </div>
    </section>

    
    <section class="ftco-section ftco-animate">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 ftco-animate">
            <div class="justify-content-center jumbotron">
              <div class="container">
              <p>
                <a class="btn btn-md btn-primary" href="/addQuestion/AskYourQuestion">ADD QUESTION</a>
</p>
<p class="text-justified alert alert-danger">
  <span class="ion-md-warning" aria-hidden="true"></span>
 <span class="sr-only">TAKE NOTE:</span>
  Get information and guidance from WHO regrading the current outbreak of coronavirus disease (COVID-19).<br>
  What would you what do know about coronavirus? <br> Follow the link to learn more about coronavirus. <a href="http://www.who.org" target="blank">WHO</a>
</p>
              </div>
            </div>
            <div class="sidebar-box">
              <form action="#" class="search-form">
                <div class="form-group">
                  <span class="icon icon-search"></span>
                  <input type="text" id="question" name="question" onkeyup="questions('questions')"class="form-control" placeholder="Search for question.">
                </div>
              </form>
              <div id="questions">

              </div>
            </div>
<?php
$search = '';
use App\forum;
use App\User;
use Carbon\Carbon;
 use App\forumAnswer;
use App\forumReplyAnswers;
use App\viewedPost;
use App\like;
if (!isset($_REQUEST['question'])){
  ?>
<section>

  <?php
if (isset($id)) {
  $user_id = Auth::user()->id;
$forum = forum::where('title','LIKE',"$id%")->where('user_id',$user_id)->get();

?>
<div id="questionincomming ftco-animate">
  @foreach ($forum as $key=>$item)
  <div class="text-left" ><u><a style="text-decoration:none; color:black">
                            <i class="fas fa-h3"> <u><?php echo str_replace("_", " ", $item->title)?></u></i>
                            </a></u></div>
                            <i class="fas fa-h3">{!!$item->question!!}</i>
  <li class="ftco-animate"  style="cursor: pointer;list-style-type: none;" >
       <div class="d-flex bd-highlight text-justified">
                     <div class="container" >
                         <div class="content">
                          <div class="row ftco-animate" style="display: none;" id="shareContainer">
                            <div class="col-12 bg-dark text-danger text-small" style="font-size: 8px;cursor: text;"  contenteditable="yes" id="share" ></div> <div class="col-md-4 text-small text-left"><a class="btn-default" onclick="Hide('shareContainer')">Hide</a></div>
                          </div><br>
                          
                          <div class="row ftco-animate"  id="content_down">
                            <div class="col-3 content" style="font-size: 10px">
                              <?php
                              $user_id = $item->user_id;
$user = User::where('id', $user_id)->get();
                              ?>

                               <i class="fas fa-h3" style="font-size: 12px">Asked by: @foreach ($user as $use)</i>
                               <?php
                               if ($item->Annonomous) {
                                echo "Anonymous";
                               }else {
                                 echo $use->name;
                               }
                               ?>
                              @endforeach
                            </div>
                            <div class="col-2 content">
                                <?php
$user_id = @Auth::user()->id;
$post_id = $item->id;
$viewed = viewedPost::where('Post_id',$post_id)->where('user_id',$user_id)->get();
if ((sizeof($viewed) <=0) && isset($user_id)) {
  $viewedPost =  new viewedPost;
  $viewedPost->post_id = $post_id;
  $viewedPost->user_id = $user_id;
  $viewedPost->save();
};

$like = like::where('post_id',$post_id)->get();
$size = sizeof($like);
$like = like::where('post_id',$post_id)->where('user_id',$user_id)->get();
if (sizeof($like) <= 0) {
 echo "<a id='like$key' style='font-size: 12px' onclick=\"like('$post_id','like$key')\" ><i class='fas fa-h3 ion-md-heart'><sub style='font-size: 10px'>$size</sub></i></a>";
}else{
echo "<a id='like$key' style='font-size: 12px' onclick=\"like('$post_id','like$key')\" ><i class='fas fa-h3 ion-md-heart text-danger'><sub style='font-size: 10px'>$size</sub></i></a>";
}


                              ?>
                              <?php $linker = str_replace("/", "⚡", $item->title) ?>
                            </div>
                            <div class="col-1 content">
                              <i class="ion-md-share" style='font-size: 12px' id="share" title="click to copy share link" onclick="copid('www.tekporaca.tk/forum/questions/{{$linker}}','share','shareContainer')"></i>
                            </div>
                            <div class="col-2 content">
                              <?php
                              if ($item->user_id ==  @Auth::user()->id) {
                               echo "<button style='font-size: 12px' class='btn btn-md btn-default'><a href='/QuestionEdit/$item->id'><i  title='edit' class='ion-md-book'> </i></a></button>";
    }else{
$user_id = @Auth::user()->id;
$post_id = $item->id;
$follow = follow::where('post_id',$post_id)->where('user_id',$user_id)->get();
$fol=follow::where('post_id',$post_id)->get();
if (sizeof($follow) <= 0) {
 echo "<a id='following$key' style='font-size: 12px' onclick=\"follow('$post_id','following$key')\" title='follow'class='ion-md-pricetags'><sub>".sizeof($fol)."</sub></a>";
}else{
echo "<a id='following$key' style='font-size: 12px' onclick=\"follow('$post_id','following$key')\" class='ion-md-pricetags text-danger' title='unfollow' ><sub>".sizeof($fol)."</sub></a>";
}


                              }
                              ?>

                            </div>
                            <div class="col-3 content">
                              <i class="fas fa-h3" style='font-size: 10px'>{{Carbon::now('UTC')->createFromTimeStamp(strtotime($item->created_at))->diffForHumans()}}</i>
                            </div>
                          </div>

<hr/>
<div class="row ftco-animate">
  <div class="col-2 content">
    <span class="text-success">{{$item->category}}</span>
  </div>
  <div class="col-8 content">
   <ul class="tagcloud m-0 p-0">
   <?php
    $tags = $item->tag;
    $tag = explode(',', $item->tag);
   
    foreach ($tag as $key => $value) {
      # code...
      echo "<a href='#'' class='tag-cloud-link'>$value</a>";
    }
    ?>
              </ul>
                
  </div>
  <div class="col-2 content">
    <button class="btn btn-md btn-default"> <a href="/forum/questions/<?php echo str_replace("/", "⚡", $item->title) ?>">Read...</a></button>
  </div>

</div>
                            
                         </div>
                         
                     </div>
                
                   </div>                     
      
    </li>
    <hr>
  @endforeach
 
 <!-- answer-->
</div>
<?php
} 
?>
</section>

<?php
}else {
  $search = $_REQUEST['question'];
  $forum = forum::where('title', 'LIKE',"%$search%")->orWhere('question', 'LIKE',"%$search%")->get();
  if (sizeof($forum)  > 0) {
    
    ?>

<section>
  <div >
    <div class="text-center ftco-animate" ><u>ASKED QUESTIONS</u></div>
  <h3 class="fas fa-h3 text-success "><u>YOUR QUESTION: {{$search}}</u></h3>
    @foreach ($forum as $item)
    <li class=""  style="cursor: pointer;list-style-type: none;" >
    <a style="text-decoration:none; color:black"  href="/forum/questions/<?php echo str_replace("/", "⚡", $item->title) ?>">
         <div class="d-flex bd-highlight text-justified ftco-animate">
                       <div class="container" >
                           <div class="content">
                              <i class="fas fa-h3"> <u><?php echo str_replace("_", " ", $item->title)?></u></i>
                              <br>
                              <i class="fas fa-h3">{{$item->question}}</i>
                              <br>
                              <i class="fas fa-h3"><em>Asked</em> {{Carbon::now('UTC')->createFromTimeStamp(strtotime($item->created_at))->diffForHumans()}}</i>
                              <br>
                              <span class="text-success">{{$item->category}}</span>
                           </div>
                           
                       </div>
                  
                     </div>                     
        </a>
      </li>
      <hr>
    @endforeach
    <div class="text-center ftco-animate">
      <a class="btn btn-md btn-primary" href="/askQuestion/{{$search}}">ADD QUESTION</a>
      </div>
  </div>
  
</section>

<?php
  } else {

    ?>
    <h6 class="ftco-animate">NO RESULT FOUND FOR: {{$search}}</h6>
    <br/>
   <img class="ftco-animate" src='/images/oops.png' alt=''>
   <br>
   <div class="text-center ftco-animate">
    <a class="btn btn-md btn-primary" href="/askQuestion/{{$search}}">ADD QUESTION</a>
    </div>
   <?php
  }
  
}
?>

<?php
if (isset($_REQUEST['question']) or isset($id)) {
  # code...
  if (isset($_REQUEST['question'])) {
    # code...
  $search = $_REQUEST['question'];
  } elseif (isset($id)) {
    # code...
    {{ }}
$search =  substr($id,0,25);
  } 
  $search = Auth::user()->Course;
 $forum = forum::where('title', 'LIKE',"%$search%")->orWhere('category', 'LIKE',"%$search%")->get();
?>
 <div class="container ">
  <i class="fas fa-h2  ftco-animate  ">Recomending for you.</i>
  <br>
<ul class="" aria-hidden="true">

  @foreach ($forum as $item)
  <li class="ftco-animate"  style="cursor: pointer;list-style-type: none;" >
  <a style="text-decoration:none;"  href="/forum/questions/<?php echo str_replace("/", "⚡", $item->title) ?>">
       <div class="d-flex bd-highlight text-justified ftco-animate">
                     <div class="container" >
                         <div class="content">
                            <i class="fas fa-h3"><?php echo str_replace("_", " ", $item->title)?></i> 
                     </div>
                
                   </div>                     
      </a>
    </li>
  @endforeach
</ul>
</div>

<?php
}
?>
           
          </div> <!-- .col-md-8 -->

          <div class="col-lg-4 sidebar ftco-animate">
            <div class="sidebar-box ftco-animate">
              <h3>Category</h3>
              <ul class="categories">
                <select><option><a href="#">----Courses--- <span>(8)</span></a></option>
                    <option onclick="redirict('category')"><a href="#">Agriculture <span>(3)</span></a></option>
                    <option onclick="redirict('category')"><a href="#">Art and Built <span>(6)</span></a></option>
                    <option onclick="redirict('category')"><a href="#">Humanities and Social Sciences <span>(2)</span></a></option>
                    <option onclick="redirict('category')">  <a href="#">Engineering <span>(1)</span></a></option>
                    <option onclick="redirict('category')"><a href="#">Health Sciences <span>(7)</span></a></option>
                    <option onclick="redirict('category')"><a href="#">Sciences <span>(12)</span></a></option>
                    <option onclick="redirict('category')"><a href="#">Vocational <span>(0)</span></a></option>
                    <option onclick="redirict('category')"><a href="#">Robotics <span>(4)</span></a></option>

                </select>
                <hr>
                <li><a href="/Games">Quiz <span>(99+)</span></a></li>
                <li><a href="/store">Books <span>(99+)</span></a></li>
                <li><a href="/store">Store <span>(99+)</span></a></li>
                <li><a href="/category">Tutorials <span>(100+)</span></a></li>
              </ul>
            </div>

            <div class="sidebar-box ftco-animate" style="display:none">
              <h3>Popular Articles</h3>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(../images/image_1.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> June 27, 2019</a></div>
                    <div><a href="#"><span class="icon-person"></span> Dave Lewis</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(../images/image_2.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">When the going get tough the tough get librarian </a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> June 27, 2019</a></div>
                    <div><a href="#"><span class="icon-person"></span> Joan Bauer</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(../images/image_3.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">God has given us power to dream of anything anything that can be dream of can be built, anyone who says otherwise is a fool.</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> June 27, 2019</a></div>
                    <div><a href="#"><span class="icon-person"></span> Davinci</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>
            </div>

            <div class="sidebar-box ftco-animate">
              <h3>Popular Tags</h3>
              <ul class="tagcloud m-0 p-0">
                <a href="/forum?tag=Statistics" class="tag-cloud-link">Statistics</a>
                <a href="/forum?tag=Agrculture" class="tag-cloud-link">Agrculture</a>
                <a href="/forum?tag=Physis" class="tag-cloud-link">Physis</a>
                <a href="/forum?tag=Languages" class="tag-cloud-link">Languages</a>
                <a href="/forum?tag=Art" class="tag-cloud-link">Art</a>
                <a href="/forum?tag=Business" class="tag-cloud-link">Business</a>
                <a href="/forum?tag=Programming" class="tag-cloud-link">Programming</a>
              </ul>
            </div>

            <div class="sidebar-box ftco-animate">
              <h3>Archives</h3>
              <ul class="categories">
                <li><a href="#">March 2020 <span>(21)</span></a></li>
                <li><a href="#">April 2020 <span>(47)</span></a></li>
                <li><a href="#">May 2020 <span>(52)</span></a></li>
                <li><a href="#">June 2020 <span>(7)</span></a></li>
              </ul>
            </div>


            <div class="sidebar-box ftco-animate">
              <h3>Blogs</h3>
<?php 
use App\quizing;
use App\admin;
$quizing =  quizing::orderBy('id','desc')->take(1)->get();
?>
              @foreach ($quizing as $item)

              <?php   
          $id = $item->admin;
          $admins = admin::where('name',$id)->take(1)->get();
          ?>
              <div class="block-21 mb-4 d-flex">
                <div class="text">
                  <p>
                    {{substr($item->description,0,200)  }}
                  </p>
                  <div class="meta">
                  <div><a href="Quizname/<?php echo str_replace("/", "⚡", $item->title) ?>"><span class="icon-calendar"></span> {{Carbon::now('UTC')->createFromTimeStamp(strtotime($item->created_at))->diffForHumans()}}</a></div>
                    @foreach($admins as $adm)
                
                  <div><a href="../../admin/{{$adm->name}}"><span class="icon-person"></span> {{ substr($adm->name,0,7)  }}</a></div>
                    @endforeach 
                    <div><a href="Quizname/<?php echo str_replace("/", "⚡", $item->title) ?>"><span class="icon-chat"></span>Quiz</a></div>
                  </div>
                </div>
              </div>
              @endforeach

              <?php 
use App\books;
$books =  books::orderBy('id','desc')->take(1)->get();
?>
              @foreach ($books as $item)

              <?php   
          $id = $item->admin;
          $admins = admin::where('name',$id)->take(1)->get();
          ?>
              <div class="block-21 mb-4 d-flex">
                <div class="text">
                  <p>
                    {{substr($item->description,0,200)  }}
                  </p>
                  <div class="meta">
                  <div><a href="Bookname/{{$item->title}}"><span class="icon-calendar"></span> {{Carbon::now('UTC')->createFromTimeStamp(strtotime($item->created_at))->diffForHumans()}}</a></div>
                    @foreach($admins as $adm)
                
                  <div><a href="../../admin/{{$adm->name}}"><span class="icon-person"></span> {{ substr($adm->name,0,7)  }}</a></div>
                    @endforeach 
                    <div><a href="Bookname<?php echo str_replace("/", "⚡", $item->title) ?>"><span class="icon-chat"></span>Store</a></div>
                  </div>
                </div>
              </div>
              @endforeach
              
            </div>
          </div><!-- END COL -->
        </div>
      </div>
    </section>
    
    @include('include/footer')
    
    @include('include/down')

  <script>
    
    function redirict(para){
        window.location.href = para;
    }
    </script>
    <!-- search -->
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
     document.getElementById('onlines').style.display='none'
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
     var urled = "{{ URL::to('answerQuestion?')}}"+requst;
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
         var urled = "{{ URL::to('replyanswer?')}}"+requst;
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

         //sendInvit
         function sendInvit(div1,div2,div3,div4){
         if (window.XMLHttpRequest) {
         var coun = new XMLHttpRequest;
         }else{
         var coun = new ActiveXObject('Microsoft XMLHTTP');
         }
         coun.onreadystatechange = function(){
         if(this.readyState == 4 && this.status == 200){
         document.getElementById(div3).innerHTML = this.responseText;
         }
         }
         var requst = `user_id=${div1}&post_id=${div2}&question=${div4}`;
         var urled = "{{ URL::to('invitelink?')}}"+requst;
         coun.open('Get',urled );
         coun.setRequestHeader('content-type','application/x-www-form-urlencoded');
         coun.send();
         };
 //changeCourse
 function changeCourse(div1,div2,div3){
         var title = document.getElementById('course');
         title.innerText= div1;
         if (window.XMLHttpRequest) {
         var coun = new XMLHttpRequest;
         }else{
         var coun = new ActiveXObject('Microsoft XMLHTTP');
         }
         coun.onreadystatechange = function(){
         if(this.readyState == 4 && this.status == 200){
         document.getElementById('list').innerHTML = this.responseText;
         }
         }
         var requst = `course=${div1}&post_id=${div2}&question=${div3}`;
         var urled = "{{ URL::to('list?')}}"+requst;
         coun.open('Get',urled );
         coun.setRequestHeader('content-type','application/x-www-form-urlencoded');
         coun.send();
         };
            //like//
     function like(div1,div3){

if (window.XMLHttpRequest) {
var coun = new XMLHttpRequest;
}else{
var coun = new ActiveXObject('Microsoft XMLHTTP');
}
coun.onreadystatechange = function(){
if(this.readyState == 4 && this.status == 200){
document.getElementById(div3).innerHTML = this.responseText;
}
}
var requst = `post_id=${div1}`;
var urled = "{{ URL::to('like?')}}"+requst;
coun.open('Get',urled );
coun.setRequestHeader('content-type','application/x-www-form-urlencoded');
coun.send();
};
function copid(argument,div,div1) {
var pre = document.getElementById(div);
var pred = document.getElementById(div1);
pred.style.display="block";
pre.innerText=argument;
};
function Hide(argument) {
  var pred = document.getElementById(argument);
pred.style.display="none";
};
// share
function copid(argument,div,div1) {
var pre = document.getElementById(div);
var pred = document.getElementById(div1);
pred.style.display="block";
pre.innerText=argument;
     };
     function Hide(argument) {
       var pred = document.getElementById(argument);
pred.style.display="none";
     };
       </script>
       <!-- Question search -->

       <script>
        function questions(div){
         document.getElementById('questions').style.display='block';
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
     var sear = document.getElementById('question');
     var requst = `searched=${sear.value}`;
     var urled = "{{ URL::to('questionSearch?')}}"+requst;
     coun.open('Get',urled );
     coun.setRequestHeader('content-type','application/x-www-form-urlencoded');
     coun.send(); 
     };

     function scroll() {
     document.getElementById('questioncomming').style.display='none'
     };
       </script>
  </body>
</html>