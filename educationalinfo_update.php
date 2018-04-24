<?php
include ("includes/application_top.php");

$db = new sql_db;

$sql = "UPDATE hum_registration SET
        highestdegree           = '".$_POST['highestdegree']."',       
        workarea                = '".$_POST['workarea']."',
        annualincome            = '".$_POST['annualincome']."'               
        WHERE id                = ".$_SESSION['sess_user_id'];
		
$rs = $db->executeQuery($sql);

$update="INSERT INTO hum_members_profile SET
        educational_background  = '".addslashes($_POST['educational_background'])."',	
        work_status             = '".$_POST['work_status']."',
        professional_background = '".addslashes($_POST['professional_background'])."',
        user_id           = '".$_SESSION['sess_user_id']."' ON DUPLICATE KEY UPDATE "
        . "educational_background  = '".addslashes($_POST['educational_background'])."', "
        . "work_status = '".$_POST['work_status']."', "
        . "professional_background = '".addslashes($_POST['professional_background'])."' ";

$rs = $db->executeQuery($update);
if (!$rs) {
    echo $db->dberror(); exit;
}
header("Location: edit_profile.php?mess=success");
exit;
?>
