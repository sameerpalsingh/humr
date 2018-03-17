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
        
        country         = '".$_POST['livingin']."',
        state           = '".$_POST['nativestate']."',
        city            = '".$_POST['residingcity']."'        
        WHERE id        ='$id'";
		
	

$rs = $db->executeQuery($sql);

header("Location: admin_edit_member.php?id=$id&mess=success");
exit;
?>