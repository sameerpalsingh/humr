<?php
include ("includes/application_top.php");

extract($_POST);
$db = new sql_db;
$sql = "INSERT INTO hum_members_profile SET
        family_values     = '".$_POST['rdbfamilyvalues']."',
        family_type       = '".$_POST['rdbfamilytype']."',
        family_status     = '".$_POST['rdbfamilystatus']."',
        father_occupation = '".$_POST['fatheroccupation']."',
        mother_occupation = '".$_POST['motheroccupation']."',
	brother		  = '".$_POST['brother']."',
        sister            = '".$_POST['sister']."',
        live_with_parents = '".$_POST['rdbliveparents']."',
	about_family	  = '".addslashes($_POST['about_yourfamily'])." ',	
        user_id           =".$_SESSION['sess_user_id'] . " "
        . " ON DUPLICATE KEY UPDATE family_values     = '".$_POST['rdbfamilyvalues']."',
        family_type       = '".$_POST['rdbfamilytype']."',
        family_status     = '".$_POST['rdbfamilystatus']."',
        father_occupation = '".$_POST['fatheroccupation']."',
        mother_occupation = '".$_POST['motheroccupation']."',
	brother		  = '".$_POST['brother']."',
        sister            = '".$_POST['sister']."',
        live_with_parents = '".$_POST['rdbliveparents']."',
	about_family	  = '".addslashes($_POST['about_yourfamily'])."'";

$rs = $db->executeQuery($sql);
if (!$rs) {
    echo mysqli_error();
    exit;
}
header("Location: edit_profile.php?mess=success");
exit;
?>