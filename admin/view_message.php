<?php
include "config.php";
include "check_login.php";


if(isset($_REQUEST['message_id']) && $_REQUEST['message_id'] != ""  ) {

    mysqli_query($link, "update hum_inbox set message='".$_REQUEST['message']."'  where message_id='".$_REQUEST['message_id']."'");
    $update_msg = "Message update successfully.";
} else {
    $errmessage = "Unable to edit status.";
}
if(isset($_REQUEST['del_id']) && $_REQUEST['del_id'] != "") {
        $del_sql = "Delete from hum_inbox where message_id=".$_REQUEST['del_id'];
        mysqli_query($link, $del_sql);
         $delete_msg = "Member deleted successfully.";
} else {
    $errmessage = "Unable to delete.";
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">

<HTML>
    <HEAD>
        <TITLE>Message List</TITLE>
        <META content="MSHTML 6.00.3790.118" name=GENERATOR>
        <META content=FrontPage.Editor.Document name=ProgId>
        <META http-equiv=Content-Type content="text/html; charset=windows-1252">
        <LINK href="images/style_ie.css" type=text/css rel=stylesheet>
<script language="javascript" >
 function setDelete(id) {
        var member_del = confirm('Are you sure to delete?');
        if(member_del == true) {
            location.href = "view_message.php?del_id="+id;
            return true;
        }
    }

</script>
</HEAD>
<BODY>
<!-- MAIN TABLE -->
    <!-- HEADER TABLE
        <?php include("header.php"); ?> -->
		<p class="logo">Admin Panel</p>
    <!-- END HEADER RULE TABLE -->
<TABLE height="100%" cellSpacing=0 cellPadding=0 width="100%" border=0>
 <TR>
  <TD vAlign=top height="95%">
   <DIV class=WindowAlignment>
 <TABLE class=MaxWindowWidth cellSpacing=0 cellPadding=0 width="100%" border=0>
  <TR>
   <TD class=Margins>
 <TABLE cellSpacing=0 cellPadding=0 width="100%" border=0>
  <TR>
   <TD class=MainFrame><!-- TITLE BAR -->
 <TABLE cellSpacing=1 cellPadding=0 width="100%" border=0>
   <TR>
    <TD class=TitleBar width="100%"><? require("top_panel.php"); ?>
	 <!-- #include file="top_panel.asp" -->
	 </TD>
   </TR>
   <TR>
    <TD width="100%"><!-- /TITLE BAR -->
  <TABLE cellSpacing=0 cellPadding=0 width="100%" border=0>
   <TR>
    <TD height="19" align=left vAlign=top class=MenuBar><?php // include("top_menu.php"); ?></TD>
   </TR>
  </TABLE><!-- MENU -->
  <TABLE cellSpacing=0 cellPadding=0 width="100%" border=0>
   <TR>
    <TD class=Panel-B>
  <TABLE cellSpacing=0 cellPadding=0 width="100%" border=0>
    <TR>
     <TD class=VMenuBar vAlign=top width="10%">
          <!-- CUSTOM ADMIN MENU -->
          <? include("left_menu.php"); ?>
				<!-- CUSTOM ADMIN MENU  --></TD>
     <TD class=Panel-A>&nbsp;</TD>

     <TD class=Panel-C width="90%">
<form  name="form1" action="" method="post" >
 <TABLE cellSpacing=0 cellPadding=0 width="100%" border=0>
   <TR>
    <TD class=Buttonbar>
 <TABLE width="100%" border="0" cellPadding=0 cellSpacing=0>
  <TR vAlign=center>
    <TD width="85%" align="center" class=MenuSeparator>
 <?php if(isset($_REQUEST['msg']) && $_REQUEST['msg'] == 1) { ?>
<span class="AlertBar"><?php echo "member added successfully .";?> </span>
 <?php }
 if(isset($update_msg) && $update_msg != '') {?>
<span class="AlertBar"><?php echo $update_msg; ?> </span>
 <?php } 
 if(isset($delete_msg) && $delete_msg != '') {
  ?>
<span class="AlertBar"><?php echo $delete_msg; ?> </span>
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
                                <TD height="28" class="GroupLabel">Message List </TD>
                                </TR></TABLE>
                                <TABLE cellSpacing=0 cellPadding=0 width="100%" border=0>
                                <TR>
                                <TD class=TableBorder>
                                <TABLE cellSpacing=0 cellPadding=0 width="100%" border=0>
                                <TR>
                                    
                                    <TD width="10%" align="left" class=ColumnHead>Sl No. </TD>
                                    <TD width="15%" align="left" class=ColumnHead>Send by </TD>

									<TD width="15%" align="left" class=ColumnHead>Send to</TD>
									<TD width="40%" align="left" class=ColumnHead>Message</TD>
										<TD width="10%" align="left" class=ColumnHead>Date</TD>
                                    <TD width="10%" align="left" class=ColumnHead><span class="TableIcon"><span class="dataTableContent"></span></span>Delete<span class="Label"></span></TD>
									<TD width="10%" align="left" class=ColumnHead><span class="TableIcon"><span class="dataTableContent"></span></span>Edit<span class="Label"></span></TD>
                                </TR>
 <?php
$sql = mysqli_query($link, "select * from hum_inbox order by message_id desc");

                    /*
                    * 
                    *
                    */
                    $total_record = mysql_num_rows($sql);
                    $i = 0;
                    $show_record_no = 10;
                    $noOfPage = $total_record/$show_record_no;
					
                    if($total_record%$show_record_no != 0) {
                        $noOfPage = (int)$noOfPage+1;

                    }
                    if(isset($_REQUEST['showpage']) && $_REQUEST['showpage']!= "") {
                        $from = $_REQUEST['showpage']*$show_record_no-$show_record_no;

                        $page = $_REQUEST['showpage'];


                    } else {
                        $from = 0;
                        $page = 1;
                    }



   if(isset($_REQUEST['id']) && $_REQUEST['id'] != "" ) {
       }
    $sql = mysqli_query($link, "select * from hum_inbox order by message_id desc limit $from,$show_record_no");
    $cc = mysql_num_rows($sql);
    $i=1;
      if(mysql_num_rows($sql) > 0) {
    while($view_message = mysqli_fetch_assoc($sql)) {
     ?>
                                <TR class=TableRow height="30">
                                 <td height="22" align="center"><?php echo $i; ?></td>
								 <TD align="left" style="padding:10px;"><?php $sendby=$view_message['adminby'];
								$result = mysqli_query($link, "SELECT name FROM hum_registration where id='".$sendby."'");
							$admin = mysqli_fetch_array( $result );
								echo $admin['name']; ?></TD>
                          <TD align="left" style="padding:10px;"><?php 
								$sendto=$view_message['adminto'];
								$result = mysqli_query($link, "SELECT name FROM hum_registration where id='".$sendto."'");
							$adminto = mysqli_fetch_array( $result );
								echo $adminto['name']; ?></TD>
                          <TD align="left" style="padding:10px;">
						  <?php echo stripslashes($view_message['message']); ?></td>
						  <TD align="left" style="padding:10px;"><?php echo $view_message['date']; ?></td>
				               <TD align="left" style="padding:10px;" class="cursor"><span onClick="return setDelete('<?php echo $view_message['message_id']; ?>');"> Delete </span>
                                 </TD>
								 <TD align="left" style="padding:10px;" class="cursor">
								 
								 <a href="admin_edit_message.php?edit_id=<?php echo $view_message['message_id']; ?>"> Edit </a>
                                 </TD>
                                  </TR>
                            <?php
                                $i++;
                                }
                                }
                            ?>
							<TR>
                       <td><font face="arial" size="2">&nbsp;</font></td>
							  <td align="right" valign="top" colspan="5">  
							  <div class="pagination">
                    <?php if($total_record > $show_record_no) { ?>
                        <div>
							<?php
							if($page > 1) {
							?>
							<div style="float:left;">
                                <div class="prev">
                                    <a href="?showpage=<?php echo $page-1;?>">Previous</a>
                                </div>
							</div>
							<?php
							}
                            for($p = 1; $p<=$noOfPage; $p++) {
                                $activeLink = "class='inactive_page'";
                                if($p == $page) {
                                    $activeLink = "class='active_page'";
                                }
                                echo "<a href='?showpage=$p'><div $activeLink>".$p."</div></a>";
                            }
							if($page < $noOfPage) {
							?>
							<div style="float:right;">
                                <div class="next">
                                    <a href="?showpage=<?php echo $page+1;?>">Next</a>
                                </div>
							</div>
							<?php
							}
							?>
						</div>
                    <?php } ?>
				</div>
                <?php /*************** End Pagination **************/ ?>
			
								</TD>
                             </TR>
                    
                        </TABLE></TD></TR>


                                </TABLE>
	</TD></TR>
	<tr><td>
	 </td></tr>
     </TABLE>
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
