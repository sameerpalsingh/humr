<?php
include ("includes/application_top.php");

$db = new sql_db;

$id=$_REQUEST['id'];

extract($_POST);

$age1 = $age." ".$uptoage;
$height1 = $height."to".$uptoheight;

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

if(count($_REQUEST['mrtstatus']) > 0){
	$marrital_status = implode(" , ",$_REQUEST['mrtstatus']);
}
 if(count($_REQUEST['region']) > 0){
	$state_region = implode(" , ",$_REQUEST['region']);
}
 if(count($_REQUEST['religion']) > 0){
	$part_religion = implode(" , ",$_REQUEST['religion']);
}
 if(count($_REQUEST['cast']) > 0){
	$partner_cast = implode(" , ",$_REQUEST['cast']);
}
 if(count($_REQUEST['income']) > 0){
	$annual_income = implode(" , ",$_REQUEST['income']);
}



$sql = "UPDATE hum_members_profile SET
        partner_age				= '".$age1."',
		partner_marital_status  = '".$marrital_status."',
		partner_height			= '".$height1."',
		partner_state_region    = '".$state_region."',
		partner_religion		= '".$part_religion."',
		partner_cast			= '".$partner_cast."',
		partner_annual_income   = '".$annual_income."',
        desired_partner         = '".$_POST['described_partner']."'
        WHERE user_id           ='$id'";
		

$rs = $db->executeQuery($sql);

header("Location: admin_edit_member.php?id=$id&mess=success");
exit;
?>