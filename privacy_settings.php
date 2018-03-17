<?php
include("includes/application_top.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title><?php echo SITE_TITLE;?></title>
<link href="templates/initial/style.css" rel="stylesheet" type="text/css" />
</head>

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
                              <td width="625" colspan="6" align="left" valign="middle"><div align="center"><b class="heading"><?php echo $_SESSION['sess_full_name'];?>, You can change your Password here.</b></div></td>
                            </tr>
                          </tbody>
                      </table>
                      <br />
                      <table width="626" border="0">
                            <tbody>

                          </tbody>
                        </table>
                      <table class="box2" cellspacing="2" cellpadding="1" width="623" border="0">
                        <tbody>
                          <tr>
                            <td colspan="5" align="right" class="text3">Old Password</td>
                            <td width="348" align="left" valign="middle"><input name="city" type="password" class="box" value="Delhi" maxlength="50" /></td>
                          </tr>
                          <tr>
                            <td colspan="5" align="right" valign="middle" class="text3">New Password </td>
                            <td align="left" valign="middle"><input name="city" type="password" class="box" value="Delhi" maxlength="50" /></td>
                          </tr>
                          <tr>
                            <td colspan="5" align="right" valign="middle" class="text3">Re-type new Password </td>
                            <td align="left" valign="middle"><input name="city" type="password" class="box" value="Delhi" maxlength="50" /></td>
                          </tr>
                          <tr>
                            <td colspan="5" align="right" valign="middle" class="text3"><font class="text" face="arial" size="2">&nbsp;
                            </font></td>
                            <td align="left" valign="middle"><span class="text3"><font class="text" face="arial" size="2">
                              <input type="image"
            src="images/submit.gif"
            alt="Click To Update" width="76" height="22"
            border="0" />
                            </font></span></td>
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
