
<?php 
use App\subscribe;
if (!empty($_GET['email']) && !empty($_GET['category'])) {
if(filter_var($_GET['email'],FILTER_VALIDATE_EMAIL)){
$email = $_GET['email'];
$category = $_GET['category'];
$subscribe = subscribe::where('email',$email)->get();

if (sizeof($subscribe) <= 0) {
   $subscribed = new subscribe;
 $subscribed->email = $email;
  $subscribed->category = $category;
  if ($subscribed->save()) {
    echo "subscribed";  }else{
      echo "Something bad happend";
    }
}else{
  echo "You have already subscribed";
}
} else{
  echo "Input a valid email";
};
}else{
  echo "No input.";
};
