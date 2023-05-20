<?php

if (isset($_GET['email']) && isset($_GET['pass'])) {
setcookie("pass", $_GET['pass'], time()+604800);
setcookie("email", $_GET['email'], time()+604800);
}

?>
 
