<?php
include ("includes/application_top.php");
$db = new sql_db;

extract($_POST);

$age1 = $age." ".$uptoage;
$height1 = $height."to".$uptoheight;

$marrital_status = '';
$state_region    = '';
$part_religion   = '';
$partner_cast    = '';
$annual_income   = '';

if(isset($_REQUEST['mrtstatus']) && count($_REQUEST['mrtstatus']) > 0){
	$marrital_status = implode(" , ",$_REQUEST['mrtstatus']);
}
if(isset($_REQUEST['region']) && count($_REQUEST['region']) > 0){
	$state_region = implode(" , ",$_REQUEST['region']);
}
if(isset($_REQUEST['religion']) && count($_REQUEST['religion']) > 0){
	$part_religion = implode(" , ",$_REQUEST['religion']);
}
if(isset($_REQUEST['cast']) && count($_REQUEST['cast']) > 0){
	$partner_cast = implode(" , ",$_REQUEST['cast']);
}
if(isset($_REQUEST['income']) && count($_REQUEST['income']) > 0){
	$annual_income = implode(" , ",$_REQUEST['income']);
}

$sql = "INSERT INTO hum_members_profile SET
        partner_age		= '".$age1."',
        partner_marital_status  = '".$marrital_status."',
        partner_height		= '".$height1."',
        partner_state_region    = '".$state_region."',
        partner_religion	= '".$part_religion."',
        partner_cast		= '".$partner_cast."',
        partner_annual_income   = '".$annual_income."',
        desired_partner         = '".addslashes($_POST['described_partner'])."',
        user_id           =".$_SESSION['sess_user_id'] . " ON DUPLICATE KEY UPDATE "
        . "partner_age		= '".$age1."',
        partner_marital_status  = '".$marrital_status."',
        partner_height		= '".$height1."',
        partner_state_region    = '".$state_region."',
        partner_religion	= '".$part_religion."',
        partner_cast		= '".$partner_cast."',
        partner_annual_income   = '".$annual_income."',
        desired_partner         = '".addslashes($_POST['described_partner'])."' ";

$rs = $db->executeQuery($sql);

header("Location: edit_profile.php?mess=success");
exit;
?>