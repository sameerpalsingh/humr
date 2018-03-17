<?php
include "config.php";
include "check_login.php";
if(isset($_REQUEST['del_id']) && $_REQUEST['del_id'] != "") {
        $del_sql = "Delete from hum_registration where id=".$_REQUEST['del_id'];
        mysqli_query($link, $del_sql);
         $delete_msg = "Member deleted successfully.";
} else {
    $errmessage = "Unable to delete.";
}
if(isset($_REQUEST['act_id']) && $_REQUEST['act_id'] != "" ) {
    mysqli_query($link, "update hum_registration set status='1'  where id='".$_REQUEST['act_id']."'");
    $update_msg = "Status activate successfully.";
} else {
    $errmessage = "Unable to delete.";
}
if(isset($_REQUEST['dea_id']) && $_REQUEST['dea_id'] != "" ) {
    mysqli_query($link, "update hum_registration set status='0'  where id='".$_REQUEST['dea_id']."'");
    $update_msg = "Status activate successfully.";
} else {
    $errmessage = "Unable to deactivate status.";
}

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">

<HTML>
    <HEAD>
        <TITLE>Member List</TITLE>
        <META content="MSHTML 6.00.3790.118" name=GENERATOR>
        <META content=FrontPage.Editor.Document name=ProgId>
        <META http-equiv=Content-Type content="text/html; charset=windows-1252">
        <LINK href="images/style_ie.css" type=text/css rel=stylesheet>
<script language="javascript" >
 function setDelete(id) {
        var member_del = confirm('Are you sure to delete?');
        if(member_del == true) {
            location.href = "view_members.php?del_id="+id;
            return true;
        }
    }
 function setActivate(id) {
        var member_act = confirm('Are you sure to activate?');
        if(member_act == true) {
            location.href = "view_members.php?act_id="+id;
            return true;
        }
    }
	function setDeactive(id) {
        var member_dea = confirm('Are you sure to deactivate?');
        if(member_dea == true) {
            location.href = "view_members.php?dea_id="+id;
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
                              <?php if(isset($update_msg) && $update_msg!='') { ?>
                               <span class="AlertBar"><?php echo $update_msg;?> </span> 

                                <?php } 
                                 if(isset($delete_msg) && $delete_msg != '') { ?>
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
								 <TD height="28" class=""> </TD>
                                <TD height="28" class="GroupLabel">Members List </TD>
                                </TR></TABLE>
                                <TABLE cellSpacing=0 cellPadding=0 width="100%" border=0>
                                <TR>
                                <TD class=TableBorder>
                                <TABLE cellSpacing=0 cellPadding=0 width="100%" border=0>
                                <TR>
                                    
                                    <TD width="8%" align="center" class=ColumnHead>Sl No.</TD>
									<TD width="10%" colspan="2" align="center" class=ColumnHead>Status</TD>

                                    <TD width="16%" align="left" class=ColumnHead>Member Name </TD>

									<TD width="5%" align="left" class=ColumnHead>Gender</TD><TD width="15%" align="left" class=ColumnHead>UserId</TD>
                                    <TD width="15%" align="left" class=ColumnHead>Password</TD>
                                    <TD width="15%" align="left" class=ColumnHead>EmailId</TD>
									<TD width="10%" align="left" class=ColumnHead>Joining Date</TD>
										<!--<TD width="10%" align="left" class=ColumnHead>Membership</TD>-->
                                    <TD width="10%" align="left" class=ColumnHead><span class="TableIcon"><span class="dataTableContent"></span></span>Delete<span class="Label"></span></TD>
									<TD width="10%" align="left" class=ColumnHead><span class="TableIcon"><span class="dataTableContent"></span></span>Edit<span class="Label"></span></TD>
                                </TR>
                              <?php
							  $sql = mysqli_query($link, "select * from hum_registration order by id desc");

                    /*
                    * 
                    *
                    */
                    $total_record = mysql_num_rows($sql);
                    $i = 0;
                    $show_record_no = 6;
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
                                $sql = mysqli_query($link, "select * from hum_registration where membership='1' order by id desc limit $from,$show_record_no");
                                $cc = mysql_num_rows($sql);
                                $i=1;
                                if(mysql_num_rows($sql) > 0) {
                                while($view_member = mysqli_fetch_assoc($sql)) {
                            ?>
                                <TR class=TableRow height="30">
                                    
                                    <td height="22" align="center"><?php echo $i; ?></td>
									<TD align="center"  class="cursor"><?php $status=$view_member['status'];
										  if ($status =="1")
										  { ?>
										 <span onClick="return setDeactive('<?php echo $view_member['id']; ?>');"> <img src="images/icon_status_green.gif" title="Press For Deactivate Member"> </span>

										  <?php } ?>
										  <?php $status=$view_member['status'];
										  if ($status =="0")
										  { ?>
										 <span onClick="return setActivate('<?php echo $view_member['id']; ?>');"> <img src="images/status_green_light.gif" title="Press For Activate Member"> </span>
										 <?php } ?></td>
										 <TD align="center"  class="cursor"><?php $status=$view_member['status'];
										  if ($status =="1")
										  { ?>
										 <span onClick="return setDeactive('<?php echo $view_member['id']; ?>');"> <img src="images/status_red_light.gif" title="Press For Deactivate Member"> </span>

										  <?php } ?>
										  <?php $status=$view_member['status'];
										  if ($status =="0")
										  { ?>
										 <span onClick="return setActivate('<?php echo $view_member['id']; ?>');"> <img src="images/status_red.gif" title="Press For Activate Member"> </span>
										 <?php } ?></td>
                                    <TD align="left" style="padding:10px;"><a href="admin_edit_member.php?id=<?php echo $view_member['id']; ?>"><?php echo $view_member['name']; ?></a></TD>

									<TD align="left" style="padding:10px;"><?php echo $view_member['gender']; ?></TD>
                                    <TD align="left" style="padding:10px;"><?php echo $view_member['loginid']; ?></TD>
                                    <TD align="left" style="padding:10px;"><?php echo $view_member['password']; ?></TD>
                                    <TD align="left" style="padding:10px;"><?php echo $view_member['emailid']; ?></td>
									<TD align="left" style="padding:10px;"><?php echo $view_member['joiningdate']; ?>
                                    </TD>
									<!--<TD align="left" style="padding:10px;">&nbsp;</TD>-->
                                    <TD align="left" style="padding:10px;" class="cursor"><span onClick="return setDelete('<?php echo $view_member['id']; ?>');"> Delete </span>
                                 </TD>
								 <TD align="left" style="padding:10px;" ><a href="admin_edit_member.php?id=<?php echo $view_member['id']; ?>"> Edit </a>
                                 </TD>
                                  </TR>
                            <?php
                                $i++;
                                }
                                }
                            ?>
							<!--<tr><td></td><td align="center"><?php /*************** Start Pagination **************/ ?>
                    
                    <?php if($total_record > $show_record_no) { ?>
                        
<?php
if($page > 1) {
?>
							
                                    <a href="?showpage=<?php echo $page-1;?>">Previous</a>
                            
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
<a href="?showpage=<?php echo $page+1;?>">Next</a>

<?php
}
?>
<?php } ?>

</td></tr>-->
		
                    
                    <?php if($total_record > $show_record_no) { ?>
					<TR>
                       <td><font face="arial" size="2">&nbsp;</font></td>
							  <td align="right" valign="top" colspan="9">  
							  <div class="pagination">
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
                    
				</div>
                <?php /*************** End Pagination **************/ ?>
			</div>
			
								</TD>
                             </TR>
                            <?php } ?>
                                     
                        </TABLE></TD></TR>


                                </TABLE></TD></TR>
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
