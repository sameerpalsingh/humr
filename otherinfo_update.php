<?php
include ("includes/application_top.php");
$db = new sql_db;
extract($_POST);

$sql = "UPDATE hum_registration SET
        aboutyourself   = '".addslashes($_POST['description'])."'        
        WHERE id        =".$_SESSION['sess_user_id'];
$rs = $db->executeQuery($sql);

$update="UPDATE hum_members_profile SET
       bloodgroup		='".$_POST['bloodgroup']."',
       challenged		='".$_POST['physicalstatus']."'
       WHERE user_id   =".$_SESSION['sess_user_id'];

$rs = $db->executeQuery($update);
header("Location: edit_profile.php?mess=success");
exit;
?>