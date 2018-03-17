<?php
session_start();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML><HEAD><TITLE>Change Password</TITLE>
<script>
	function checkform(frm)
	{
		if(frm.old_password.value=="") 
		{
			alert("Type your old password.");
			frm.old_password.focus();
			return false;
		}
		if(frm.new_password.value=="") 
		{
			alert("Type new password.");
			frm.new_password.focus();
			return false;
		}
		if(frm.new_password2.value=="") 
		{
			alert("Retype new password.");
			frm.new_password2.focus();
			return false;
		}
		if(frm.new_password.value!=frm.new_password2.value)
		{
			alert("New Password and retyped new password do not match.");
			frm.new_password.focus();
			return false;			
		}
		return true;
	} 
</script>

<META http-equiv=Content-Type content="text/html; charset=windows-1252">
<LINK href="htmlarea/style_ie.css" type=text/css rel=stylesheet>
<LINK href="htmlarea/style_ie.css" type=text/css rel=stylesheet>
<style type="text/css">
<!--
.style1 {font-weight: bold}
-->
</style></HEAD>
<BODY><!-- MAIN TABLE -->
<TABLE height="100%" cellSpacing=0 cellPadding=0 width="100%" border=0>
  <TBODY>
  <TR>
    <TD vAlign=top height="3%"><!-- HEADER TABLE --><!-- HEADER TABLE -->
      <!-- END HEADER TABLE -->
	 <!-- <? include("header.php"); ?>-->
	  <!-- #include file="header.asp" -->
      <!-- HEADER RULE TABLE -->
<TABLE cellSpacing=0 cellPadding=0 width="100%" border=0>
        <TBODY>
        <TR>
          <TD class=header-rule vAlign=top width="100%"><IMG height=2 alt=""
            src="images/1t.gif" width=1 border=0></TD></TR></TBODY></TABLE><!-- END HEADER RULE TABLE --><!-- END HEADER RULE TABLE --><!-- HEADER RULE TABLE -->
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
          <TD class=Margins>
            <TABLE cellSpacing=0 cellPadding=0 width="100%" border=0>
              <TBODY>
              <TR>
                <TD class=MainFrame><!-- TITLE BAR -->
                  <TABLE cellSpacing=1 cellPadding=0 width="100%" border=0>
                    <TBODY>
                    <TR>
                      <TD class=TitleBar width="100%"><? require("top_panel.php"); ?>
					  <!-- #include file="top_panel.asp" --></TD>
                    </TR>
                    <TR>
                      <TD width="100%"><!-- /TITLE BAR -->
                        <TABLE cellSpacing=0 cellPadding=0 width="100%"
border=0>
                          <TBODY>
                          <TR>
                            <TD class=MenuBar vAlign=top align=left>
							<? include("top_menu.php"); ?></TD>
                          </TR></TBODY></TABLE><!-- MENU -->

                        <TABLE cellSpacing=0 cellPadding=0 width="100%" border=0>
                          <TBODY>
                          <TR>
                            <TD class=Panel-B>
                              <TABLE cellSpacing=0 cellPadding=0 width="100%"
                              border=0>
                                <TBODY>
                                <TR>
                                <TD class=VMenuBar vAlign=top width="10%">								<!-- CUSTOM ADMIN MENU -->
                                <? include("left_menu.php"); ?>
								<!-- #include file="left_menu.asp" -->
								<!-- CUSTOM ADMIN MENU  --></TD>
                                <TD class=Panel-A>&nbsp;</TD>
                                <TD class=Panel-C width="90%">
<form action="change_password_action.php" method="post" onSubmit="return checkform(this);" name="frm_change_password">
                        <TABLE cellSpacing=0 cellPadding=0 width="100%" border=0>
                                      <TR>
                                        <TD class=Buttonbar>
                                        <TABLE width="100%" border="0" cellPadding=0 cellSpacing=0>
                                              <TR vAlign=center>
                                                <TD width="14%" height="6" class=ButtonbarButton >
												Change Password</TD>
                                                <TD width="87%" height="6" align="center" class=MenuSeparator>
												<?php if(isset($_REQUEST['message']) && $_REQUEST['message'] == 1) { ?>
                                    <span class="AlertBars" style="font-size:15;"><?php echo "Password change successfully .";?> </span>
                                   <?php } ?>
                                                                                                   </TD>
                                              </TR>
                                        </TABLE></TD>
                                      </TR>
                                  </TABLE>
                                <TABLE cellSpacing=0 cellPadding=0 width="100%" border=0>
                                <TR>
                                <TD class=Panel-A>
                                <TABLE cellSpacing=0 cellPadding=0 width="100%" border=0>
                                <TR>
                                <TD height="28" class="GroupLabel" align="center" style="font-size:15px;">Change Password</TD>
                                </TR></TABLE>
                                <TABLE cellSpacing=0 cellPadding=0 width="100%" border=0>
                                <TR>
                                <TD  class=TableBorder>
                                <TABLE cellSpacing=0 cellPadding=0 width="100%" border=0>
                                
								<tr>
                                                                  <td colspan="2" height="20"></td>
                                                                 </tr>
													<tr>
                                                        <td width="38%" align=right  class="homtxt style1"><font style="margin-right:10px;" color=#ff0000></font></td>
                                                      </tr>
                                                      
                                                      <tr class="homtxt">
                                                         <td align="center">
                                                        <table cellspacing=0 cellpadding=0 border=0>

                                                             <tr>
                                                               <td><b>Old Password : </b></td>
										<td><input type="password" id="password_org" name="old_password">
																&nbsp;<span class="homtxt style1"><font color=#ff0000>*</font></span></td> </tr>
                                                                 <tr>
                                                                  <td colspan="2" height="10"></td>
                                                                 </tr>

															  <tr>
                                                                  <td><b>New Password : </b></td>
										<td><input type="password" id="password_new" name="new_password">
																&nbsp;<span class="homtxt style1"><font color=#ff0000>*</font></span></td></tr>
                                                                 <tr>
                                                                  <td colspan="2" height="10"></td>
                                                                 </tr>
									   <tr>
                                            <td><b>Retype New Password :&nbsp;&nbsp;&nbsp;&nbsp; </b></td>
											<td><input type="password" id="password_new_copy" name="new_password2">
			  							&nbsp;<span class="homtxt style1"><font color=#ff0000>*</font></span> </td></tr>

									<tr>
													<td height="25"></td></tr>
													<tr><td colspan="2" align="center" >
										<input class=Button onmouseover="this.className='Button-Focus'" onmouseout="this.className='Button'" type="submit" value="Change Password" id="changepass" name="changepass"></td>
                                     </tr>
                                                         </table></td>
                                                      </tr>
                                              													  <tr>
										         <td align="center"><table cellspacing=0 cellpadding=0 border=0>
                                                 <tbody>
                                                 <tr>
                                                    <td class="Label" valign="top">
                                            
                                            <!-- <input name="btnSubmit" type="submit" class="Button" onMouseOver="this.className='Button-Focus'" onMouseOut="this.className='Button'" value="SUBMIT">-->
                                           
                                                  
                                                      </td>
													  </tr>
													  <tr>
                                              <td colspan="2" height="15"></td>
                                              </tr>
                                                    </tbody>
                                                </table>
                                                 </td>
													  </tr>
                                                
                                                    </tbody>
                                                </table>
                                </TR>
									
                        </TABLE></TD></TR>


                                </TABLE>
                                
                                          <!--  <INPUT name="delete" class="Button"  onmouseout="this.className='Button'" type="submit" value="Delete Selected"  onmouseover="this.className='Button-Focus'"
                                            onClick="return setDelete('<?php echo $cc;?>');"  >-->
                                            <!--
                                            onclick="javascript: if (confirm('Are you sure?'))window.open('logout.php','_self');"-->
                                        



								</form>



								  <!-- BOTTOM BUTTONS -->
                                  <!-- /BOTTOM BUTTONS --></TD>
                                </TR></TABLE></TD></TR></TABLE></TD></TR></TABLE><!-- PAGE SCRIPT -->

<!-- /PAGE SCRIPT --><!-- /***** --></TD></TR></TABLE>
</TD></TR></TABLE>
</DIV>
<!-- CUSTOM FOOTER -->
<TR><TD vAlign="bottom" height="2%" width="100%">
<? include("footer.php"); ?>
<!-- #include file="footer.asp" -->
</td></TR><!-- CUSTOM FOOTER -->
</TABLE>
<script type="text/javascript">
function check_form()
	{
        var projectname = document.projectfrm.project_name.value;
        projectname = projectname.trim();
		if (projectname == '') {
			alert("Please enter project name.");
			document.projectfrm.project_name.focus();
			return false;
		} var name = /^[A-Za-z ]+$/;
		 if(!name.test(document.projectfrm.project_name.value)){
        alert ("Please enter the correct project name !!");
        document.projectfrm.project_name.focus();
        return false;
        }  
        var clientname = document.projectfrm.client_name.value;
        clientname = clientname.trim();
        if (clientname == '') {
			alert("Please enter client name.");
			document.projectfrm.client_name.focus();
			return false;
		} var name = /^[A-Za-z0-9 ]+$/;
		 if(!name.test(document.projectfrm.client_name.value)){
        alert ("Please enter the correct client name !!");
        document.projectfrm.client_name.focus();
        return false;
        } 
		/*var username = document.projectfrm.username.value;
        username = username.trim();
        if (username == '') {
        alert("Please enter User Name.");
        document.projectfrm.username.focus();
        return false;
		} var name = /^[A-Za-z ]+$/;
		 if(!name.test(document.projectfrm.username.value)){
        alert ("Please enter the Correct User Name !!");
        document.projectfrm.username.focus();
        return false;
        }   */
    }
	</script>