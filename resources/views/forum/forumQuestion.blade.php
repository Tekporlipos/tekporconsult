<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
$id = str_replace("⚡", "/", $id);
    ?>
    <title>TekporAcademy - {{$id}}</title>
    
     <script src="{{ asset('js/ckeditor.js') }}"></script>
  <!--  <script src="https://cdn.ckeditor.com/ckeditor5/18.0.0/classic/ckeditor.js"></script> -->
    @include('include.head')
    <meta property="og:title" content="TekporAcademy - {{$id}}" />
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
          <div class="col-md-9  text-center">
            <h3 class="mb-2 bread">Descussion Room</h3>
             <p class="breadcrumbs"><span class="mr-2"><a href="/home">Home <i class="ion-ios-arrow-forward"></i></a></span> <span class="mr-2"><a href="../../forum">FORUM <i class="ion-ios-arrow-forward"></i></a></span><span class="mr-2"><a><u><?php echo str_replace("_", " ", $id)?></u></a></span></p>
          </div>
        </div>
      </div>
    </section>


    <section class="ftco-section ">
      <div class="container-fluid">
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
                  <input type="text" id="question" name="question" onkeyup="questions('Askingquestions')"class="form-control" placeholder="Search for question.">
                </div>
              </form>
              <div id="Askingquestions">

              </div>
            </div>
<?php
$search = '';
use App\forum;
use App\like;
use App\User;
use App\follow;
use Carbon\Carbon;
 use App\forumAnswer;
use App\forumReplyAnswers;
use App\viewedPost;
use App\rateAnswer;
if (!isset($_REQUEST['question'])){
  ?>
<section>
  <?php
if (isset($id)) {
$forum = forum::where('title','LIKE',"$id%")->get();
//$forum = rateAnswer::where('title','LIKE',"$id%")->get();
?>
<div id="questionincomming" class="">

  @foreach ($forum as $key=>$item)
  <li class=" bg-light ftco-section"  style="cursor: pointer;list-style-type: none; width:98%; border: 1px darkgrey solid;border-radius: 5px;box-shadow: -5px 5px;" >

       <div class="d-flex bd-highlight text-justified">
                     <div class="container" >
                         <div class="content">
                          <div class="row">
                            <div class="col-10">
                                <a style="text-decoration:none; color:black;font-family: initial;">
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
<div  style="font-family:monospace; width:100%; background-color:#dbe0e6;overflow-x: auto;overflow-y: auto;border-radius: 5px;word-break: inherit;word-spacing: inherit;word-wrap: inherit; ">
<i class="fas fa-h3">{!!$item->question!!}</i>
<?php
if (!empty($item->checked)) {
    ?>
  {!!$item->checked!!}
  <?php
}
?>
</div>
                            
<div class="row " style="display: none;" id="shareContainer">
                          <div class="col-12 bg-dark text-danger text-small" style="font-size: 8px;cursor: text;"  contenteditable="yes" id="share" ></div> <div class="col-md-4 text-small text-left"><a class="btn-default" onclick="Hide('shareContainer')">Hide</a></div>
                        </div><br>

                        <div class="row "  id="content_down">
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
                            </div>
                            <div class="col-1 content">
                              <?php 
                                $link = str_replace("/", "⚡", $item->title)
                                ?>
                              <i class="ion-md-share" style='font-size: 12px' id="share" title="click to copy share link" onclick="copid('www.tekporaca.tk/forum/questions/{{$link}}','share','shareContainer')"></i>
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

<hr/>
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
    <button class="btn btn-md btn-default" data-toggle="modal" data-target="#invite"> <a class="text-primary"><i  title="invite" class="ion-ios-log-in"> </i></a></button>
  </div>

</div>

                         </div>

                     </div>

                   </div>

    </li>
    <hr>
  @endforeach

 <!-- answer-->

  <div class="pt-5 mt-5">
              <?php
                @$question_id = 0;
             foreach ($forum as $key => $value) {
  # code...
  @$question_id = $value->id;
}
              $comment = forumAnswer::where('question_id', $question_id )->orderBy('rate','desc')->get();
              ?>

              <h3 class="mb-5 h4 font-weight-bold"> <?php  ?>{{ sizeOf($comment)}} Response</h3>
              <!-- i turn the display off-->
              <ul class="comment-list"  >

@foreach ($comment as $key=>$item)

    <li class="comment ftco-section" id="responseText">
        <div class="vcard bio">
             <img src="/images/teacher-1.jpg" alt="Image comment">
             <br>
             <br>
             <br>
             <div class="text-center">
              <div class="text-primary" title="rate up" onclick="rate(1,'rateValue{{$key}}','{{$item->id}}')" style="cursor: pointer">
                <i class="ion-md-arrow-round-up"></i>
              </div>
            <div id="rateValue{{$key}}" class="text-justify text-center">
                <?php 
                  if (empty($item->rate)) {
                   echo(0);
                  }else {
                    $total =  $item->rate;
                    if (strlen($total) == 4) {
                      $total = $total/1000;
                      $total = $total.'K';
                    }elseif (strlen($total) == 7) {
                      $total = $total/1000000;
                      $total = $total.'M';
                    }
                    echo( $total);
                  }
                  ?>
                
              </div>
            <div class="text-danger" title="rate down" onclick="rate(-1,'rateValue{{$key}}','{{$item->id}}')"  style="cursor: pointer">
                <i class="ion-md-arrow-round-down"></i>
               </div>
            
            
             </div>
            
                </div>
                  <div class="comment-body">
                    <?php
                      $user = User::where('id',$item->user_id)->take(1)->get();
                    ?>
                                  @foreach ($user as $use)
                                  <h3>{{$use->name}}</h3>
                                  @endforeach

                    <div class="meta mb-2">{{Carbon::now('UTC')->createFromTimeStamp(strtotime($item->created_at))->diffForHumans()}}</div>
                    <p style="word-wrap: all; line-height: all; flex-wrap: all; overflow-wrap: all;">{!! $item->answer !!}</p>
                  <p id="replyed{{$key}}"><a onclick="showrep('replyed{{$key}}','replycont{{$key}}')" class="reply" style="cursor: pointer;">Reply</a></p>
                  </div>
                  <ul class="children ftco-section" style="padding-top:0px;border-top:0px">
                    <li class="comment" id="replyfeed{{$key}}">
                    </li>
                  <div id="replycont{{$key}}" style="display:none">
                      <div class="form-group" >
                        <div contenteditable="true" id="reply{{$key}}" style="border-bottom: 2px solid black; border-right: 2px solid black; width: 100% ; flex-wrap: all; overflow-wrap: all; word-spacing: inherit; word-wrap: inherit; background-color: white" >@foreach ($user as $use)
                                  <span style="font-family: monospace;">{{"@".$use->name."-"}} </span>
                                  @endforeach</div>
                                  <input type="hidden" id="default" value="{{$item->id}}">
                      <input type="hidden" id="com_id{{$key}}" value="{{$item->id}}">
                        <div>
                          <p>
                          <a onclick="replyxml('replyfeed{{$key}}','com_id{{$key}}','reply{{$key}}');onsen('replycont{{$key}}','replyed{{$key}}')" class="btn btn-sm btn-default reply">Reply</a></p>
                        </div>
                    </div>
                    </div>

                    <?php
                $reply = forumReplyAnswers::where('answer_id',$item->id)->orderBy('id','desc')->get();
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
               <li class="comment text-danger text-center " id="comment">
                <?php

if (isset($_REQUEST['erro'])) {
  echo $_REQUEST['erro'];
}
                ?>
                </li>
              </ul>
                <div class="comment-form-wrap pt-5 ftco-section">
                <h3 class="mb-5 h4 font-weight-bold">Answer This Question</h3>
                <div  class="bg-light">
                  <form method="post" action="/answerQuestion" enctype="multipart/form-data">
                    @csrf
                    @foreach($forum as $namee)
                          <input type='hidden' value="{{$namee->category}}" name="category">
                          @endforeach
                     
                          <input type='hidden' value="{{$id}}?" name="question">
                          @foreach ($forum as $key=>$item)
                    <input type="hidden" name="description" value="{{$item->question}}">
                    @endforeach
@foreach($user as $use)<input type="hidden" name="replied" value="{{$use->name}}">@endforeach
                     <div class="form-group">
                    <label for="message">Answer</label>
                  <input type="hidden" name="title" value="{{$question_id}}">
                    <textarea name="message" id="editor"  cols="30" rows="5" placeholder="Your Answer(Note: only one Answer)" class="form-control"></textarea>
                  </div>
                  <div class="row" style="border:1px solid blue;">
                          <div class="col-md-6">
                                 <div class="form-group" id="profileUpload">
                                  
                  <label for="Profile">Attach a file: (<SPAN class="text-danger text-small">optional</SPAN>)</label>
                  <textarea type="text" name="URL" value="" id="url" style="display: none;"  cols="30" rows="1" placeholder="Iframe URL" ></textarea>
                  <input type="file" class="form-control-file" name="attachment" id="uploadFile" placeholder="select file" accept="image/*,video/*" aria-describedby="fileHelpId">
                </div>
                          </div>
                         
                          <div class="col-md-6">
                            <label for="Profile">Select Type: (<SPAN titile="required if file is attached" class="text-danger text-small">required</SPAN>)</label>
                            <select name="type" id="categoryed" onchange="showingType()" class="form-control mb-2 text-center" >
                           <option value="" 
                           >Select Type</option>
                    <option value="picture" >Picture(3MB) </option>
                    <option value="video" >Video(64MB)</option>
                    <option value="URL" >URL(Iframe)</option>
                    
                        </select>
                  
                          </div>
                        

                        </div>
                        <br/>
                  <div class="form-group">
                    <input type="submit" value="Submit Answer" class="btn py-3 px-4 btn-primary" required>
                  </div>
                  </form>
                </div>
              </div>
              <hr>
              <hr>
              <!-- END comment-list -->

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
<section class=" ">
  <div >
    <div class="text-center" ><u>ASKED QUESTIONS</u></div>
  <h3 class="fas fa-h3 text-success "><u>YOUR QUESTION: {{$search}}</u></h3>
    @foreach ($forum as $item)
    <li class=""  style="cursor: pointer;list-style-type: none;" >
    <a style="text-decoration:none; color:black"  href="/forum/questions/<?php echo str_replace("/", "⚡", $item->title) ?>">
         <div class="d-flex bd-highlight text-justified">
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
    <div class="text-center">
      <a class="btn btn-md btn-primary" href="/addQuestion/{{$search}}">ADD QUESTION</a>
      </div>
  </div>

</section>

<?php
  } else {

    ?>
    <h6 class="">NO RESULT FOUND FOR: {{$search}}</h6>
    <br/>
   <img class="" src='/images/oops.png' width="100%" alt='oops'>
   <br>
   <div class="text-center ">
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

 $forum = forum::where('title', 'LIKE',"%$search%")->orWhere('question', 'LIKE',"%$search%")->get();
?>
 <div class="container ">
  <i class="ftco-animate">Related Questions</i>
  <br>
<ul class="" aria-hidden="true">

  @foreach ($forum as $item)
  <li class=""  style="cursor: pointer;list-style-type: none;" >
  <a style="text-decoration:none;"  href="/forum/questions/<?php echo str_replace("/", "⚡", $item->title) ?>">
       <div class="d-flex bd-highlight text-justified ">
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
            <div class="sidebar-box ">
              <h3>Category</h3>
              <ul class="categories">
           
                <hr>
                <li><a href="/Games">Quiz <span>(99+)</span></a></li>
                <li><a href="/store">Books <span>(99+)</span></a></li>
                <li><a href="/store">Store <span>(99+)</span></a></li>
                <li><a href="/category">Tutorials <span>(100+)</span></a></li>
              </ul>
            </div>

            <div class="sidebar-box " style="display:none">
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

            <div class="sidebar-box ">
              <h3>Popular Tags</h3>
              <ul class="tagcloud m-0 p-0" style="font-family: cursive;">
                <a href="/forum?tag=Mathematics" class="tag-cloud-link">Mathematics</a>
                <a href="/forum?tag=relationship " class="tag-cloud-link">relationship </a>
                <a href="/forum?tag=Others" class="tag-cloud-link">Others</a>
                <a href="/forum?tag=Languages" class="tag-cloud-link">Languages</a>
                <a href="/forum?tag=Art" class="tag-cloud-link">Art</a>
                <a href="/forum?tag=Business" class="tag-cloud-link">Business</a>
                <a href="/forum?tag=Programming" class="tag-cloud-link">Programming</a>
              </ul>
            </div>

            <div class="sidebar-box ">
              <h3>Archives</h3>
              <ul class="categories">
                <li><a href="#">March 2020 <span>(21)</span></a></li>
                <li><a href="#">April 2020 <span>(47)</span></a></li>
                <li><a href="#">May 2020 <span>(52)</span></a></li>
                <li><a href="#">June 2020 <span>(7)</span></a></li>
              </ul>
            </div>



            <div class="sidebar-box ">
              <h3>Blogs</h3>
<?php
use App\quizing;
use App\admin;
$quizing =  quizing::orderBy('id','desc')->take(1)->get();
?>
              @foreach ($quizing as $item)

              <?php
          $admin = $item->admin;
          $admins = admin::where('name',$admin)->take(1)->get();
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
use App\invite;
$books =  books::orderBy('id','desc')->take(1)->get();
?>
              @foreach ($books as $item)

              <?php
          $admin = $item->admin;
          $admins = admin::where('name',$admin)->take(1)->get();
          ?>
              <div class="block-21 mb-4 d-flex">
                <div class="text">
                  <p>
                    {{substr($item->description,0,200)  }}
                  </p>
                  <div class="meta">
                  <div><a href="Bookname/<?php echo str_replace("/", "⚡", $item->title) ?>"><span class="icon-calendar"></span> {{Carbon::now('UTC')->createFromTimeStamp(strtotime($item->created_at))->diffForHumans()}}</a></div>
                    @foreach($admins as $adm)

                  <div><a href="../../admin/{{$adm->name}}"><span class="icon-person"></span> {{ substr($adm->name,0,7)  }}</a></div>
                    @endforeach
                    <div><a href="Bookname/<?php echo str_replace("/", "⚡", $item->title) ?>"><span class="icon-chat"></span>Store</a></div>
                  </div>
                </div>
              </div>
              @endforeach

            </div>
          </div><!-- END COL -->
        </div>
      </div>
    </section>
    <div class="modal fade" id="invite" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-body">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      <?php
                      if (isset(Auth::user()->id)) {

$forum = forum::where('title','LIKE',"$id%")->get();
foreach ($forum as $key => $value) {
 $courese = $value->category;
 ?>
<h4>Invitation List (<span id="course" style="font-size: 15px">{{$courese}}</span>)</h4>
<div class="content">
  <div><button class="btn" onclick="changeCourse('Agriculture','{{$value->id}}','{{$id}}')">Agriculture</button><button class="btn" onclick="changeCourse('Art','{{$value->id}}','{{$id}}')">Art</button><button class="btn" onclick="changeCourse('Computing','{{$value->id}}','{{$id}}')">Computing</button><button class="btn" onclick="changeCourse('Engineering','{{$value->id}}','{{$id}}')">Engineering</button><button class="btn" onclick="changeCourse('Health','{{$value->id}}','{{$id}}')">Health</button><button class="btn" onclick="changeCourse('Humanities','{{$value->id}}','{{$id}}')">Humanities</button><button class="btn" onclick="changeCourse('Robotics','{{$value->id}}','{{$id}}')">Robotics</button><button class="btn" onclick="changeCourse('Science','{{$value->id}}','{{$id}}')">Science</button><button class="btn" onclick="changeCourse('Others','{{$value->id}}','{{$id}}')">Others</button></div>
<ul class="list-group"  id="list">

 <?php
$User = User::where('Course',$courese)->get();
foreach ($User as $key => $Users) {
?>
<div>
  <li class="list-group-item">
  <div class="row">
    <div class="col-sm-8 col-md-8">{{$Users->Username }} {{$Users->Lname }}<br/> <span class="text-success">School</span>:{{$Users->School}}</div>
    <div class="col-sm-4 col-md-4"><span id="send{{$key}}">
      <?php
$like = invite::where('post_id',$post_id)->where('user_id',$Users->id)->get();
if (sizeof($like) <= 0) {
  ?>
 <button class="btn-primary btn-sm btn" onclick="sendInvit('{{$Users->id}}','{{$value->id}}','send{{$key}}','{{$id}}','{{$Users->email}}','{{$Users->name}}')">Invite</button>
<?php
}else {
  ?>
<button class=' btn-sm btn' disabled>Invited</button>
  <?php
}
      ?>

    </span></div>
  </div>
</li>
</div>

<?php
}
}

                      }else {
                        echo "<a class='text-danger' href='/register'>SIGN UP</a>";
                      }

                      ?>

                    </ul>
                    </div>
                    <div class="modal-footer">
                      </div>
              </div>
          </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
  </div>
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
     var replied = document.getElementById('replied');
     var question_title = document.getElementById('question_title');
     var requst = `message=${sear.value}&title=${title.value}&replyied=${replied.innerText}&question=${question_title.innerText}`;
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

     function replyxml(div,div2,div3){

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
         var sear = document.getElementById(div3);
         var comid = document.getElementById(div2);
         var requst = `reply=${sear.innerText}&commet_id=${comid.value}`;
         var urled = "{{ URL::to('replyanswer?')}}"+requst;
         coun.open('Get',urled );
         coun.setRequestHeader('content-type','application/x-www-form-urlencoded');
         coun.send();
         sear.innerHTML = "@";
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
        function questions(para){
         document.getElementById(para).style.display='block';
     if (window.XMLHttpRequest) {
     var coun = new XMLHttpRequest;
     }else{
     var coun = new ActiveXObject('Microsoft XMLHTTP');
     }
     coun.onreadystatechange = function(){
     if(this.readyState == 4 && this.status == 200){
     document.getElementById(para).innerHTML = this.responseText;
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
     document.getElementById('Askingquestions').style.display='none'
     };
</script>
 <script>
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
         //sendInvit
         function sendInvit(div1,div2,div3,div4,div5,div6){
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
         var requst = `user_id=${div1}&post_id=${div2}&question=${div4}&email=${div5}&username=${div6}`;
         var urled = "{{ URL::to('invitelink?')}}"+requst; 
         coun.open('Get',urled );
         coun.setRequestHeader('content-type','application/x-www-form-urlencoded');
         coun.send();
         };
</script>
<script>
  ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
        function showingType(){
    var URL = document.getElementById('categoryed');
    var url = document.getElementById('url');
  var select = document.getElementById('uploadFile');
  if (URL.value == 'URL') {
    url.style.display="block";
    select.style.display="none";
    select.value = "";
  }else{
    url.style.display="none";
    url.value = "";
select.style.display="block";
  }
  }
    
  
  function rate(valuer,response,id) {
    if (window.XMLHttpRequest) {
     var coun = new XMLHttpRequest;
     }else{
     var coun = new ActiveXObject('Microsoft XMLHTTP');
     }
     coun.onreadystatechange = function(){
     if(this.readyState == 4 && this.status == 200){
     document.getElementById(response).innerHTML = this.responseText;
     }
     }
     var requst = `value=${valuer}&post_id=${id}`;
     var urled = "{{ URL::to('rate?')}}"+requst;
     coun.open('Get',urled );
     coun.setRequestHeader('content-type','application/x-www-form-urlencoded');
     coun.send();
  }
</script>
  </body>
</html>