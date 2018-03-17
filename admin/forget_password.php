<?php
//session_start();
include "config.php";
if(isset($_REQUEST) && !empty($_REQUEST['btnlogin'])) {
   // print_r($_REQUEST);
    $emailId = $_REQUEST['emailid'];
    $sql = "select * from tbl_admin where email_id = '".$emailId."'";
    if($query = mysqli_query($link, $sql)) {
        if(mysql_num_rows($query) > 0) {
            $rs = mysqli_fetch_assoc($query);
           // print_r($rs);
            $name = $rs['name'];
            $password = $rs['password'];
            $mailId = $rs['email_id'];
            $to = $mailId;
            $subject = "Your password here";
            $message = "HI $name,

Your password = $password

Thanks
ADMIN ";
            $header = "FROM: admin@wisetime.com \r\n";
            if(@mail($to,$subject,$message,$header)) {
                $err = "2";
            } else {
                $err = "3";
            }
        } else {
            $err = "1";
        }
    } else {
        mysql_error();
        exit;
    }

}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML><HEAD><TITLE>Forget Passowrd</TITLE>
<META http-equiv=Content-Type content="text/html; charset=windows-1252">
<LINK href="images/style_ie.css" type="text/css" rel="stylesheet"> 

<script language="javascript" >
function checkForm() {
    if (document.frm_login.emailid.value.length != 0) {
        if(document.frm_login.emailid.value.indexOf(" ") != -1)    {
            alert("Pls. Enter Correct E-Mail Id without spaces.");
            document.frm_login.emailid.focus();
            return false;
        }
        if(document.frm_login.emailid.value.indexOf("@") == -1)    {
            alert("Invalid E-Mail Id..!");
            document.frm_login.emailid.focus();
            return false;
        }
        //return true;

        validarr = document.frm_login.emailid.value.split("@");
        if(validarr[0].length==0)       {
            alert("Pls. Enter Correct Email Id..! ");
            document.frm_login.emailid.focus();
            return false;
        }
        if(validarr[1].indexOf("@") >=0)       {
            alert("Pls. Enter Correct Email Id..! ");
            document.frm_login.emailid.focus();
            return false;
        }
        if(validarr[1].length==0)       {
            alert("Pls. Enter Correct Email Id..! ");
            document.frm_login.emailid.focus();
            return false;
        }
        if(validarr[1].length != 0)       {

            if(validarr[1].indexOf(".") == -1)         {
                alert("Pls. Enter Correct Email Id..!");
                document.frm_login.emailid.focus();
                return false;
            }
            validemail = validarr[1].split(".");
             if(validemail[0].length==0)           {
                 alert("Pls. Enter Correct Email Id..!");
                 document.frm_login.emailid.focus();
                 return false;
            }
            if(validemail[1].length==0)          {
                alert("Pls. Enter Correct Email Id..!");
                document.frm_login.emailid.focus();
                return false;
            }
        }
    } else {
        alert("Please enter your email Id.");
        return false;
    }
}
</script>

</HEAD>
<BODY onLoad="document.frm_login.email.focus();"><!-- MAIN TABLE -->
<TABLE height="100%" cellSpacing=0 cellPadding=0 width="100%" border=0>
  <TBODY>
  <TR>
    <TD vAlign=top height="3%">
      <!-- END HEADER TABLE -->
		  <?php include("header.php");?>
      <!-- HEADER RULE TABLE -->
<TABLE cellSpacing=0 cellPadding=0 width="100%" border=0>
        <TBODY>
        <TR>
          <TD class=header-rule vAlign=top width="100%"><IMG height=2 alt=""
            src="" width=1 border=0></TD></TR></TBODY></TABLE><!-- END HEADER RULE TABLE --><!-- END HEADER RULE TABLE --><!-- HEADER RULE TABLE -->
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
                        <TABLE cellSpacing=0 cellPadding=0 width="100%"
border=0>
                          <TBODY>
                          <TR>
                            <TD class=PageTitle noWrap width="26%">WISE TIME ADMIN PANEL FORGOT PASSWORD</TD>
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
    <FORM action="" method="post" name="frm_login" onsubmit="return checkForm();">
                              <TABLE cellSpacing=0 cellPadding=0 width="100%"
                              border=0>
                                <TBODY>
                                <TR>

                                <TD width="90%" height="250" class=Panel-C><!-- TOP BUTTONS -->
                                <TABLE cellSpacing=0 cellPadding=0 width="100%"
                                border=0>
                                <TBODY>
                                <TR> </TR></TBODY></TABLE><!-- /TOP BUTTONS -->
                                <TABLE width="100%" height="140"
                                border=0 cellPadding=0 cellSpacing=0>
                                <TBODY>
                                <TR>
                                <TD height="100" align="center" valign="middle" class=Panel-A>
                                  <br>
                                  <br>
                                  <TABLE cellSpacing=0 cellPadding=0 width="50%"
                                border=0>
                                <TBODY>
                                <TR>
                                <TD class=GroupLabel>Please Enter Your Email Id. </TD>
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
                                    if (isset($err) && $err == 1) {
                                        echo "Invalid Username and Password";
                                    }
                                    if (isset($err) && $err == 2) {
                                        echo "Password sent to your email.";
                                    }
                                    if (isset($err) && $err == 3) {
                                        echo "Unable to send Password.";
                                    }
                                 ?>
                                 </td>
                                    </tr>
                                    <tr class=TableRow>
                                        <td colspan="2" align="center">&nbsp;</td>
                                    </tr>
                                <TR class=TableRow>
                                <TD width="33%" align=right class=TableText><strong>Email Id : </strong></TD>
                                <TD width="67%" class=TableText><input name="emailid" type="text" id="emailid" size="25"></TD>
                                </TR>
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
                                <TD height="10" align=center><INPUT class=Button onMouseOver="this.className='Button-Focus'" onMouseOut="this.className='Button'" type=submit value="Submit" name="btnlogin">
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
