<?php
session_start();
include ("includes/application_top.php");
$db = new sql_db; 

if (count($_POST['chkbox']) == 0) {
    header("Location: sent_box.php");
    exit;
}

$messageIds = implode(",", $_POST['chkbox']);

$sql_delete = "UPDATE hum_inbox SET sentby=0 WHERE message_id in (".$messageIds.",0) AND sentby = '".$_SESSION['sess_user_id']."' ";

$db->executeQuery($sql_delete);

header("Location:sent_box.php?deleted=true");
exit;
?>