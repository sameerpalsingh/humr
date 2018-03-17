<?php
session_start();
include("includes/application_top.php");
$db = new sql_db;
$id=$_REQUEST['id'];
$date=date("Y-m-d H:i:s");

$select="select id from hum_member_contact where contact_id='".$id."' and contact_by ='".$_SESSION['sess_user_id']."'";
$count = $db->executeQuery($select);
$num_count = $db->numRows($count);
if($num_count > 0 )
{
	header("location:edit_profile.php?err=already sent");
}

else 
{

$sql = "insert into hum_member_contact set contact_id='".$id."' , contact_by ='".$_SESSION['sess_user_id']."' ,       
        contact_date='".$date."', permission=0";

$rs = $db->executeQuery($sql);

header("location:edit_profile.php?mess=sucessfully sent Request");

}
?>

