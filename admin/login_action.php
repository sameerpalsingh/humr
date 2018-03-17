<?php
session_start();
include "config.php";
if(isset($_REQUEST['username']) && $_REQUEST['username']) {

    $user_name = trim($_REQUEST['username']);
    $password = trim($_REQUEST['password']);
    $sql = "SELECT * FROM hum_admin where username='$user_name' and password='$password' ";
    if (!$rs = mysqli_query($link, $sql)) {
        echo mysqli_error($link);
        exit;
    }
    $num = mysqli_num_rows($rs); // total records came from query.
    if ($num > 0) {
        $row = mysqli_fetch_array($rs);
        $_SESSION['id'] = $row['id'];
        $_SESSION['user_name'] = $row['user_name'];
        header("Location: welcome.php");
        exit;
    }
    header("Location: login.php?err=1");
    exit;
} else {        
    header("Location: login.php?err=2");
    exit;
}
?>