<?php

if(!isset($_SESSION["sess_user_id"]) && basename($_SERVER["PHP_SELF"])!="index.php")
{
    header("Location: ".DIR_HOST.DIR_WS_ROOT."index.php");
    exit;
}

?>