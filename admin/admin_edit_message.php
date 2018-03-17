<?php
include "check_login.php";
include "config.php";


if(isset($_REQUEST['edit_id']) && $_REQUEST['edit_id'] != "") {
    $sql = mysqli_query($link, "select * from hum_inbox where message_id='".$_REQUEST['edit_id']."'");
    $cc = mysql_num_rows($sql);
    if($cc == 1) {
        $message_details = mysqli_fetch_assoc($sql);
        $message_id = $message_details['message_id'];
        $message = $message_details['message'];
    } else { ?>
<script type="text/javascript" language="javascript">
    alert("Invallid information ");
    window.open('view_message.php','_self');
</script>
    <?php
       // header("Location:message_list.php");
    }
}
 ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML><HEAD><TITLE>Edit message</TITLE>
<META content="MSHTML 6.00.3790.118" name=GENERATOR>
<META content=FrontPage.Editor.Document name=ProgId>
<META http-equiv=Content-Type content="text/html; charset=windows-1252">
<LINK href="images/style_ie.css" type=text/css rel=stylesheet>
<script type="text/javascript" src="js/jquery-1.6.4.min"></script>
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
  <TD class=header-rule vAlign=top width="100%"><IMG height=2 alt="" src="" width=1 border=0> </TD>
  </TR>
 </TBODY>
</TABLE><!-- END HEADER RULE TABLE --></TD></TR>
 <TR>
  <TD vAlign=top height="95%">
   <DIV class=WindowAlignment>
<TABLE class=MaxWindowWidth cellSpacing=0 cellPadding=0 width="100%" border=0>
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
 <TABLE cellSpacing=0 cellPadding=0 width="100%" border=0>
  <TBODY>
   <TR>
    <TD class=MenuBar vAlign=top align=left>
	<? include("top_menu.php"); ?></TD>
     </TR></TBODY></TABLE><!-- MENU -->

<TABLE cellSpacing=0 cellPadding=0 width="100%" border=0>
 <TBODY>
  <TR>
   <TD class=Panel-B>
    <TABLE cellSpacing=0 cellPadding=0 width="100%" border=0>
<TBODY>
 <TR>
  <TD class=VMenuBar vAlign=top width="10%">								<!-- CUSTOM ADMIN MENU -->
   <? include("left_menu.php"); ?>
		<!-- #include file="left_menu.asp" -->
		<!-- CUSTOM ADMIN MENU  --></TD>
        <TD class=Panel-A>&nbsp;</TD>
      <TD class=Panel-C width="90%">
       <form action="view_message.php" method="post"  name="form1" onSubmit="return check_form1();">
    <TABLE cellSpacing=0 cellPadding=0 width="100%" border=0>
                                      <TR>
                                        <TD class=Buttonbar>
                                        <TABLE width="100%" border="0" cellPadding=0 cellSpacing=0>
                                              <TR vAlign=center>
                                                <TD width="14%" height="6" class=ButtonbarButton >
												</TD>
                                                <TD width="87%" align="center" class=MenuSeparator>
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
                                <TD height="28" class="GroupLabel" align="center" style="font-size:12px;">Edit message</TD>
                                </TR></TABLE>
                                <TABLE cellSpacing=0 cellPadding=0 width="100%" border=0>
                                <TR>
                                <TD  class=TableBorder>
                                <TABLE cellSpacing=0 cellPadding=0 width="100%" border=0>
                                <TR>
		<table class="homtxt" cellspacing=0 cellpadding=0 width="100%" height="250" border=0>
        <tbody>
		<tr>
         <td width="38%" align=right  class="homtxt style1"><font style="margin-right:10px;" color=#ff0000></font></td>
         </tr>
          <tr class="homtxt">
           <td align="center">
           <table cellspacing=0 cellpadding=0 border=0>
             <tr>
               <td class="homtxt"><b>Message  :</b>&nbsp;&nbsp;&nbsp;</td>
                <td align="right"class="homtxt">
                <input type="hidden" name="message_id" id="message_id" value="<?php echo $message_id;?>">
                <textarea style="height:100px; width:250px" name="message"><?php echo stripslashes($message); ?></textarea></td></tr>
              <tr>
               <td colspan="2" height="10"></td>
              </tr>
			<tr>
             <td height="25"></td></tr>
			  <tr><td colspan="2" align="center" >
			  <input name="Submit" type="submit" class="Button"  onMouseOver="this.className='Button-Focus'" onMouseOut="this.className='Button'" style="width:80" value="Update">
        &nbsp;&nbsp;
               <input name="button" type="button" class="Button" onClick="window.open('view_message.php','_self');" onMouseOver="this.className='Button-Focus'" onMouseOut="this.className='Button'" style="width:80" value="Cancel">
</td>
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
     </td>
	</tr>
    </tbody>
  </table>
  </TR>
   </TABLE></TD></TR>
</TABLE></TD></TR>
	<tr><td>
<!--  <INPUT name="delete" class="Button"  onmouseout="this.className='Button'" type="submit" value="Delete Selected"  onmouseover="this.className='Button-Focus'"
 onClick="return setDelete('<?php echo $cc;?>');"  >-->
 <!-- onclick="javascript: if (confirm('Are you sure?'))window.open('logout.php','_self');"-->
    </TD></TR>
    </TABLE></td></tr>
    </TABLE></form>
  <!-- BOTTOM BUTTONS -->
   <!-- /BOTTOM BUTTONS --></TD>
  </TR></TABLE></TD></TR></TABLE></TD></TR></TABLE><!-- PAGE SCRIPT -->
<!-- /PAGE SCRIPT --><!-- /***** -->
</TD></TR></TABLE>
</TD></TR></TABLE>
</DIV>
<!-- CUSTOM FOOTER -->
<TR><TD vAlign="bottom" height="2%" width="100%">
<? include("footer.php"); ?>
<!-- #include file="footer.asp" -->
</td></TR><!-- CUSTOM FOOTER -->
</TABLE>

<script type="text/javascript">
function check_form1()
	{
        var message = document.form1.message.value;
        message = message.trim();
		if (message == '') {
			alert("Please enter message.");
			document.form1.message.focus();
			return false;
		} var name = /^[A-Za-z ]+$/;
		 if(!name.test(document.form1.message.value)){
        alert ("Please enter correct message  !!");
        document.form1.message.focus();
        return false;
        }        
        //return true;

	</script>