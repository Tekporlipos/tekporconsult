
<?php 
use App\like;
 $post_id = $_GET['post_id'];
 $user_id = @Auth::user()->id;
if (isset($user_id) & isset($post_id)) {
$like = like::where('post_id',$post_id)->where('user_id',$user_id)->get();
if (sizeof($like) <= 0) {
 $likeing =  new like;
$likeing->post_id = $post_id;
$likeing->user_id = $user_id;
$likeing->save();
$likeed = like::where('post_id',$post_id)->get();
$size = sizeof($likeed);
echo "<i class='fas fa-h3 ion-md-heart text-danger'></i><sub>$size</sub>";

}else{
 foreach ($like as $key => $value) {
   $id = $value->id;
$Deletlike = like::find($id);
$Deletlike->delete();
$likeed = like::where('post_id',$post_id)->get();
$size = sizeof($likeed);
 echo "<i class='fas fa-h3 ion-md-heart'></i><sub>$size</sub>";

 }
 

};
}else{
  echo "<a class='text-danger' href='/register'>SIGN UP</a>";
};
?>
    


 