<?php
include ("includes/application_top.php");

$db = new sql_db;

extract($_POST);
$id=$_REQUEST['id'];
function getDayOfDOB($day)
{
    $output = "";
    for ($i=1; $i<=31; $i++) {
        $output.= "<option value='".$i."' ";
        if ($i == $day) {
            $output.= "selected";
        }
        $output.= ">".$i."</option>";
    }
    return $output;
}

$dob = $year."-".$month."-".$day;
//$today = Date("Y-m-d");

/*if (isEmailExistLogin($emailid, $_SESSION['sess_user_name'], $db) == true) {
    $err_message = "This emailid is already registered with us.";
}

if (isset($err_message)) {
    header("Location: edit_profile.php?err_message=".$err_message);
    exit;
}*/

$sql = "UPDATE hum_members_profile SET
        family_values			= '".$_POST['rdbfamilyvalues']."',
        family_type				= '".$_POST['rdbfamilytype']."',
        family_status			= '".$_POST['rdbfamilystatus']."',
        father_occupation		= '".$_POST['fatheroccupation']."',
        mother_occupation		= '".$_POST['motheroccupation']."',
		brother					= '".$_POST['brother']."',
        sister					= '".$_POST['sister']."',
        live_with_parents		= '".$_POST['rdbliveparents']."',
		about_family			= '".addslashes($_POST['about_yourfamily'])."'
		
        WHERE id                ='$id'";
		

$rs = $db->executeQuery($sql);

header("Location: admin_edit_member.php?id=$id&mess=success");
exit;
?>