<?php
include("includes/application_top.php");
date_default_timezone_set("Asia/Kolkata");
$db = new sql_db;


if(count($_REQUEST['spoken']) > 0){
	$spoken_language = implode(" , ",$_REQUEST['spoken']);
}
 $educational_background=$_REQUEST['educational_background'];
  $workstatus=$_REQUEST['workstatus'];
  $professional_background=$_REQUEST['professional_background']; 
  $bloodgroup=$_REQUEST['bloodgroup']; 
  $physicalstatus=$_REQUEST['physicalstatus'];
  $nature_handicap=$_REQUEST['nature_handicap'];


 $sql="update hum_members_profile set
	educational_background='".addslashes($educational_background)."',
	work_status='".($workstatus)."',
	professional_background='".addslashes($professional_background)."',
	bloodgroup='".($bloodgroup)."',
	challenged='".($physicalstatus)."',
	handicap='".($nature_handicap)."',
	languages='".addslashes($spoken_language)."'
	where user_id=".$_SESSION['sess_user_id'];

$rs = $db->executeQuery($sql);
$userId = $db->insertId($rs);
header("Location: profile2.php");
echo "<meta http-equiv='Refresh' Content='0 URL=profile2.php'>";
?>