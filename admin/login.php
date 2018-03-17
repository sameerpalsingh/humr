<?php
session_start();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML><HEAD><TITLE>Login Page</TITLE>
<META http-equiv=Content-Type content="text/html; charset=windows-1252">
<LINK href="images/style_ie.css" type="text/css" rel="stylesheet"> 
<script language="javascript" >
    function checkForm(frm) {
        if(frm.username.value=='') {
            alert("Please enter user name");
            document.frm_login.username.focus();
            return false;
        }
        if(frm.pass.value=='') {
            alert("Please enter Password");
            document.frm_login.pass.focus();
            return false;
        }
        return true;
    }
</script>

</HEAD>
<BODY onLoad="document.frm_login.username.focus();"><!-- MAIN TABLE -->
  <p class="logo">ADMIN PANEL</p>
<TABLE height="100%" cellSpacing=0 cellPadding=0 width="100%" border=0>
  <TBODY>
  <TR>
    <TD vAlign=top height="3%">
      <!-- END HEADER TABLE
		  <?php include("header.php");?>
      <!-- HEADER RULE TABLE -->
	
<TABLE cellSpacing=0 cellPadding=0 width="100%" border=0>
        <TBODY>
        <TR>
          <TD class=header-rule vAlign=top width="100%"><IMG height=2 alt=""
            src="" width=1 border=0></TD></TR></TBODY></TABLE><!-- END HEADER RULE TABLE -->
      <TABLE cellSpacing=0 cellPadding=0 width="100%" border=0>
        <TBODY>
        <TR>
      <TD class=header-rule vAlign=top width="100%"><IMG height=2 alt=""
            src="" width=1 border=0></TD></TR></TBODY></TABLE><!-- END HEADER RULE TABLE --></TD></TR>
  <TR>
    <TD vAlign=top height="95%">
      <DIV class=WindowAlignment>
      <TABLE class=MaxWindowWidth cellSpacing=0 cellPadding=0 width="100%"
      border=0>
        <TBODY>
        <TR>
          <TD height="300" class=Margins>
            <TABLE cellSpacing=0 cellPadding=0 width="100%" border=0>
              <TBODY>
              <TR>
                <TD height="250" class=MainFrame><!-- TITLE BAR -->
                  <TABLE cellSpacing=1 cellPadding=0 width="100%" border=0>
                    <TBODY>
                    <TR>
                      <TD class=TitleBar width="100%">
                        <TABLE cellSpacing=0 cellPadding=0 width="100%" border=0>
                          <TBODY>
                          <TR>
                            <TD class=PageTitle noWrap width="26%">WELCOME TO Humraahi Admin Panel</TD>
                            <TD class=TitleBarText noWrap align=right
                            width="64%">&nbsp;</TD>
                            </TR></TBODY></TABLE></TD></TR>
                    <TR>
                      <TD width="100%"><!-- /TITLE BAR --><!-- ***** -->

                        <TABLE cellSpacing=0 cellPadding=0 width="100%" border=0>
                          <TBODY>
                          <TR>
                            <TD class=MenuBar vAlign=top align=left> 
							 <?php include("top_menu.php");?></TD>
                          </TR></TBODY></TABLE><!-- MENU -->
                        <TABLE cellSpacing=0 cellPadding=0 width="100%" border=0>
                          <TBODY>
                          <TR>
                            <TD class=Panel-B>

                    <FORM action="login_action.php" method="post" onSubmit="return checkForm(this);" name="frm_login">
                              <TABLE cellSpacing=0 cellPadding=0 width="100%" border=0>
                                <TBODY>
                                <TR>

                                <TD width="90%" height="250" class=Panel-C><!-- TOP BUTTONS -->
                                <TABLE cellSpacing=0 cellPadding=0 width="100%"
                                border=0>
                                <TBODY>
                                <TR> </TR></TBODY></TABLE><!-- /TOP BUTTONS -->
                                <TABLE width="100%" height="189"
                                border=0 cellPadding=0 cellSpacing=0>
                                <TBODY>
                                <TR>
                                <TD height="166" align="center" valign="middle" class=Panel-A>
                                  <br>
                                  <br>
                                  <TABLE cellSpacing=0 cellPadding=0 width="50%"
                                border=0>
                                <TBODY>
                                <TR>
                                <TD class=GroupLabel>Please login </TD>
                                </TR></TBODY></TABLE>
                                <TABLE cellSpacing=0 cellPadding=0 width="50%"
                                border=0>
                                <TBODY>
                                <TR>
                                <TD class=TableBorder>
                                <TABLE cellSpacing=0 cellPadding=0 width="100%"
                                border=0>
                                <TBODY>
                                <TR class=TableRow>
                                  <TD align=right class=TableText>&nbsp;</TD>
                                  <TD class=TableText>&nbsp;</TD>
                                </TR>
                                <tr class=TableRow>
                                  <td colspan="2" style="color:red;" align="center">
                                <?php
                                    if(isset($_REQUEST['err']) && $_REQUEST['err'] == 1) {
                                        echo "Invalid Username and Password";
                                    } else if (isset($_REQUEST['err']) && $_REQUEST['err'] == 2) {
                                             echo "Please enter Username and Password";
                                    }
                                 ?>
                                 </td>
                                    </tr>
                                    <tr class=TableRow>
                                        <td colspan="2" align="center">&nbsp;</td>
                                    </tr>
                                <TR class=TableRow>
                                    <TD width="33%" align=right class=TableText><strong>User Name:</strong></TD>
                                    <TD width="67%" class=TableText><input name="username" type="text" id="username" size="25"></TD>
                                </TR>
                                <TR class=TableRow>
                                  <TD align=right class=TableText><strong>Password:</strong></TD>
                                  <TD class=TableText><input name="password" type="password" id="pass" size="25"></TD>
                                </TR>
                              <!--  <TR class=TableRow>
                                <TD class=TableText></TD>
                                <TD align="left" class=TableText><strong><a href="forget_password.php">Forgot Your Password?</a></strong></TD>
                                </TR>-->
                                <TR class=TableRow>
                                <TD class=TableText align=right>&nbsp;</TD>
                                <TD class=TableText>&nbsp;</TD>
                                </TR></TBODY></TABLE></TD></TR></TBODY></TABLE></TD></TR></TBODY></TABLE><!-- BOTTOM BUTTONS -->
                                <TABLE cellSpacing=0 cellPadding=0 width="100%"
                                border=0>
                                <TBODY>
                                <TR>
                                <TD class=Panel-A>
                                <TABLE cellSpacing=0 cellPadding=0 width="100%"
                                border=0>
                                <TBODY>
                                <TR>
                                <TD height="26" align=center><INPUT class=Button onMouseOver="this.className='Button-Focus'" onMouseOut="this.className='Button'" type=submit value="Login" name="btnlogin">
                                </TD></TR></TBODY></TABLE></TD></TR></TBODY></TABLE><!-- /BOTTOM BUTTONS --></TD>
                                </TR></TBODY></TABLE>
</form>


</TD></TR></TBODY></TABLE></TD></TR></TBODY></TABLE></TD></TR></TBODY></TABLE></TD></TR></TBODY></TABLE>
</DIV>
<!-- CUSTOM FOOTER -->
<TR><TD vAlign="bottom" height="2%" width="100%">
<?php include("footer.php"); ?>
</td></TR><!-- CUSTOM FOOTER -->
</TBODY></TABLE>
