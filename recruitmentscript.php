<?php

$from=$_POST['email'];
$to="applications@rebellion-vg.com";
$subject="Competitive Application";
$message =" []IGN: ";
$message .=$_POST['ign'];
$message .=" []HIGHEST SEASON 0 TIER: ";
$message .=$_POST['season0tier'];
$message .=" []HIGHEST SEASON 1 TIER: ";
$message .=$_POST['season1tier'];
$message .=" []CURRENT TIER: ";
$message .=$_POST['currenttier'];
$message .=" []WHAT POSITIONS CAN YOU PLAY COMPETITIVELY?: ";
$message .=$_POST['position'];
$message .=" ";
$message .=$_POST['position2'];
$message .=" ";
$message .=$_POST['position3'];
$message .=" []WHAT HEROES ARE YOU ABLE TO PLAY COMPETITIVELY?: ";
$message .=$_POST['heroes'];
$message .=" []WILL YOU BE ABLE TO USE DISCORD REGULARLY AND/OR ONLY ON COMPETITIONS?: ";
$message .=$_POST['discord'];
$message .=" []WILL YOU BE ABLE TO TRAVEL TO EVENTS IN EUROPE?: ";
$message .=$_POST['insideeu'];
$message .=" []WILL YOU BE ABLE TO TRAVEL TO EVENTS OUTSIDE OF EUROPE?: ";
$message .=$_POST['outsideeu'];
$message .=" []WHAT IS YOUR LINE ID? (OPTIONAL): ";
$message .=$_POST['lineid'];


mail ( $to, $subject, $message, "From:".$from);

header("Location: http://rebellion-vg.com/applicationsent.html");
exit;

?>