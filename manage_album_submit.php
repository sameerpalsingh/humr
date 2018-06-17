<?php
include ("includes/application_top.php");
include_once DIR_FS_INCLUDES.'class.upload.php';

$db = new sql_db;

$upload = new Upload($_FILES['fimage']);

if ($upload->token == false) {
    header("Location: manage_album.php?type=error&message=".$upload->message." ");
    exit;
}

$sql = "INSERT INTO hum_members_images
        (image_name_100_size, image_name_500_size , image_name_original_size, member_id) 
        VALUES( '".addslashes($upload->size100FileName)."', '".addslashes($upload->size500FileName)."', '".addslashes($upload->sizeOriginalFileName)."', '".$_SESSION['sess_user_id']."')";
$db->executeQuery($sql);

// Redirect to manage album page page.
header("Location: manage_album.php?type=success&message=Your photo is uploaded successfully.");
exit;

?>