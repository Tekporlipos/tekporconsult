<?php

use App\forum;
 $user = $_GET['actionBy'];
 $id =  $_GET['post'];
 $user_id = $_GET['code_id'];
if (isset($user)&& isset($id)&&isset($user_id)) {
$post = forum::where('id',$id)->where('user_id',$user_id)->get();
if (sizeof($post) <= 0) {
	$post = forum::find($id);
	$post->delete();
	$na = random_int(1, 11);
    switch ($na) {
      case 1:
        # code...
      $name = "Agriculture";
        break;
      case 2:
        # code...
      $name = "Art";
        break;
        case 3:
        # code...
        $name = "Computing";
        break;
        case 4:
        # code...
        $name = "Courses";
        break;
        case 5:
        # code...
        $name = "Engineering";
        break;
        case 6:
        # code...
        $name = "Health";
        break;
        case 7:
        # code...
        $name = "Humanities";
        break;
        case 8:
        # code...
        $name = "Robotics";
        break;
         case 9:
        # code...
        $name = "Sciences";
        break;
         case 10:
        # code...
        $name = "Vocational";
        break;
          case 11:
        # code...
        $name = "Others";
        break;
    }

return \redirect("/addQuestion/{{$name}}");

}else{
	return \redirect("/forum");
}
}else{
	return \redirect("/forum");
}

  ?>