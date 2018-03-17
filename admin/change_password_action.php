<?php
include "check_login.php";
include "config.php";

if(isset($_REQUEST['changepass']) && $_REQUEST['changepass'] == "Change Password") { 
    $old_password = $_POST['old_password'];
    $new_password = $_POST['new_password'];
    $new_password2 = $_POST['new_password2'];

if ($new_password != $new_password2) {
    header("Location: change_password.php?message=Password and retype password do not match.");
    exit;
}
/*
 * Authenticate Old Password.
 */

$rs = mysqli_query($link, "SELECT password from hum_admin WHERE id='".$_SESSION['id']."' ");
$row = mysqli_fetch_assoc($rs);

if ($row["password"] != $old_password) {
    // Redirect to change password page.
    header("Location: change_password.php?message=Old Password do not match.");
    exit;
}

/*
 * Change User's Old password with New Password.
 */

$sql = mysqli_query($link, "UPDATE hum_admin SET password = '".$new_password."' WHERE id='".$_SESSION['id']."'");
    header("Location: change_password.php?message=1");
exit;
}
?>

