<?php
session_start();
include ("includes/application_top.php");

if (count($_POST['chkbox']) == 0) {
    header("Location: my_favourites.php");
    exit;
}

$db = new sql_db;

$favProfiles = implode(",", $_POST['chkbox']);

$sql_delete = "DELETE FROM hum_myfavourites WHERE fav_id in (".$favProfiles.") AND by_loginid = '".$_SESSION['sess_user_id']."' ";

$db->executeQuery($sql_delete);

header("Location: my_favourites.php?deleted=true");
exit;
?>