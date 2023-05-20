
<?php 
use App\follow;
use App\followNotification;
 $post_id = $_GET['post_id'];
 $user_id = @Auth::user()->id;

if (isset($user_id) & isset($post_id)) {
$follow = follow::where('Post_id',$post_id)->where('user_id',$user_id)->get();
if (sizeof($follow) <= 0) {
 $following =  new follow;
$following->Post_id = $post_id;
$following->user_id = $user_id;
$following->save();
$fol=follow::where('post_id',$post_id)->get();
echo "<span  class='ion-md-pricetags text-danger' title='unfollow' ></span><sub>".sizeof($fol)."</sub>";

}else{
 foreach ($follow as $key => $value) {
   $id = $value->id;
$DeletFollow = follow::find($id);
$DeletFollow->delete();
$fol=follow::where('post_id',$post_id)->get();
 echo "<span title='follow'class='ion-md-pricetags'> </span><sub>".sizeof($fol)."</sub>";
 }
 

};
}else{
  echo "<a class='text-danger' href='/register'>SIGN UP</a>";
};
?>
    


 