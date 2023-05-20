<?php

use App\User;
use App\password_resets;
  $email = $_REQUEST['email'];
  $password = $_REQUEST['password'];
  $con_password = $_REQUEST['password_confirmation'];
  $token = $_REQUEST['token'];

$Users = User::where('email',$email)->take(1)->get();

foreach ($Users as $key => $value) {
    $reset_email = $value->email;
    $password_resets = password_resets::where('email',$reset_email)->get();
    foreach ($password_resets as $reset) {
        if ($token == $reset->token) {

if ($password == $con_password) {
    if (strlen($con_password) >= 8 ) {
        $password_new = password_hash($password, PASSWORD_DEFAULT);
        User::where('email',$email)->update(['password'=>$password_new]);

        error_reporting(-1);
ini_set('display_errors', 'Off');
set_error_handler("var_dump");
ini_set("mail.log", "/tmp/mail.log");
ini_set("mail.add_x_header", TRUE);
$to = $email;
$subject = 'password Update';
$message = "<html>
<body style='text-align: center'>
    <h2 style='color:lightskyblue'>TEKPOR ACADEMY</h2>
    <p>Your password had been changed at ".date("l jS \of F Y h:i:s A").". If you did not do that try changing it or contact administrator
        <br/>
    If you did this, then disregard this message.
    </p>
    <footer style='text-align: left; background-color:lightskyblue;color:white; border-radius:5px;padding:15px; rigth:0px; bottom: 0px;right: 0px;box-shadow: lightslategray'>
<h3 style='font-family:monospace; color:black'><u>Connect with us on social media: </u></h3> <br/>
twitter @ <a href='https://twitter.com/johntekpordzik1'> https://twitter.com/johntekpordzik1</a>
<br/>
Facebook @ <a href='https://www.facebook.com/Tekpor_Acadamey'> https://www.facebook.com/Tekpor_Acadamey</a>
<br/>
Instagram @  <a href='https://www.instagram.com/tekpor_academy/'> https://www.instagram.com/tekpor_academy/</a>
<br/>
Whatsapp @ <a href='https://wa.me/233501654023'> https://wa.me/233501654023</a><br/>
Help @ <a href='https://www.tekporacademy.tk/contact'> https://www.tekporacademy.tk/contact</a>
</footer>
</body>
    </html>";
// To send HTML mail, the Content-type header must be set

$headers = implode("\r\n", [
'From: tekporacademy.tk<tekporaca@gmail.com>',
'MIME-Version: 1.0',
'Content-Type: text/html; charset=ISO-8859-1',
'Reply-To: No_Reply@tekporaca.tk',
'X-Mailer: PHP/' . PHP_VERSION
]);
$result = mail($to, $subject, $message, $headers);
if ($result) {
	?>
    <script>
        window.location.replace("/register");
        </script>

    <?php
exit;
}
    }else{
        ?>
    <script>
        window.location.href = '../password/reset?message=(Request can not be process(weak password))';
        </script>

    <?php
    }

}else{
        ?>
    <script>
        window.location.href = '../password/reset?message=(Request can not be process(password do not match))';
        </script>

    <?php
    }

    }else{
        ?>
    <script>
        window.location.href = '../password/reset?message=(Request can not be process(Wrong token))';
        </script>

    <?php
    }
    }

}
?>
<script>
    window.location.href = '../password/reset?message=(Request can not be process)';
    </script>
