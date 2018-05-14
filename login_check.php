<?php
include("includes/application_top.php");

//checking the username with password
if (!isset($_POST['username']) || !isset($_POST['password'])) {

    header("location: login.php");
    exit;
}

$db = new sql_db;
$sql = "select * from hum_registration where (loginid='".$_POST['username']."' OR  emailid='".$_POST['username']."') AND password='".$_POST['password']."' ";

$rs = $db->executeQuery($sql);
if ($num = $db->numRows($rs) > 0) {
    $row = $db->fetchRow($rs);
    $emailid = $row['emailid'];
    $loginid = $row['loginid'];
    $status = $row['status'];
    $firstlogin = $row['firstlogin'];
    if($status == '1' && $firstlogin == '1' ) {
        $_SESSION['sess_user_name'] = $loginid;
        $_SESSION['sess_user_id']   = $row['id'];
        $_SESSION['sess_user_emailid'] = $row['emailid'];
        $_SESSION['sess_full_name'] = $row['name'];
        $query = "update hum_registration set lastloggedin = NOW() where loginid='".$loginid."' AND password='".$_POST['password']."' ";
        $logintime = $db->executeQuery($query);
        header("location: edit_profile.php");
        exit;
    }
    if($status == '0' && $firstlogin == '0' ) {
	header("location: login.php?msg=delete");
        exit;
    }
    header("location: login.php?msg=notactive");
    exit;
}

else {
    header("location: login.php?msg=invalid");
    exit;
}
?>