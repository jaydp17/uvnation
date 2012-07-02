<?php
$to = "jaydp17@gmail.com";
$subject = "Contact Us - ".$_REQUEST['namefield'];
$message = $_REQUEST['descfield'];
$from = $_REQUEST['emailfield'];

$headers = "From: $from \r\n";
$headers .= "Reply-To: $from \r\n";
$headers .= "Return-Path: $from_\r\n";
$headers .= "X-Mailer: PHP \r\n";

if(mail($to,$subject,$message,$headers))
	echo "Mail Sent !!.";
else
	echo 'failed';
?> 