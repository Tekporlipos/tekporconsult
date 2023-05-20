
<?php 
$post_id = $_GET['post_id'];
 $user_id = @Auth::user()->id;
 $value = $_GET['value'];
 
use App\rateAnswer;
use App\forumAnswer;

if (isset($user_id) & isset($post_id)) {
$rateAnswer = rateAnswer::where('answer_id',$post_id)->where('user_id',$user_id)->get();
if (sizeof($rateAnswer) <= 0) {
 $rateAnswer =  new rateAnswer;
$rateAnswer->answer_id = $post_id;
$rateAnswer->user_id = $user_id;
$rateAnswer->valuew = $value;
$rateAnswer->save();
}else{
 foreach ($rateAnswer as $valued) {
 if ($valued->valuew == $value) {
    $id = $valued->id;
$Deletlike = rateAnswer::find($id);
$Deletlike->delete();
 }else {
    rateAnswer::where('answer_id',$post_id)->where('user_id',$user_id)->update(['valuew'=>$value]);
 }
 }
};
$positive = rateAnswer::where('answer_id',$post_id)->where('valuew',1)->get();
$negative = rateAnswer::where('answer_id',$post_id)->where('valuew',-1)->get();
$total = sizeOf($positive)-sizeOf($negative);
forumAnswer::where('id',$post_id)->update(['rate'=>$total]);

echo $total;

}else{
  echo "<a class='text-danger' href='/register'>SIGN UP</a>";
};
?>
    


 