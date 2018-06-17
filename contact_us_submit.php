<?php
include ("includes/application_top.php");

$to = SITE_EMAIL;
$subject = "message from ".$_POST['name'];
$header = "From: ".$_POST['emailaddress'];

$message = "Below are the details for contact.";
$message.= "Name : ".$_POST['name']."\n";
$message.= "Email id : ".$_POST['emailaddress']."\n";
$message.= "Phone : ".$_POST['phone']."\n";
$message.= "Mobile : ".$_POST['mobile']."\n";
$message.= "Message : ".$_POST['message'];

if (@!mail($to, $subject, $message, $header)) {
    header("Location: contact_us.php?message=mailerror");
    exit;
} else {
    header("Location: contact_us.php?message=mailsuccess");
    exit;
}
?>