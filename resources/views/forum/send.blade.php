
<?php 
use App\invite;
 $post_id = $_GET['post_id'];
 $email = $_GET['email'];
 $username = $_GET['username'];
 $user_ided = $_GET['user_id'];
 $question = $_GET['question'];
 $user_id = @Auth::user()->id;
 $name =  Auth::user()->name;
if (isset($user_id) & isset($post_id)) {
$like = invite::where('post_id',$post_id)->where('user_id',$user_ided)->get();
if (sizeof($like) <= 0) {
 $likeing =  new invite;
$likeing->post_id = $post_id;
$likeing->user_id = $user_ided;
$likeing->message = Auth::user()->name.' invite you to a post';
$likeing->link = "forum/questions/".$question;
$likeing->save();
$to = $email;
      error_reporting(-1);
      ini_set('display_errors', 'off');
      set_error_handler("var_dump");
      ini_set("mail.log", "/tmp/mail.log");
      ini_set("mail.add_x_header", TRUE);
      $subject = 'Invitation Notification';
      $message = "<html>
      <body style='text-align: left'>
          <h2 style='color:lightskyblue'>TEKPOR ACADEMY =>  ".$username."</h2>
          <p style='font-family:monospace'>
              ".$name." invite you to a post. 
              <br/>
            <u>".$question." </u>
          <br/>
          <br/>
          <hr/>
          <br/>
          <br/>
          <button class='btn'>
          <a href='https://tekporacademy.tk/forum/questions/".$question."'>
          ANSWER QUESTION
       </a> <span class='badge badge-primary'></span>
  </button>
           </p>
           <pre>If you have not create account with tekporacademy,contact our system support for help on how to stop getting this message.</pre>
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

echo "<button class='btn btn-sm btn' disabled>Invited</button>";

};
}else{
  echo "<a class='text-danger' href='/register'>SIGN UP</a>";
};
?>
    


 