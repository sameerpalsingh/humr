<?php
if(isset($_SESSION["sess_user_id"]) && $_SESSION["sess_user_id"]!="" )
{
    include(DIR_FS_TEMPLATES."wl_header.tpl.php");
}else 
{
    include(DIR_FS_TEMPLATES."header.tpl.php");
}
?>