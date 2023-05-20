<?php

use App\User;
  $email = $_GET['email'];

$Users = User::where('email',$email)->take(1)->get();

foreach ($Users as $key => $value) {
   $token = $value->remember_token;

 error_reporting(-1);
ini_set('display_errors', 'On');
set_error_handler("var_dump");
ini_set("mail.log", "/tmp/mail.log");
ini_set("mail.add_x_header", TRUE);
$to = $email;
$subject = 'Email verification';
$message = "<html>
<body style='text-align: center'>
    <h2 style='color:lightskyblue'>TEKPOR ACADEMY</h2>
    <p>Follow this link to verify your email.<a href='https://www.tekporacademy.tk/verifyemail/".$token."'>https://www.tekporacademy.tk/verifyemail/".$token."</a>
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
<script type="text/javascript">
     window.location.href = '../../register';
</script>
