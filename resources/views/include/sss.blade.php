<!DOCTYPE html>
<html>
<head>
	<title>now</title>
</head>
<body>
<?php
use App\books;
use App\Notification;
use App\quizing;

$boos = books::all();
$quizing = quizing::all();


foreach ($boos as $key => $value) {
$not = Notification::where('Notification',$value->title)->get();
if (sizeof($not) <= 0) {
	$viewed = new Notification;
 $viewed->Notification = "new book on ".$value->title;
  $viewed->link = "Bookname/".$value->title;
  $viewed->course = $value->course;
  $viewed->Category = $value->category;
  $viewed->admin = 1;
$viewed->save();}
}

foreach ($quizing as $key => $value) {
$not = Notification::where('Notification',$value->title)->get();
if (sizeof($not) <= 0) {
	$viewed = new Notification;
 $viewed->Notification = "new quize on ".$value->title;
  $viewed->link = "Quizname/".$value->title;
  $viewed->course = $value->course;
  $viewed->Category = $value->category;
  $viewed->admin = 1;
$viewed->save();}
}
?>

</body>
</html>