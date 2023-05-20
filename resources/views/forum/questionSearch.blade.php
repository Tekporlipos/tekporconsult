
<?php 
$name = $_GET['searched'];
use App\forum;
use Carbon\Carbon;
if (strlen($name) > 10) {
  # code...
$forum = forum::where('title', 'LIKE',"%$name%")->orWhere('question', 'LIKE',"%$name%")->get();
?>
<div id="questioncomming" style=" background-color: #007bff4d;scroll-behavior: inherit;scrollbar-color: var(--blue);">
  <div class="text-center" ><u>ASKED QUESTIONS</u></div>
  @foreach ($forum as $item)
  <li class=""  style="cursor: pointer;list-style-type: none;" >
  <a style="text-decoration:none; color:black"  href="/forum/questions/<?php echo str_replace("/", "⚡", $item->title) ?>">
       <div class="d-flex bd-highlight text-justified">
                     <div class="container" >
                         <div class="content">
                            <i class="fas fa-h3"> <u>{{str_replace("_", " ", $item->title)}}</u></i>
                            <br>
                            <i class="fas fa-h3">{!!substr($item->question,0,40)!!}...</i>
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
  <a class="btn btn-md btn-primary" href="/addQuestion/{{$name}}">ADD QUESTION</a>
  </div>
  
</div>
<?php
} 
?>
