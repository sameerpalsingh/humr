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
                              <td width="625" colspan="6" align="left" valign="middle"><div align="center"><b class="heading"><?php $nam=explode(" ",$_SESSION['sess_full_name']);
						$nam1=$nam[0];
						echo ucwords($nam1);?>, You can search any profile by his/her username.</b></div></td>
                            </tr>
                          </tbody>
                      </table>
              <br />
                      <table width="626" border="0">
                            <tbody>

                          </tbody>
                        </table>
              <form method="post" name="frm_check" action="search_by_id_submit.php">
                      <table class="box2" cellspacing="2" cellpadding="1" width="623" border="0">
                        <tbody>
                        <?php
                         if (isset($_REQUEST['err'])) {?>
                          <tr>
                            <td colspan=2 class="heading" align=center> Sorry you can't search for your own profile.</td>
                          </tr>
                         <?php
                          }
                          ?>


						<?php
						if (isset($_REQUEST['msg'])) {?>
                         <tr>
                         <td colspan=2 class="heading" align=center> This profile does not exist.</td>
                         </tr>
						<?php
						 }
                         ?>

                          <tr>
                            <td align="right" class="text3">Enter Username</td>
                            <td width="348" align="left" valign="middle"><input name="profilename" type="text" class="box" maxlength="50" /></td>
                          </tr>
                          <tr>
                            <td align="right" valign="middle" class="text3"><font class="text" face="arial" size="2">&nbsp;
                            </font></td>
                            <td align="left" valign="middle"><span class="text3"><font class="text" face="arial" size="2">
                            <input type="image" src="images/search.jpg" title="Click To Search" alt="" width="76" height="22" onclick="return check();" border="0" />
                            </font></span></td>
                           </tr>
                        </tbody>
                      </table>
              </form>
<script type="text/javascript">
	function check()
	{
		if(document.frm_check.profilename.value=="")
		{
			alert("Please enter UserId.");
			document.frm_check.profilename.focus();
			return false;
		}
		return true;
	}
</script>
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
