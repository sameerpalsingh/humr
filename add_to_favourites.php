<?php
include("includes/application_top.php");
$db = new sql_db;
if ($_POST['chkbox'] != "" && $_POST['chkbox'] != "0") {
    
    $chkbox_arr = explode("|", $_POST['chkbox']);
    foreach ($chkbox_arr as $key => $val) {
        if ($val != '0') {
            $sql = "INSERT IGNORE INTO hum_myfavourites (`fav_id`, `by_loginid`) VALUES('".$val."', '".$_SESSION['sess_user_id']."')";
            $rs = $db->executeQuery($sql);
        }
    }
}
echo "done";
?>