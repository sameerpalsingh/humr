<?php
include ("includes/application_top.php");

$db = new sql_db;
extract($_POST);

$sql = "UPDATE hum_registration SET
        marital_status  = '".$_POST['maritalstatus']."',
        looking_for     = '".$_POST['lookingfor']."',
        height          = '".$_POST['height']."',
        bodytype        = '".$_POST['bodytype']."',
        complexion      = '".$_POST['complexion']."',
        weight          = '".$_POST['weight']."',
	physical_status	='".$_POST['physical_status']."',
        diet		='".$_POST['diet']."',
	smoke		='".$_POST['smoke']."',
	drink		='".$_POST['drink']."'
        WHERE id        =".$_SESSION['sess_user_id'];
$rs = $db->executeQuery($sql);
header("Location: edit_profile.php?mess=success");
exit;
?>