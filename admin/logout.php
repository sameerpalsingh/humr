<?php
session_start();
require "config.php";
//$a = mysqli_query($link, "select * from hum_admin where id='".$_SESSION['id']."' and lastloggedin = '0000-00-00 00:00:00' order by id desc limit 0,1");
//$aa = mysqli_fetch_assoc($a);
//$date = date("Y-m-d H:i:s");
//$update_query = "update hum_registration set lastloggedin ='".$date."' where id ='".$aa['id']."'";
//mysqli_query($link, $update_query);
unset($_SESSION);
session_destroy();
header("Location:login.php");
exit;
?>