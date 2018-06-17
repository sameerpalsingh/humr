<?php
include "check_login.php";
require "config.php";

$gender       = isset($_GET['gender'])?$gender=$_GET['gender']:$gender='';
?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">

<HTML><HEAD><TITLE>Settings</TITLE>


<META http-equiv=Content-Type content="text/html; charset=windows-1252"><LINK
href="images/style_ie.css" type=text/css rel=stylesheet><LINK
href="images/style_ie.css" type=text/css rel=stylesheet>
<LINK href="images/style_ie.css" type=text/css rel=stylesheet>
<link href="css/calender.css" type="text/css" rel="stylesheet">
<LINK href="htmlarea/style_ie.css" type=text/css rel=stylesheet>
<script language="javascript" type="text/javascript" src="images/datetimepicker.js">
</script>
<script type="text/javascript" src="js/calender.js"></script>
<script type="text/javascript" src="js/jquery-1.6.4.min"></script>

</HEAD>
<BODY><!-- MAIN TABLE -->
<TABLE height="100%" cellSpacing=0 cellPadding=0 width="100%" border=0>
  <TBODY>
  <TR>
    <TD vAlign=top height="3%"><!-- HEADER TABLE --><!-- HEADER TABLE -->
      <!-- END HEADER TABLE -->
	 <!-- <?php include("header.php"); ?>-->
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
					  </TD>
                    </TR>
                    <TR>
                      <TD width="100%"><!-- /TITLE BAR -->
                        <TABLE cellSpacing=0 cellPadding=0 width="100%"
border=0>
                          <TBODY>
                          <TR>
                            <TD class=MenuBar vAlign=top align=left>
							<?php include("top_menu.php"); ?>
											</TD>
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
                                <?php include("left_menu.php"); ?>


								<!-- CUSTOM ADMIN MENU  --></TD>
                                <TD class=Panel-A>&nbsp;</TD>
                                <TD width="90%" align="center" valign="middle" class=Panel-C><!-- TOP BUTTONS -->                                <!-- /TOP BUTTONS -->                                <!-- BOTTOM BUTTONS -->
                                <form action="search_submit.php" method="post" name="searchfrm" onSubmit="return check_form();" >
                                <TABLE cellSpacing=0 cellPadding=0 width="92%" border=0>

								<tr><td>&nbsp;</td></tr>
                                <TR>
                                <TD height="28" class="GroupLabel" align="center" style="font-size:12px;">Admin Search</TD>
                                </TR></TABLE>
                                <TABLE cellSpacing=0 cellPadding=0 width="92%" border=0>
                                <TR>
                                <TD  class=TableBorder>
                                <TABLE cellSpacing=0 cellPadding=0 width="100%" border=0>
                                <tr class="homtxt">
                                 <td align="center">
                                  <table cellspacing=0 cellpadding=0 border=0>
<tr><td>&nbsp;</td></tr>
									<tr>
									<td ><strong>Member registered Within:&nbsp;&nbsp;&nbsp;</strong></td>
									<td><input name="date" style="width:80"  type="text" readonly="readonly" value="" id="date"/>
									<img src="images/DatePicker_icon.gif"  onclick="displayDatePicker('date', this,'ymd');") alt=""><strong>&nbsp;&nbsp;&nbsp;To&nbsp;&nbsp;&nbsp;</strong>
									<input name="till_date" type="text" style="width:80" readonly="readonly" value="" id="till_date" />
									<img src="images/DatePicker_icon.gif" onclick="displayDatePicker('till_date', this,'ymd');") alt="">&nbsp;<span class="homtxt style1"> </td>

									</tr>
									<tr>
													<td height="25"></td></tr>
									<tr>
									<td><strong>Membership Type:</strong></td><td><select  name="membership_type" style="width:133">
									<option value="">Membership Type</option>
									 <option value="0">Free Member</option>
									<option value="1">Paid Member</option>
									</select></td></tr>

									<tr>
													<td height="25"></td></tr>
									<tr>
									<td><strong>Member Status:</strong></td><td><select  name="member_status" style="width:133">
									<option value="">Member Status</option>
									 <option value="1">Active</option>
									<option value="0">Inactive</option>
									</select></td></tr>

									<tr>
													<td height="25"></td></tr>
									<tr>
									<td><strong>User ID:</strong></td><td><input type="text" style="width:133" id="userid" name="userid" /></td></tr>

									<tr>
													<td height="25"></td></tr>
									<tr>
									<td><strong>Gender:</strong></td><td><select  name="gender" style="width:133">
									<option value="" >Gender</option>
									 <option value="M" <?php echo ($gender=='M')?'selected':''; ?>>Male</option>
                          <option value="F" <?php echo ($gender=='F')?'selected':''; ?>>Female</option>
									</select></td></tr>


													<tr>
													<td height="25"></td></tr>
													<tr><td colspan="7" align="center" ><input type='hidden' name='SearchProfile' value="1" /><input name="btnSubmit" type="submit" class="Button" onMouseOver="this.className='Button-Focus'" onMouseOut="this.className='Button'" style="width:80" value="Search">
                                            
                                               </td>
                                                                                                                   </tr>
                                                         </table>
														 </form>
														 </td>
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
                                                                                  <!-- /BOTTOM BUTTONS --></TD>
</TR></TBODY></TABLE></TD></TR></TBODY></TABLE></TD></TR></TBODY></TABLE><!-- PAGE SCRIPT -->
<!-- /PAGE SCRIPT --><!-- /***** --></TD></TR></TBODY></TABLE>
</TD></TR></TBODY></TABLE>
</DIV>
<!-- CUSTOM FOOTER -->
<TR><TD vAlign="bottom" height="2%" width="100%">
<?php include("footer.php"); ?>
</td></TR><!-- CUSTOM FOOTER -->
</TBODY></TABLE>
</body>
<!--<script type="text/javascript">



function check_form() {
	  var datename = document.searchfrm.date.value;
        datename = datename.trim();
        if (datename == '') {
        alert("Please select from date.");
        document.search.date.focus();
        return false;
		}
		var datename = document.searchfrm.till_date.value;
        datename = datename.trim();
        if (datename == '') {
        alert("Please select till date.");
        document.searchfrm.till_date.focus();
        return false;
		}
		if(document.searchfrm.membership_type.selectedIndex == 0) {
            alert("Please select membership type.");
			document.searchfrm.membership_type.focus();
			return false;
     }
	 if(document.searchfrm.member_status.selectedIndex == 0) {
            alert("Please select member status.");
			document.searchfrm.member_status.focus();
			return false;
     }
	 if(document.searchfrm.userid.value=="")
		{
			alert("Please enter UserId.");
			document.searchfrm.userid.focus();
			return false;
		}
	 if(document.searchfrm.gender.selectedIndex == 0) {
            alert("Please select gender.");
			document.searchfrm.gender.focus();
			return false;
     }

   }

	</script>-->
	</html>
