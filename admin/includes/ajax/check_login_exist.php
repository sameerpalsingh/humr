<?php
header('content-type: text/xml');
include '../application_top.php';

$db = new sql_db;
$username = $_REQUEST['username'];
if (isLoginidExist($username, $db) == true) {
    $message = 'Username already exists.';
} else {
    $message = '';
}
$xml = "<?xml version=\"1.0\"?>\n";
    $xml.= "<result>\n";
        $xml.= "<message>".$message."</message>\n";
    $xml.= "</result>\n";
echo $xml;
?>