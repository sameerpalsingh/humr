<?php
session_start();
include ("includes/application_top.php");
if (!isset($_SESSION['sess_user_id'])) {
    header("location: login.php");
    exit;
}

$db = new sql_db;

$old_password = trim($_POST['old_password']);
$new_password = trim($_POST['new_password']);
$new_password2 = trim($_POST['new_password2']);

if ($new_password != $new_password2) {
    //header("Location: change_password.php?message=Password and retype password do not match.");
    header("Location: change_password.php?error=1");
    exit;
}

/*
 * Authenticate Old Password.
 */
$sql = "SELECT password from hum_registration WHERE id='".$_SESSION['sess_user_id']."' ";
$rs = $db->executeQuery($sql);
$row = $db->fetchRow($rs);

if ($row["password"] != $old_password) {
    //header("Location: change_password.php?message=Old Password do not match.");
    header("Location: change_password.php?error=2");
    exit;
}

/*
 * Change User's Old password with New Password.
 */
$sql = "UPDATE hum_registration SET password = '".$new_password."' WHERE id=".$_SESSION['sess_user_id'];
$rs = $db->executeQuery($sql);

//header("Location: change_password.php?message=Your password is changed successfully.");
header("Location: change_password.php?error=3");
exit;
?>