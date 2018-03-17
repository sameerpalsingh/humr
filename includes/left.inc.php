<?php
/*     ______________________________________________________
    /пппппппппппппппппппппппппппппппппппппппппппппппппппппп\
    |     COMMON FUNCTION FOR IMPLEMENTATION OF AJAX       |
    |                                                      |
    |            Developed By : Sameer Pal Singh               |
    |            Created on   : 8/7/2006 3:58 PM               |
    |                                                       |
    |            E-mail me :                                |
    |                - 'sameers@e-lixirweb.com'               |
    |                                                      |
    \______________________________________________________/
     пппппппппппппппппппппппппппппппппппппппппппппппппппппп
*/

if(isset($_SESSION["sess_user_id"]) && $_SESSION["sess_user_id"]!="" )
{
    include(DIR_FS_TEMPLATES."wl_left.tpl.php");
}else 
{
    include(DIR_FS_TEMPLATES."left.tpl.php");
}
?>