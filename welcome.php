<?php
header("Location: quick_search.php");
exit;
session_start();
include("includes/application_top.php");

//checking the username with password
if (!isset($_SESSION['sess_user_id'])) {
    header("location: login.php");
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
                <td valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td width="24" height="25">&nbsp;</td>
                    <td  >&nbsp;</td>
                    <td width="25" align="right">&nbsp;</td>
                  </tr>
                  <tr>
                    <td width="24" >&nbsp;</td>
                    <td><div align="center">
                      <table class="box2" cellspacing="2" cellpadding="1" width="623" border="0">
                          <tbody>
                            <tr>
                              <td width="625" colspan="6" align="left" valign="middle"><div align="center"><b class="heading">Welcome <?php echo $_SESSION['sess_full_name'];?>!! to HumRaahi.Com</b></div></td>
                            </tr>
                          </tbody>
                      </table>
                      <br />
                      <table class="box2" cellspacing="2" cellpadding="1" width="626" border="0">
                            <tbody>
                              <tr height="140">
                                <td valign="top" align="justify" width="69%" bgcolor="#e8e4d9"><div align="justify"><font
            style="FONT-SIZE: 11px; COLOR: black; FONT-FAMILY: verdana">Hi All, This site i found very usefull and comparable to all other sites who claims to be free matrimonial site but at last they comes to their motive that is money here what i found is free means free totally free. i liked this site. It solved out the real purpose of Free Matrimonial Site.</font></div></td>
                              </tr>
                            </tbody>
                        </table>
                      <table width="626" border="0">
                            <tbody>
                              <tr>
                                <td></td>
                                <td width="200">&nbsp;</td>
                                <td width="200">&nbsp;</td>
                              </tr>
                            </tbody>
                        </table>
                    </div>
                      <p>&nbsp;</p></td>
                    <td width="24" >&nbsp;</td>
                  </tr>
                  <tr>
                    <td width="24" height="25">&nbsp;</td>
                    <td height="24" >&nbsp;</td>
                    <td width="25">&nbsp;</td>
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
          </table></td></tr>
    </table></td>
  </tr>
<?php include(DIR_FS_TEMPLATES."footer.tpl.php"); ?>
</table>
</body>
</html>
