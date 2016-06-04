<?php

$from=$_POST['email'];
$email="support@rebellion-vg.com";
$subject=$_POST['subject'];
$message=$_POST['message'];

mail ( $email, $subject, $message, "From:".$from);

header("Location: http://rebellion-vg.com/emailsent.html");
exit;

?>