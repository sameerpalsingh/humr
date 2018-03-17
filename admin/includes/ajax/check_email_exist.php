<?php
header('content-type: text/xml');
include 'c:/xampp/htdocs/humraahi/includes/application_top.php';
include DIR_FS_INCLUDES.'functions.php';
$db = new sql_db;
$username = $_REQUEST['emailid'];
if (isEmailExist($emailid, $db) == true) {
    $message = 'This emailid is already registered with us.';
} else {
    $message = '';
}
$xml = "<?xml version=\"1.0\"?>\n";
    $xml.= "<result>\n";
        $xml.= "<message>".$message."</message>\n";
    $xml.= "</result>\n";
echo $xml;
?>