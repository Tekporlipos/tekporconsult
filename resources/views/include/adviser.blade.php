<?php

use App\User;
use App\Adviser;
  $email = $_GET['email'];
  $advicerName = $_GET['advicername'];
  $time = $_GET['time'];
  $id = $_GET['chatid'];
  $name = $_GET['name'];
   $addmin_id = $_GET['admin_id'];
  Adviser::where('id',$id)->where('LName',$name)->update(['Adminid'=>$addmin_id,'token'=>md5($time)]);


$Users = User::where('email',$email)->take(1)->get();
$advice = Adviser::where('id',$id)->take(1)->get();
foreach ($advice as $value) {
  $massage =  $value->message;
    }
foreach ($Users as $key => $value) {
   $token = md5($time);

 error_reporting(-1);
ini_set('display_errors', 'On');
set_error_handler("var_dump");
ini_set("mail.log", "/tmp/mail.log");
ini_set("mail.add_x_header", TRUE);
$to = $email;
$subject = 'Career Guidance';
$message = "<html>
<body style='text-align: center'>
    <h2 style='color:rgb(126, 190, 230)'>TEKPOR ACADEMY</h2><br>
    <p>Hello!! Mr. ".$name."</p> <br>
    <p>".$massage."</p>
    <p>Your advicer is Mr. ".$advicerName."</p> <br>
    <p>Follow this link to to procede whith your section.<a href='https://www.tekporacademy.tk/careerGuidance?token=".$token."&to=".$advicerName."'>Start Section</a>
         <br/> If you have not done this then disregard this message someone may have mistakenly use your email
    </p>
</body>
</html>";
$headers = implode("\r\n", [
'From: Tekporacademy.tk<tekporaca@gmail.com>',
'MIME-Version: 1.0',
'Content-Type: text/html; charset=ISO-8859-1',
'Reply-To: No_Reply@tekporacademy.tk',
'X-Mailer: PHP/' . PHP_VERSION
]);
$result = mail($to, $subject, $message, $headers);
if ($result) {
	echo "Code Sent";
exit;
}
else {
	echo "Code not Sent";
    }
}
?>
