<?php
session_start();
include("includes/application_top.php");
$db = new sql_db;
$id = $_POST['user'];

$profilename=$_REQUEST['profilename'];
$date=date("Y-m-d H:i:s");
$message=$_REQUEST['txt_comment'];
$sentby =$_SESSION['sess_user_id'];   

$inbox = "insert into hum_inbox set  loginid ='".$id."',adminto ='".$id."',sentby ='".$_SESSION['sess_user_id']."' ,adminby ='".$_SESSION['sess_user_id']."' ,       
          date='".$date."',message='".$message."'";

$inresult = $db->executeQuery($inbox);


header("location:search_by_id_submit.php?profilename=$profilename&msg=send");
?>