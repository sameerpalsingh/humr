<?php
session_start();
if(empty($_SESSION['id'])) {
    header("Location: login.php");
    exit;
}
//if(basename($_SERVER['PHP_ SELF'])!= "welcome.php" && isset($_SESSION['id']) && $_SESSION['id'] != 1) {
//    header("Location: welcome.php");
//    exit;
//}
?>