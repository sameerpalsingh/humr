<?php
include("includes/application_top.php");
date_default_timezone_set("Asia/Kolkata");
$db = new sql_db;
extract($_POST);

$tob = $hour.":".$minut.":".$second;

if($_FILES['horoscope_file']['name']) {
	$upload_horoscope = $_FILES['horoscope_file']['name'];
	@mkdir("horoscope/".$_SESSION[sess_user_id]);
	if(!move_uploaded_file($_FILES['horoscope_file']['tmp_name'],"horoscope/".$_SESSION['sess_user_id']."/".$upload_horoscope)){
		header("Loation: profile.php?error=1");
		exit;
	}
}

$sql="INSERT INTO hum_members_profile set
	subcast          ='".addslashes($subcast)."',
	gotra            ='".addslashes($gotra)."',
	ancestralorigin  ='".addslashes($origin)."',
	manglik          ='".($rdbmanglik)."',
	nakshatra		 ='".($nakshatra)."',
	horoscope		 ='".($rdbhoroscope)."',
	birth_time		 ='".($tob)."',
	det_country		 ='".($delcountry)."',
	det_city		 ='".addslashes($detcity)."',
	upload_horoscope ='".($upload_horoscope)."',
	family_values	 ='".($rdbfamilyvalues)."',
	family_type		 ='".($rdbfamilytype)."',
	family_status	 ='".($rdbfamilystatus)."',
	father_occupation='".($fatheroccupation)."',
	mother_occupation='".($motheroccupation)."',
	brother          ='".($brother)."',
	sister           ='".($sister)."',
	live_with_parents='".addslashes($rdbliveparents)."',
	about_family     ='".addslashes($about_yourfamily)."',
	user_id=".$_SESSION['sess_user_id'];
	
$rs = $db->executeQuery($sql);
header("Location: profile1.php");
echo "<meta http-equiv='Refresh' Content='0 URL=profile1.php'>";
exit;
?>