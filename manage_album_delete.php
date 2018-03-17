<?php
session_start();
include ("includes/application_top.php");
include_once DIR_FS_INCLUDES.'class.upload.php';

$db = new sql_db;

$image = trim($_GET['image']);

// first check whether the image is of same user or not.

$sql_select = "SELECT * FROM hum_members_images WHERE image_name_100_size='".$image."' ";
$rs_select  = $db->executeQuery($sql_select);
if ($db->numRows($rs_select) == 0) {
    header("Location: manage_album.php");
} else {
    $row_select = $db->fetchRow($rs_select);
    if ($row_select["member_id"] == $_SESSION['sess_user_id']) {
        $sql_del = "DELETE FROM hum_members_images WHERE id='".$row_select['id']."' ";
        $db->executeQuery($sql_del);
        header("Location: manage_album.php?message=Your photo is deleted successfully.");        
        // Delete the row.
    } else {
        // do nothing.
        header("Location: manage_album.php");
    }
    
}
?>