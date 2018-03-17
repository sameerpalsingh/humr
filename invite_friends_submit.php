<?php
session_start();
include ("includes/application_top.php");

if (trim($_POST['friendsemails']) == "" || trim($_POST["message"] == "")) {
    header("Location: invite_friends.php");
    exit;
}
//print_r($_REQUEST);

$to   = $_POST["friendsemails"];
$from = "donotreply@humraahi.com";
$headers = "From: $from";
$subject = "Invitation to join HumRaahi.Com from ".$_SESSION["sess_full_name"];
$message = $_REQUEST['message'];
@mail($to, $subject, $message, $headers);

@header("Location: invite_friends.php?message=sent");
exit;



?>