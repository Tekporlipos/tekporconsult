<!DOCTYPE html>
<html lang="en">
  <head>
    <title>TekporAcademy - Forum</title>
  <!-- <script data-ad-client="ca-pub-2302258309087377" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script> -->
    @include('include.head')
    <meta property="og:title" content="TekporAcademy - Forum" />
<meta property="og:type" content="text.question" />
<meta property="og:url" content="https://tekporacademy.tk/forum" />
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
             <p class="breadcrumbs"><span class="mr-2"><a href="/home">Home <i class="ion-ios-arrow-forward"></i></a></span> <span class="mr-2"><a href="#">FORUM <i class="ion-ios-arrow-forward"></i></a></span></p>
          </div>
        </div>
      </div>
    </section>


		<section class="ftco-section ftco-animate">
			<div class="container-fluid">
				<div class="row">
          <div class="col-lg-7 ftco-animate">
            <div class="justify-content-center jumbotron">
              <div class="container " role="alert">
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
                  <input type="text" id="question" name="question" onkeyup="questions('askingquestions')"class="form-control" placeholder="Search for question.">
                </div>
              </form>
              <div id="askingquestions">
              </div>
            </div>
<?php
$search = '';
use App\forum;
use App\follow;
use App\User;
use Carbon\Carbon;
use App\forumAnswer;
use App\like;
use App\viewedPost;
if (!isset($_REQUEST['question'])){
  ?>
<section>
  <?php
  if (isset($_REQUEST['tag'])) {
     $tag = $_REQUEST['tag'];
  }elseif (!empty(Auth::user()->name)) {
    # code...
    $name = Auth::user()->Course;
  }else{
    $na = random_int(1, 11);
    switch ($na) {
      case 1:
        # code...
      $name = "Agriculture";
        break;
      case 2:
        # code...
      $name = "Art";
        break;
        case 3:
        # code...
        $name = "Computing";
        break;
        case 4:
        # code...
        $name = "Courses";
        break;
        case 5:
        # code...
        $name = "Engineering";
        break;
        case 6:
        # code...
        $name = "Health";
        break;
        case 7:
        # code...
        $name = "Humanities";
        break;
        case 8:
        # code...
        $name = "Robotics";
        break;
         case 9:
        # code...
        $name = "Sciences";
        break;
         case 10:
        # code...
        $name = "Vocational";
        break;
          case 11:
        # code...
        $name = "Others";
        break;
    }
  }
if (isset($name) || isset($tag)) {
  if (isset($name)) {
   $forum = forum::where('category', 'LIKE',"%$name%")->orWhere('tag', 'LIKE',"%$name%")->orderBy('id','desc')->get();
  }elseif (isset($tag)) {
    $forum = forum::where('tag', 'LIKE',"%$tag%")->orderBy('id','desc')->get();
    $name = $tag;
  }
?>
<div id="questionoutcomming">
  <div class="text-center" ><u>Recommend For You</u></div>
  @foreach ($forum as $key=>$item)
  <li class="ftco-animate bg-light"  style="cursor: pointer;list-style-type: none; width:98%; border: 1px darkgrey solid;border-radius: 5px;box-shadow: -5px 5px;" >

       <div class="d-flex bd-highlight text-justified">
                     <div class="container" >
                         <div class="content">
                          <div class="row">
                            <div class="col-10">
                                <a style="text-decoration:none; color:black;font-family: initial;"  href="/forum/questions/<?php echo str_replace("/", "⚡", $item->title)?>">
                            <i class="fas fa-h3"> <u><?php echo str_replace("_", " ", $item->title)?></u></i>
                            </a>
                            <br>
                           
                            </div>
                            <div class="col-2" style='font-size: 12px'>
                              <i class="fas fa-h3 ion-ios-bookmarks text-success"></i><sub>
                                 <?php
                              $comment = forumAnswer::where('question_id', $item->id )->orderBy('user_id','desc')->get();
echo sizeof($comment);
                              ?>

                              </sub>
                            </div>
                          </div>
<div style="font-family:monospace; width:100%; height:150px;background-color:#dbe0e6;overflow-y: hidden;border-radius: 5px;word-break: inherit;word-spacing: inherit;word-wrap: inherit; ">
<i class="fas fa-h3">{!!$item->question!!}</i>
</div>
                            <div class="row ftco-animate"  id="content_down">
                              <div class="col-3 content" style="font-size: 12px">
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
$viewed = viewedPost::where('Post_id',$post_id)->get();
$like = like::where('post_id',$post_id)->get();
$size = sizeof($like);
$like = like::where('post_id',$post_id)->where('user_id',$user_id)->get();
if (sizeof($like) <= 0) {
   echo "<a id='like$key' style='font-size: 12px' onclick=\"like('$post_id','like$key')\" ><i class='fas fa-h3 ion-md-heart'><sub style='font-size: 10px'>$size</sub></i></a>";
}else{
 echo "<a id='like$key' style='font-size: 12px' onclick=\"like('$post_id','like$key')\" ><i class='fas fa-h3 ion-md-heart text-danger'><sub style='font-size: 10px'>$size</sub></i></a>";
}


                                ?>
                              </div>
                              <div class="col-2 content">
                               <span class="ion-md-eye"><sub style='font-size: 10px'><?php echo sizeof($viewed) ?></sub></span>
                              </div>
                              <div class="col-2 content">
                                <?php
if ($item->user_id ==  @Auth::user()->id ||  @Auth::user()->email == "admin@tekporaca.tk") {
                                 echo "<button style='font-size: 12px' class='btn btn-md btn-default'><a href='/QuestionEdit/$item->id'><i  title='edit' class='ion-md-book'> </i></a></button>";
      }else{
  $user_id = @Auth::user()->id;
  $post_id = $item->id;
  $follow = follow::where('post_id',$post_id)->where('user_id',$user_id)->get();
  $fol=follow::where('post_id',$post_id)->get();
  if (sizeof($follow) <= 0) {
   echo "<a id='following$key' style='font-size: 12px' onclick=\"follow('$post_id','following$key')\" ><span title='follow'class='ion-md-pricetags'> </span><sub>".sizeof($fol)."</sub></a>";
  }else{
  echo "<a id='following$key' style='font-size: 12px' onclick=\"follow('$post_id','following$key')\"><span  class='ion-md-pricetags text-danger' title='unfollow' ></span><sub>".sizeof($fol)."</sub></a>";
  }
  
  
                                }
                                ?>
  
                              </div>
                              <div class="col-3 content">
                                <i class="fas fa-h3" style='font-size: 10px'>{{Carbon::now('UTC')->createFromTimeStamp(strtotime($item->created_at))->diffForHumans()}}</i>
                              </div>
                            </div>
<div class="row">
  <div class="col-2 content">
    <span class="text-success" style='font-size: 10px'> <a href="/forum?tag={{$item->category}}">{{$item->category}}</a> </span>
  </div>
  <div class="col-8 content">
   <ul class="tagcloud m-0 p-0" style="font-family: cursive;">
    <?php
    $tags = $item->tag;
    $tag = explode(',', $item->tag);

    foreach ($tag as $key => $value) {
      # code...
      echo "<a href='/forum?tag=$value' style='font-size: 12px' class='tag-cloud-link'>$value</a>";
    }
    ?>
              </ul>

  </div>
  <div class="col-2 content">
    <button class="btn btn-md btn-default"> <a style='font-size: 30px;margin:0; padding:0' href="/forum/questions/<?php echo str_replace("/", "⚡", $item->title)?>"><i  title="more" class="ion-ios-more"> </i></a></button>
  </div>

</div>

                         </div>

                     </div>

                   </div>

    </li>

    <hr>
  @endforeach
  <div class="text-center">
  <a class="btn btn-md btn-primary" href="/addQuestion/{{$name}}">ADD QUESTION</a>
  </div>

</div>
<?php
}
?>
</section>

<?php

}else {
  if($_REQUEST['question'] < 5){
    $search = 'oooooooooooops';
  }else {
    $search = $_REQUEST['question'];
  }

  $forum = forum::where('title', 'LIKE',"%$search%")->orWhere('question','LIKE',"%$search%")->get();
  if (sizeof($forum)  > 0) {

    ?>

<section>
  <div >
    <div class="text-center ftco-animate" ><u>ASKED QUESTIONS</u></div>
  <h3 class="fas fa-h3 text-success "><u>YOUR QUESTION: {{$search}}</u></h3>
    @foreach ($forum as $item)
    <li class=""  style="cursor: pointer;list-style-type: none;" >
    <a style="text-decoration:none; color:black"  href="/forum/questions/<?php echo str_replace("/", "⚡", $item->title)?>">
         <div class="d-flex bd-highlight text-justified ftco-animate">
                       <div class="container" >
                           <div class="content">
                              <i class="fas fa-h3"> <u><?php echo str_replace("_", " ", $item->title)?></u></i>
                              <br>
                              <i class="fas fa-h3">{!!$item->question!!}</i>
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
   <img class="ftco-animate" src='/images/oops.png' width="100%" style="margin: 0px" alt=''>
   <br>
   <div class="text-center ftco-animate">
    <a class="btn btn-md btn-primary" href="/askQuestion/{{$search}}">ADD QUESTION</a>
    </div>
   <?php
  }

}
?>

<?php
if (isset($_REQUEST['question'])) {
  # code...

?>
 <div class="container ">
  <i class="ftco-animate  ">Related Questions</i>
  <br>
<ul class="" aria-hidden="true">

  @foreach ($forum as $item)
  <li class=""  style="cursor: pointer;list-style-type: none;" >
  <a style="text-decoration:none;"  href="/forum/questions/<?php echo str_replace("/", "⚡", $item->title)?>">
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

          <div class="col-lg-5 sidebar ftco-animate">
            @include('include/sidebar')
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
         function onsen(div,div1) {
           var viewer = document.getElementById(div);
           viewer.style.display = 'none';
           var viewer1 = document.getElementById(div1);
           viewer1.style.display = 'block';
         }
       </script>
       <!-- Question search -->

       <script>
        function questions(div){
         document.getElementById(div).style.display='block';
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
       </script>
       <script type="text/javascript">
  function scroll() {
     document.getElementById('questioncomming').style.display='none'
     };

     function follow(div1,div3){

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
     var urled = "{{ URL::to('follow?')}}"+requst;
     coun.open('Get',urled );
     coun.setRequestHeader('content-type','application/x-www-form-urlencoded');
     coun.send();
     };
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
</script>
  </body>
</html>
