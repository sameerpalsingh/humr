<?php
include("includes/application_top.php");
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
                    <td><h3 class="page_heading">Search by User ID</h3></td>
                    <td width="25" align="right">&nbsp;</td>
                  </tr>
                  <tr>
                    <td width="24" >&nbsp;</td>
                    <td><div align="center">
         
              <br />
                      <table width="626" border="0">
                            <tbody>

                          </tbody>
                        </table>
              <form method="post" name="frm_check" action="search_by_id_submit.php">
<?php
                         if (isset($_REQUEST['err'])) {?>
  <div class="alert alert-danger alert-dismissible fade in">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Error</strong> Unable to find this user, please search another user.
  </div>                                
                         <?php
                          }
			  if (isset($_REQUEST['msg'])) {?>
  <div class="alert alert-warning alert-dismissible fade in">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Info</strong> This user does not exist.
  </div>                    
			  <?php } ?>
                         
                      <table class="table table-bordered" >
                        <tbody>
                          <tr>
                            <td align="right" class="text3">Enter User ID</td>
                            <td align="left" valign="middle"><input name="profilename" type="text" class="box" maxlength="50" /></td>
                          </tr>
                          <tr>
                            <td align="right" valign="middle" class="text3"><font class="text" face="arial" size="2">&nbsp;
                            </font></td>
                            <td align="left" valign="middle">
                                <span class="text3">
                                <button type="submit" class="btn btn-danger" onclick="return check();">Search</button>
                                </span>
                            </td>
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
                 
                </table></td>
                <td width="30">&nbsp;</td>
              </tr>
              
          </table></td></tr>
    </table></td>
  </tr>
<?php include(DIR_FS_TEMPLATES."footer.tpl.php"); ?>
</table>
</body>
</html>
