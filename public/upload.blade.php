<?php
$lname = Auth::user()->Lname ;

if($_FILES["file"]["name"]!=""){
    $test =explode('.',$_FILES["file"]['name']);
    $extention = end($test);
	$name = rand(100,99999).'.'.$extention;
	$time = time();
	$rand = rand(100, 999);
    $date = date("d-m-Y-H-i-s");
    $userid = Auth::user()->id;  
	$username = Auth::user()->name;
	
    $location = '../profile/'.$time."-".$rand."-".$lname ."-". $date."-".$name;
   if(move_uploaded_file($_FILES["file"]["tmp_name"], $location)){
	
    $userprofile =  $_SESSION['profile'] = '../profile/'.$time."-".$rand."-".$lname ."-". $date."-".$name;
   };
}
?>
