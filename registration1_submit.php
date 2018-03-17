<?php
date_default_timezone_set("Asia/Kolkata");

include_once("includes/application_top.php");
include_once DIR_FS_INCLUDES.'class.upload.php';

$db = new sql_db;

$highestdegree=$_REQUEST['highestdegree'];
$workarea=$_REQUEST['workarea'];
$annualincome=$_REQUEST['annualincome'];
$physical_status=$_REQUEST['physical_status'];
$diet=$_REQUEST['diet'];
$smoke=$_REQUEST['smoke'];
$drink=$_REQUEST['drink'];
$bodytype=$_REQUEST['bodytype'];
$complexion=$_REQUEST['complexion'];
$weight=$_REQUEST['weight'];
$about_yourself=$_REQUEST['about_yourself'];
$upload = new Upload($_FILES['fimage']);

$sql="update hum_registration set
highestdegree	='".$highestdegree."',
workarea		='".$workarea."',
annualincome	='".$annualincome."',
physical_status	='".$physical_status."',
diet			='".$diet."',
smoke			='".$smoke."',
drink			='".$drink."',
bodytype		='".$bodytype."',
complexion		='".$complexion."',
weight			='".$weight."',
aboutyourself	='".$about_yourself."',
pic='".addslashes($upload->size100FileName)."'
where id=".$_SESSION['sess_user_id'];

$rs = $db->executeQuery($sql);

$userId = $db->insertId($rs);

$query = "INSERT INTO hum_members_images
        (image_name_100_size, image_name_500_size , image_name_original_size, member_id) 
        VALUES( '".addslashes($upload->size100FileName)."', '".addslashes($upload->size500FileName)."', '".addslashes($upload->sizeOriginalFileName)."', '".$_SESSION['sess_user_id']."')";
$db->executeQuery($query);
header("Location: profile.php");
?>