<?php
include("includes/application_top.php");

//checking user loggedin..
if (!isset($_SESSION['sess_user_id'])) {
    header("location: login.php");
    exit;
}

$db = new sql_db;

$contact_id = filter_input(INPUT_POST, 'user', FILTER_VALIDATE_INT, array('options'=>array('default'=>0, 'min_range'=>1, 'max_range'=>9999999999)) );

$contact_by = $_SESSION['sess_user_id'];

$date = date("Y-m-d H:i:s");

$select="select id from hum_member_contact where contact_id='".$contact_id."' and contact_by ='".$contact_by."'";

$recordset = $db->executeQuery($select);

$num_count = $db->numRows($recordset);

if($num_count > 0) {
    echo "warning|alreadycontacted";
    exit;
} else {
    $sql = "insert into hum_member_contact set contact_id='".$contact_id."' , contact_by ='".$contact_by."' ,       
            contact_date=NOW(), permission=0";
    $rs = $db->executeQuery($sql);
    echo "success|interestexpressed";
    exit;
}
?>

