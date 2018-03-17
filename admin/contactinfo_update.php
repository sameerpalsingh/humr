<?php
include ("includes/application_top.php");

$db = new sql_db;

extract($_POST);

$contactnumber=$_POST['mobile'].",".$_POST['landline'];

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
$today = Date("Y-m-d");

/*if (isEmailExistLogin($emailid, $_REQUEST['name'], $db) == true) {
    $err_message = "This emailid is already registered with us.";
}

if (isset($err_message)) {
    header("Location: edit_profile.php?err_message=".$err_message);
    exit;
}*/

 $sql = "UPDATE hum_registration SET
		
        contact_number  = '".$contactnumber."',
		emailid         = '".$_POST['emailid']."'
        
		WHERE id        =".$_SESSION['sess_user_id'];
		

$rs = $db->executeQuery($sql);

$update="UPDATE hum_members_profile SET
contact_address	= '".$_POST['address']."'
WHERE user_id   =".$_SESSION['sess_user_id'];
$rs = $db->executeQuery($update);

header("Location: admin_edit_member.php?id=$id&mess=success");
exit;
?>