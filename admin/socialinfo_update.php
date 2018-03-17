<?php
include ("includes/application_top.php");

$db = new sql_db;
$id=$_REQUEST['id'];

extract($_POST);

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

$sql = "UPDATE hum_registration SET
        religion                = '".$_POST['religion']."',
        caste                   = '".$_POST['caste']."',
        raasi                   = '".$_POST['raasi']."',
        mothertongue            = '".$_POST['mothertongue']."'
		               
        WHERE id ='$id'";
		
$rs = $db->executeQuery($sql);

$update="UPDATE hum_members_profile SET
        subcast					= '".$_POST['subcast']."',
        gotra					= '".$_POST['gotra']."',
        ancestralorigin			= '".$_POST['ancestralorigin']."',
        manglik					= '".$_POST['manglik']."',
        nakshatra				= '".$_POST['nakshatra']."'
WHERE user_id   ='$id'";
$rs = $db->executeQuery($update);

header("Location: admin_edit_member.php?id=$id&mess=success");
exit;
?>