<?php
include ("includes/application_top.php");

$db = new sql_db;

extract($_POST);

$sql = "UPDATE hum_registration SET
        religion                = '".$_POST['religion']."',
        caste                   = '".$_POST['caste']."',
        raasi                   = '".$_POST['raasi']."',
        mothertongue            = '".$_POST['mothertongue']."'               
        WHERE id =".$_SESSION['sess_user_id'];
		
$rs = $db->executeQuery($sql);

$update="UPDATE hum_members_profile SET
        subcast				= '".$_POST['subcast']."',
        gotra				= '".$_POST['gotra']."',
        ancestralorigin			= '".$_POST['ancestralorigin']."',
        manglik				= '".$_POST['manglik']."',
        nakshatra			= '".$_POST['nakshatra']."'
        WHERE user_id   =".$_SESSION['sess_user_id'];
$rs = $db->executeQuery($update);

header("Location: edit_profile.php?mess=success");
exit;
?>