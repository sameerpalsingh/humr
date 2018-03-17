<?php
session_start();
session_unset("sess_user_id");
session_destroy();
header("location: login.php?msg=logout");
?>