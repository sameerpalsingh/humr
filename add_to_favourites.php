<?php
ob_start();
session_start();
include("includes/application_top.php");
$db = new sql_db;

if (count($_POST['chkbox']) > 0) {
    foreach ($_POST['chkbox'] as $key => $val) {
        $sql = "INSERT INTO hum_myfavourites (`fav_id`, `by_loginid`) VALUES('".$val."', '".$_SESSION['sess_user_id']."')";
	   //die;
        $rs = $db->executeQuery($sql);
    }
}
header("Location: quick_search.php?mess=added");
//exit;
ob_end_flush();
?>