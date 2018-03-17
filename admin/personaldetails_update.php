<?php
include ("includes/application_top.php");

$db = new sql_db;

extract($_POST);

$dob = $year."-".$month."-".$day;


$id=$_REQUEST['id'];

if (isset($err_message)) {
    header("Location: edit_profile.php?err_message=".$err_message);
    exit;
}

 $sql = "UPDATE hum_registration SET
        password          = '".$_POST['password']."',
        gender          = '".$_POST['gender']."',
        dob             ='".$dob."',
        marital_status  = '".$_POST['maritalstatus']."',
        looking_for     = '".$_POST['lookingfor']."',
        height          = '".$_POST['height']."',
        bodytype        = '".$_POST['bodytype']."',
        complexion      = '".$_POST['complexion']."',
        weight          = '".$_POST['weight']."',
		physical_status	='".$_POST['physical_status']."',
        diet			='".$_POST['diet']."',
		smoke			='".$_POST['smoke']."',
		drink			='".$_POST['drink']."'
        WHERE id        ='$id'";
		
	

$rs = $db->executeQuery($sql);

header("Location: admin_edit_member.php?id=$id&mess=success");
exit;
?>