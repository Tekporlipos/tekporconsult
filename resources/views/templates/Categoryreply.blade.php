
<?php 
use App\categoryreply;
use App\User;
use Carbon\Carbon;


 $name = $_GET['reply'];
 $comid = $_GET['commet_id'];

if (strlen($name) > 10) {
@$id = Auth::user()->id;
if (!empty($id)) {

 $comment = new categoryreply;
 $comment->reply = $name;
  $comment->user_id = $id;
  $comment->com_id = $comid;

$comment->save();
  $comment = categoryreply::where('user_id',$id)->orderBy('id','desc')->take(1)->get();
?>

<div class="vcard bio">
	
    <img src="/images/teacher-3.jpg" alt="Image comment">
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


    


 