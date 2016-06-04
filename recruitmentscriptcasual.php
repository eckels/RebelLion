<?php

$from=$_POST['email'];
$to="applications@rebellion-vg.com";
$subject="Casual Application";
$message =" []IGN: ";
$message .=$_POST['ign'];
$message .=" []HIGHEST SEASON 0 TIER: ";
$message .=$_POST['season0tier'];
$message .=" []HIGHEST SEASON 1 TIER: ";
$message .=$_POST['season1tier'];
$message .=" []CURRENT TIER: ";
$message .=$_POST['currenttier'];
$message .=" []Will you be able to play a match every 48 hours? ";
$message .=$_POST['matchdaily'];
$message .=" []A little about yourself: ";
$message .=$_POST['aboutyourself'];
$message .=" []WHAT IS YOUR LINE ID? (OPTIONAL): ";
$message .=$_POST['lineid'];


mail ( $to, $subject, $message, "From:".$from);

header("Location: http://rebellion-vg.com/applicationsent.html");
exit;

?>