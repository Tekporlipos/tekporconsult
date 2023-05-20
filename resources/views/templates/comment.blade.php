
<?php 
use App\comments;
use App\User;
use Carbon\Carbon;


$name = $_GET['message'];
$title = $_GET['title'];
if (strlen($name) > 15) {

@$id = Auth::user()->id;
if (!empty($id)) {
  
    $comment = comments::where('user_id',$id)->where('blogType',$title)->take(1)->get();
foreach ($comment as $key => $value) {
   $content =  $value->id;
}
    
    if(empty($content)){
        $comment = new comments;
 $comment->message = $name;
  $comment->user_id = $id;
  $comment->blogType = $title;
$comment->save();
   
    }else {
       comments::where('user_id',$id)->update(['message'=>$name]);
    }
  
    $comment = comments::where('user_id',$id)->take(1)->get();
?>

<div class="vcard bio">
    <img src="/images/teacher-1.jpg" alt="Image comment">
  </div>
  <div class="comment-body">
  <h3>{{Auth::user()->name}}</h3>
    @foreach ($comment as $item)
    <div class="meta mb-2"> {{Carbon::now('UTC')->createFromTimeStamp(strtotime($item->created_at))->diffForHumans()}}</div>
    @endforeach
  <p>{{$name}}</p>
  </div>

<?php
} else {
echo("<p class='text-danger'>PLEASE YOUR REQUEST COULD NOT BE PROCESSED. <br> IT OCCURRED TO US THAT, YOU ARE NOT A RESISTED MEMBER.<br/> FOLLOW THIS LINK TO <a href='/register' class='btn btn-md btn-primary'>SIGN UP</a>.</p>");
}
}else{
    echo("<p class='text-danger'>Sentence too small to make a complete meaning</a>.</p>");
};
?>


    


 