
<?php 
use App\forumAnswer;
use App\User;
use Carbon\Carbon;
use App\replyNotification;
use App\follow;
use App\followNotification;
include 'include/SimpleImage.php';

$name = $_POST['message'];
$title = $_POST['title'];
$description = $_POST['description'];
$asked = $_POST['replied'];
$question = $_POST['question'];
$URL = $_POST['URL'];
$attachment = $_FILES['attachment']['name'];
$type =  $_POST['type'];
$category =  $_POST['category'];
if (strlen($name) > 20) {

@$id = Auth::user()->id;
@$username = Auth::user()->name;
@$email = Auth::user()->email;

if (!empty($id)) {
  

   if (isset($attachment) && isset($type)) {
      if ($type == 'picture') {
         $proSize = $_FILES['attachment']["size"];
         @$tmp_name = $_FILES['attachment']["tmp_name"];
       
         @$filetypeim = explode(".", $attachment);
         @$filetype = $filetypeim[1];
       
         $filetype = strtolower($filetype);
if ($filetype =="png" || $filetype == "jpg"  || $filetype == "jpeg"  || $filetype == "gif") {
           @$fileEx  = $filetype[1];
           if ($proSize > 3047888) {
              $error = 'file too big';
           }else{
             @$lname = 'attachment';
         $fileEx = strtolower($fileEx);
         @$filelocation = "answerAttachment/";
         $profilename =time()."-".rand(100, 999)."-".$lname ."-". date("d-m-Y-H-i-s")."-".$attachment;
         @$desti = $filelocation.$profilename; 
         if (move_uploaded_file($tmp_name, $desti)) {
           try {
               // Create a new SimpleImage object
               $image = new \claviska\SimpleImage();
                // Magic! ✨
                $image
                ->fromFile($desti)                     // load image.jpg
                ->autoOrient()                              // adjust orientation based on exif data
                ->resize(717, 500)  
                // resize large to 320x200 pixel
                ->toFile($desti);      // convert to PNG and save a copy to new-image.png
               // And much more! 💪
             } catch(Exception $err) {
               // Handle errors
               echo $err->getMessage();
             }
             $name =$name.'</br/><p class="ftco-animate"><a href="../../../'.$desti.'" class="gallery image-popup img d-flex align-items-center" title="on computer, right ckick and select view image to see full image"><img id="image" src="../../../'.$desti.'" width="100%" height="400px"> </a></p><br/></br/>';
       };
       };
         };

      }elseif ($type == 'video') {
               $proSize = $_FILES['attachment']["size"];
         @$tmp_name = $_FILES['attachment']["tmp_name"];
       
         @$filetypeim = explode(".", $attachment);
         @$filetype = $filetypeim[1];
       
         $filetype = strtolower($filetype);
if ($filetype =="mp4" || $filetype == "webm"  || $filetype == "avi"  || $filetype == "mkv") {
       
           @$fileEx  = $filetype[1];
       
           if ($proSize > 63047888) {
               
           }else{
@$lname = "attachment";
         $fileEx = strtolower($fileEx);
         @$filelocation = "answerAttachment/";
         $profilename =time()."-".rand(100, 999)."-".$lname ."-". date("d-m-Y-H-i-s")."-".$attachment;
         @$desti = $filelocation.$profilename;
  if (move_uploaded_file($tmp_name, $desti)) {
          
    $name =$name.'<video id="video" src="../../'.$desti.'" width="100%" height="500px" controls="yes"></video>';
       };

           }

         };

      }elseif ($type == 'URL') {
         $name =$name.'<div style="width="100%" height="500px"">'.$URL.'</div>';
      };
   };





    $comment = forumAnswer::where('user_id',$id)->where('question_id',$title)->take(1)->get();
foreach ($comment as $key => $value) {
   $content =  $value->id;
}
    
    if(empty($content)){
        $comment = new forumAnswer;
 $comment->answer = $name;
  $comment->user_id = $id;
  $comment->question_id = $title;
$comment->save();
$follow = follow::where('post_id',$title)->get();
foreach ($follow as $value) {
  $followNotification = new followNotification;
$followNotification->Post_id = $title;
$followNotification->user_id = $value->user_id;
$followNotification->link = "forum/questions/".$question;
$followNotification->message = $username." answered a question you are following";
$followNotification->save();
}
   $ViewedNotif =  replyNotification::where('message_id',$title)->where('user_id',$id)->get();
if (sizeOf($ViewedNotif) <= 0) {
  $viewed = new replyNotification;
  $viewed->repleyed = $asked;
 $viewed->message = $username." answered your question";
  $viewed->link = "forum/questions/".$question;
  $viewed->message_id = $title;
  $viewed->user_id = $id;
$viewed->save();
}
    }else {
       forumAnswer::where('user_id',$id)->update(['answer'=>$name]);
    };

    $User =  User::where('Course',$category)->get();

    foreach ($User as $key => $value) {
      if ($value->email == $email) {
         # code...
      }else{
      error_reporting(-1);
      ini_set('display_errors', 'off');
      set_error_handler("var_dump");
      ini_set("mail.log", "/tmp/mail.log");
      ini_set("mail.add_x_header", TRUE);
      $to = $value->email;
      $subject = 'Answer Notification';
      $message = "<html>
      <body style='text-align: left'>
          <h2 style='color:lightskyblue'>TEKPOR ACADEMY =>  ".$value->name."</h2>
          <p style='font-family:monospace'>
              ".$username." answered a question we recommended for you. 
              <br/>
            <u>".$question." </u>
          <br/>
          <i>".$description." </i>
          <br/>
          <hr/>
          <br/>
          <b>".$name." </b>
          <br/>
          <button class='btn'>
          <a href='https://tekporacademy.tk/forum/questions/".$question."'>
          ANSWER QUESTION
       </a> <span class='badge badge-primary'></span>
  </button>
           </p>
           <pre>If you have not create account with tekporacademy,contact our system support for help on how to stop getting this message..</pre>
           <a href='https://www.tekporacademy.tk/contact'>
           https://www.tekporacademy.tk/contact
       </a>
           </body>
           </html>";
      
      $headers = implode("\r\n", [
      'From: Tekporacademy.tk<tekporaca@gmail.com>',
      'Reply-To: No_Reply@tekporacademy.tk',
      'MIME-Version: 1.0',
      'Content-Type: text/html; charset=ISO-8859-1',
      'X-Mailer: PHP/' . PHP_VERSION ]);
      $result = mail($to, $subject, $message, $headers);
      };
    };

} else {
    ?>
<script type="text/javascript">
  window.location.href = "/forum/questions/{{$question}}?erro=PLEASE YOUR REQUEST COULD NOT BE PROCESSED. <br> IT OCCURRED TO US THAT, YOU ARE NOT A RESISTED MEMBER.<br/> FOLLOW THIS LINK TO <a href='/register' class='btn btn-md btn-primary'>SIGN UP</a>.#comment";
</script>
   <?php

};
}else{
   ?>
<script type="text/javascript">
  window.location.href = "/forum/questions/{{$question}}?erro=Sentence too small to make a complete meaning#comment";
</script>
   <?php
};
?>
<script type="text/javascript">
  window.location.href = "/forum/questions/{{$question}}?#responseText";
</script>

    


 