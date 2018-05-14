<?php
include("includes/application_top.php");
include_once("header.php");
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
                    <td><div align="center">
                      <table class="box2" cellspacing="2" cellpadding="1" width="85%" border="0">
                          <tbody>
                            <tr>
                              <td width="85%" colspan="6" align="left" valign="middle"><div align="center"><b class="heading">
                              <?php
                              if (isset($_GET['message']) && $_GET['message'] == "mailsuccess") {
                                echo "Thanks for contacting us. We will get back to you shortly.";
                              } else {
                                echo "Fill form to contact us.";
                              }
                              ?>
                              </b></div></td>
                            </tr>
                          </tbody>
                      </table>
                      <br />
                      <form method="post" action="contact_us_submit.php" name="frmContactUs" onsubmit="return validateContactUs();">
                      <table class="box2" cellspacing="2" cellpadding="1" width="85%" border="0">
                            <tbody>
                              <tr>
                                <td align="right" width="40%" class="content"> Name : </td>
                                <td align="justify" width="60%"> <input type="text" name="name" value="" size="30"> </td>
                              </tr>
                              <tr>
                                <td align="right" width="40%" class="content"> Email address : </td>
                                <td align="justify" width="60%"> <input type="text" name="emailaddress" value="" size="30"> </td>
                              </tr>
                              <tr>
                                <td align="right" width="40%" class="content"> Phone (Resi./Off.) : </td>
                                <td align="justify" width="60%"> <input type="text" name="phone" value="" size="30"> </td>
                              </tr>
                              <tr>
                                <td align="right" width="40%" class="content"> Mobile : </td>
                                <td align="justify" width="60%"> <input type="text" name="mobile" value="" size="30"> </td>
                              </tr>
                              <tr>
                                <td align="right" width="40%" class="content"> Message : </td>
                                <td align="justify" width="60%"><textarea name="message" rows="5" cols="30"></textarea></td>
                              </tr>
                              <tr>
                                <td colspan="2" align="center"><input type="submit" value="&nbsp;Submit&nbsp;"></td>
                              </tr>
                            </tbody>
                        </table>
                      </form>
                    </div>
                    </td>
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
          </table></td></tr>
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
<script language="JavaScript">
function validateContactUs() {
    if (document.frmContactUs.name.value == "") {
        alert("Please enter your name.");
        document.frmContactUs.name.focus();
        return false;
    } else if (document.frmContactUs.emailaddress.value == "") {
        alert("Please enter your email address.");
        document.frmContactUs.emailaddress.focus();
        return false;
    } else if (document.frmContactUs.emailaddress.value.length != 0) {

        if(document.frmContactUs.emailaddress.value.indexOf(" ") != -1) {
            alert("Please enter correct email address without spaces.");
            document.frmContactUs.emailaddress.focus();
            return false;
        }
        if(document.frmContactUs.emailaddress.value.indexOf("@") == -1) {
            alert("Please enter correct email address.");
            document.frmContactUs.emailaddress.focus();
            return false;
        }

        validarr = document.frmContactUs.emailaddress.value.split("@");
        if(validarr[0].length==0) {
            alert("Please enter correct email address.");
            document.frmContactUs.emailaddress.focus();
            return false;
        }
        if(validarr[1].indexOf("@") >=0) {
            alert("Please enter correct email address.");
            document.frmContactUs.emailaddress.focus();
            return false;
        }
        if(validarr[1].length==0) {
            alert("Please enter correct email address.");
            document.frmContactUs.emailaddress.focus();
            return false;
        }
        if(validarr[1].length != 0) {

            if(validarr[1].indexOf(".") == -1) {
                alert("Please enter correct email address.");
                document.frmContactUs.emailaddress.focus();
                return false;
            }
            validemail = validarr[1].split(".");
             if(validemail[0].length==0) {
                alert("Please enter correct email address.");
                document.frmContactUs.emailaddress.focus();
                return false;
            }
            if(validemail[1].length==0) {
                alert("Please enter correct email address.");
                document.frmContactUs.emailaddress.focus();
                return false;
            }
        }
    }
    if (document.frmContactUs.phone.value == "") {
        alert("Please enter phone number.");
        document.frmContactUs.phone.focus();
        return false;
    } else if (document.frmContactUs.mobile.value == "" || document.frmContactUs.mobile.value.indexOf(' ') != -1) {
        alert("Please enter mobile number.");
        document.frmContactUs.mobile.focus();
        return false;
    } else if (document.frmContactUs.message.value == "") {
        alert("Please enter your message.");
        document.frmContactUs.message.focus();
        return false;
    }


}
</script>

</body>
</html>
