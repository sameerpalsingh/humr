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


/*if (isset($err_message)) {
    header("Location: edit_profile.php?err_message=".$err_message);
    exit;
}*/

$sql = "UPDATE hum_registration SET
        aboutyourself   = '".$_POST['description']."'
		
        
        WHERE id        ='$id'";
		


$rs = $db->executeQuery($sql);

$update="UPDATE hum_members_profile SET
       bloodgroup		='".$_POST['bloodgroup']."',
       challenged		= '".$_POST['physicalstatus']."'

       WHERE user_id   ='$id'";
$rs = $db->executeQuery($update);

header("Location: admin_edit_member.php?id=$id&mess=success");
exit;
?>