<?php
include("includes/application_top.php");
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
        <td width="223" height="537" valign="top"><?php include(DIR_FS_INCLUDES."left.inc.php"); ?></td>
        <td valign="top"><?php include(DIR_FS_INCLUDES."header.inc.php"); ?>
          <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td>&nbsp;</td>
                <td valign="top">&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td width="30">&nbsp;</td>
                <td valign="top"><?php include(DIR_FS_TEMPLATES."invite_friends.tpl.php");?></td>
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
          </table></td></tr>
    </table></td>
  </tr>
<?php include(DIR_FS_TEMPLATES."footer.tpl.php"); ?>
</table>
<script language="JavaScript">
function validatemailbox() {
    if(document.frmMailBox.friendsemails.value == '' ){
        alert("Please enter friends emails.");
        document.frmMailBox.friendsemails.focus();
        return false;
    }
    if(document.frmMailBox.message.value == '' ){
        alert("Please enter message.");
        document.frmMailBox.message.focus();
        return false;
    }

    return true;

}
</script>    
</body>
</html>
