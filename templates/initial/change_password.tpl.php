<script type="text/javascript">
<!--
    function validatePasswordForm()
    {
        if (document.frmPassword.old_password.value.length < 1) {
            alert("Please enter Old Password.");
            document.frmPassword.old_password.focus();
            return false;
        } else if(document.frmPassword.new_password.value.length < 1) {
            alert("Please enter New Password.");
            document.frmPassword.new_password.focus();
            return false;
        } else if(document.frmPassword.new_password2.value.length < 1) {
            alert("Please retype New Password.");
            document.frmPassword.new_password2.focus();
            return false;
        } else if(document.frmPassword.new_password.value !=document.frmPassword.new_password2.value) {
            alert("Password and retype new password should be same.");
            document.frmPassword.new_password2.focus();
            return false;
        }
        return true;
    }

    function showPasswordMessage()
    {                                
        document.getElementById('passmessagediv').innerHTML = "1-15 characters only."
    }

//-->
</script>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
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
                            <td width="625" colspan="6" align="left" valign="middle"><div align="center"><b class="heading">
                <?php
                if(isset($_GET['message'])) {
                echo $_GET['message'];
                } else {
                $nam=explode(" ",$_SESSION['sess_full_name']);
						$nam1=$nam[0];
						echo ucwords($nam1).", You can change your Password here.";
                }
                ?>
              </b></div></td>
                          </tr>
                        </tbody>
                    </table>
                    <br />
                    <table width="626" border="0">
                          <tbody>

                          </tbody>
                      </table>
                    <table class="box2" cellspacing="2" cellpadding="1" width="623" border="0">

                     <form method="post" action="change_password_submit.php" name="frmPassword" onsubmit="return validatePasswordForm();">
                       <tbody>
                        <tr>
                          <td colspan="5" align="right" class="text3">Old Password</td>
                          <td width="348" align="left" valign="middle"><input name="old_password" type="password" class="box" maxlength="15" /></td>
                        </tr>
                        <tr>
                <script language="JavaScript">
                

                
                </script>
                          <td colspan="5" align="right" valign="middle" class="text3">New Password </td>
                          <td align="left" valign="middle"><input name="new_password" type="password" class="box"  maxlength="15" onclick="showPasswordMessage();"/> <div id="passmessagediv" class="heading" style="display:inline"></div>  </td>
                        </tr>
                        <tr>
                          <td colspan="5" align="right" valign="middle" class="text3">Re-type new Password </td>
                          <td align="left" valign="middle"><input name="new_password2" type="password" class="box" maxlength="15" /></td>
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
                      </form>
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
              </table>