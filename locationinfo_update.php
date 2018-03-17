<?php
include ("includes/application_top.php");

$db = new sql_db;

extract($_POST);
$sql = "UPDATE hum_registration SET        
        livingin        = '".$_POST['livingin']."',
        country         = '".$_POST['citizenship']."',
        state           = '".$_POST['nativestate']."',
        city            = '".$_POST['residingcity']."'        
        WHERE id        =".$_SESSION['sess_user_id'];
$rs = $db->executeQuery($sql);
header("Location: edit_profile.php?mess=success");
exit;
?>