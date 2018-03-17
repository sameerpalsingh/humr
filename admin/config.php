<?php
date_default_timezone_set ( "Asia/Calcutta" );
if($_SERVER['SERVER_NAME'] == "localhost") {
    $host = "localhost";
    $db_user = "root";
    $db_pass = "";
    $db_name = "humraahi";
}
$link = mysqli_connect($host,$db_user,$db_pass, $db_name);
if (!$link) {
    echo "Unable to connect with mysql server.";
    exit;
}

?>