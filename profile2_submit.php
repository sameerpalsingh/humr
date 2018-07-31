<?php
include("includes/application_top.php");
date_default_timezone_set("Asia/Kolkata");
$db = new sql_db;
extract($_POST);

$age1 = $age." to ".$uptoage;
$height1 = $height." to ".$uptoheight;

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

$sql="update hum_members_profile set
	partner_age				='".addslashes($age1)."',
	partner_marital_status	='".($marrital_status)."',
	partner_height			='".($height1)."',
	partner_state_region	='".($state_region)."',
	partner_religion		='".($part_religion)."',
	partner_cast			='".($partner_cast)."',
	partner_annual_income	='".($annual_income)."',
	desired_partner			='".($described_partner)."'
	where user_id=".$_SESSION['sess_user_id'];

$rs = $db->executeQuery($sql);

$sql_credit = "INSERT IGNORE INTO hum_credits(member_id, loginid, credit, description) VALUES('".$_SESSION['sess_user_id']."', '".$_SESSION['sess_user_name']."', 10, 'Registration Credits')";
$db->executeQuery($sql_credit);

header("Location: edit_profile.php");
echo "<meta http-equiv='Refresh' Content='0 URL=view_member.php'>";
exit;
?>