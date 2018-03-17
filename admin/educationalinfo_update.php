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
        highestdegree           = '".$_POST['highestdegree']."',       
        workarea                = '".$_POST['workarea']."',
        annualincome            = '".$_POST['annualincome']."'
                
        WHERE id                ='$id'";
		
	

$rs = $db->executeQuery($sql);

$update="UPDATE hum_members_profile SET
       educational_background  = '".$_POST['educational_background']."',	
	   work_status				= '".$_POST['work_status']."',
       professional_background = '".$_POST['professional_background']."'

       WHERE user_id   ='$id'";

$rs = $db->executeQuery($update);

header("Location: admin_edit_member.php?id=$id&mess=success");
exit;
?>
