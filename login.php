<?php
include "includes/application_top.php";

if (isset($_SESSION["sess_user_id"])) {
     header("location: welcome.php");
    //echo "<meta http-equiv=refresh content='1; url=edit_profile.php'>";
    exit;
}
include_once 'header.php';
?>
<body>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
       <td width="223" valign="top"><?php include(DIR_FS_INCLUDES."left.inc.php"); ?></td>
        <td valign="top"><?php include(DIR_FS_INCLUDES."header.inc.php"); ?>
          <table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td>&nbsp;</td>
              <td valign="top">&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td width="30">&nbsp;</td>
              <td valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td width="24" height="25"><img src="images/box1.gif" alt="" width="25" height="25" /></td>
                  <td  style="border-top:1px solid #676666">&nbsp;</td>
                  <td width="25" align="right"><img src="images/box2.gif" alt="" width="25" height="25" /></td>
                </tr>
                <tr>
                  <td width="24" style="border-left:1px solid #676666">&nbsp;</td>
                  <td> <?php include(DIR_FS_TEMPLATES."login_content.tpl.php"); ?> </td>
                  <td width="24" style="border-right:1px solid #676666">&nbsp;</td>
                </tr>
                <tr>
                  <td width="24" height="25"><img src="images/box3.gif" alt="" width="25" height="25" /></td>
                  <td height="24" style="border-bottom:1px solid #676666">&nbsp;</td>
                  <td width="25"><img src="images/box4.gif" alt="" width="25" height="25" /></td>
                </tr>
              </table></td>
              <td width="30">&nbsp;</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td valign="top">&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td valign="top">&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
          </table></td>
      </tr>
      <tr>
        <td valign="top">&nbsp;</td>
        <td valign="top">&nbsp;</td>
      </tr>
      <tr>
        <td valign="top">&nbsp;</td>
        <td valign="top">&nbsp;</td>
      </tr>
      <tr>
        <td valign="top">&nbsp;</td>
        <td valign="top">&nbsp;</td>
      </tr>
    </table></td>
  </tr>
<?php include(DIR_FS_TEMPLATES."footer.tpl.php"); ?>
</table>
</body>
</html>
