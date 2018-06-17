<?php
session_start();
include ("includes/application_top.php");

$db = new sql_db;

$image = addslashes(trim($_GET['image']));

// first check whether the image is of same user or not.
$sql_select = "SELECT * FROM hum_members_images
               WHERE image_name_100_size='".$image."' ";
$rs_select  = $db->executeQuery($sql_select);
if ($db->numRows($rs_select) == 0) {
    header("Location: manage_album.php");
} else {
    $row_select = $db->fetchRow($rs_select);
    if ($row_select["member_id"] == $_SESSION['sess_user_id']) {
        $sql_update = "UPDATE hum_registration
                       SET pic='".$row_select['id']."'
                       WHERE id='".$row_select['member_id']."' ";
        $db->executeQuery($sql_update);
        $message = "Selected Photo is set as your default photo in profile.";
        header("Location: manage_album.php?type=success&message=$message");
    } else {
        // do nothing.
        header("Location: manage_album.php");
    }

}
?>
