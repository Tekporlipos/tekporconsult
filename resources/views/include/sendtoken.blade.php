<?php
use App\password_resets;
use App\User;
  $email = $_REQUEST['email'];
 $Users = User::where('email',$email)->take(1)->get();
foreach ($Users as $key => $value) {
   $token = $value->remember_token;
if (!empty($token )) {

    error_reporting(-1);
ini_set('display_errors', 'On');
set_error_handler("var_dump");
ini_set("mail.log", "/tmp/mail.log");
ini_set("mail.add_x_header", TRUE);
$to = $email;
$subject = 'Password Reset';
$message = "<!DOCTYPE html>

<html lang='en'>
    <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css' integrity='sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh' crossorigin='anonymous'>
<body style='text-align: center; margin-left:30%;margin-right:0px;margin-bottom:0px;font-family: 'Courier New', Courier, monospace'>
    <h2 style='color:lightskyblue'><u>TEKPOR ACADEMY</u></h2>
    <div style='text-align: center'>
        <img src='https://tekporacademy.tk/favicons/favicon512x512.png' width='150px' alt='tekporacademy logo'>
        </div>

    <p> Follow this link to rest your password.<br/>
<button style='background-color:lightskyblue; border-radius:10px; margin:7px';box-shadow: lightslategray'>
    <a style='text-decoration:none; padding:15px; margin:10px;' href='https://www.tekporacademy.tk/passwordreset/".$token."'>
https://www.tekporacademy.tk/passwordreset/".$token."
</a>
    </button>

</p>
<br/>
<pre>
If you have not done this then disregard this message someone may have mistakenly used your email.
</pre>
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

$headers = implode("\r\n", [
'From: Tekporacademy.tk<tekporaca@gmail.com>',
'Reply-To: No_Reply@tekporacademy.tk',
'MIME-Version: 1.0',
'Content-Type: text/html; charset=ISO-8859-1',
'X-Mailer: PHP/' . PHP_VERSION
]);
$result = mail($to, $subject, $message, $headers);

if ($result) {
    $password = password_resets::where('email',$value->email)->get();
    if (sizeOf($password) <= 0) {
    $password_resets = new password_resets;
            $password_resets->email  = $value->email;
            $password_resets->token  = $value->password;
             $password_resets->save();
}else {
    password_resets::where('email',$value->email)->update(['token'=>$value->password]);
}
?>
<script>
     window.location.replace('password/reset?message=(Sent check your Email messsages)');
    </script>
<?php
exit;
}else {
    ?>
    <script>
        window.location.replace('password/reset?message=(Request can not be process(Not Sent))');
        </script>

    <?php
    }
}
}
?>
<script>
    window.location.replace('password/reset?message=(Request can not be process)');
    </script>
