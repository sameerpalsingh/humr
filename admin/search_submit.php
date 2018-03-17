<?php
include "config.php";
include "check_login.php";
include 'includes/application_top.php';
/*include 'includes/paging_class.php';
$objPaging = new Paging_Class();
$perpage   = $objPaging->recordsPerPage;
$startFrom = $objPaging->startFrom;
$num_forpaging = 0;*/
$db = new sql_db();

//print_r($_REQUEST);
 $gender       = isset($_POST['gender'])?$gender=$_POST['gender']:$gender='';
 $loginid       = isset($_POST['userid'])?$userid=$_POST['userid']:$userid='';
 $status       = isset($_POST['member_status'])?$member_status=$_POST['member_status']:$member_status='';
 $membership   =isset($_POST['membership_type'])?$membership_type=$_POST['membership_type']:$membership_type='';
 $date       = isset($_POST['date'])?$date=$_POST['date']:$date='';
 $till_date       = isset($_POST['till_date'])?$till_date=$_POST['till_date']:$till_date='';

function getQuickSearchResults($gender, $till_date, $date,$membership,$status, $loginid) {
    
	global $db;
	/*global $num_for_paging;
	global $startFrom;
	global $perpage;*/

    
    $sql = "SELECT *
            FROM hum_registration
            WHERE joiningdate between '$date' and '$till_date' ";
    
	if ($loginid != '') {
        $sql.= "AND loginid='$loginid' ";
    }
		

	if ($membership != '') {
        $sql.= "AND membership='$membership' ";
    }
	if ($status != '') {
        $sql.= "AND status='$status' ";
    }

	if ($gender != '') {
        $sql.= "AND gender='$gender' ";
    }//       $sql.= "AND  ";
$sql.= "ORDER BY id desc";
    return $db->executeQuery($sql);
}

if (isset($_POST['SearchProfile'])) {

    $rs = getQuickSearchResults($gender, $till_date, $date,$membership,$status, $loginid);
	//$row=$db->fetchRow($rs);
	//print_r ($row);
	//exit;
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
										<TD width="10%" align="left" class=ColumnHead>Membership</TD>
                                    <TD width="10%" align="left" class=ColumnHead><span class="TableIcon"><span class="dataTableContent"></span></span>Delete<span class="Label"></span></TD>
									<TD width="10%" align="left" class=ColumnHead><span class="TableIcon"><span class="dataTableContent"></span></span>Edit<span class="Label"></span></TD>
                                </TR>
                             
<?php
    $num = $db->numRows($rs);
    if ($num == 0) {
        echo '<tr><td colspan="6" class="content" align="center">Your search do not match our records. Please refine your search.</td></tr>';
    }
  for ($i=1; $i<=$num; $i++) {
      $row = $db->fetchRow($rs);

    ?>
                                <TR class=TableRow height="30">
                                    
                                    <td height="22" align="center"><?php echo $i; ?></td>
									<TD align="center"  class=""><?php $status=$row['status'];
										  if ($status =="1")
										  { ?>
										 <!--<span onClick="return setDeactive('<?php echo $row['id']; ?>');"> --><img src="images/icon_status_green.gif" title=""> <!--</span>-->

										  <?php } ?>
										  <?php $status=$row['status'];
										  if ($status =="0")
										  { ?>
										 <!--<span onClick="return setActivate('<?php echo $row['id']; ?>');"> --><img src="images/status_green_light.gif" title="Press For Activate Member"><!-- </span>-->
										 <?php } ?></td>
										 <TD align="center"  class=""><?php $status=$row['status'];
										  if ($status =="1")
										  { ?>
										 <!--<span onClick="return setDeactive('<?php echo $row['id']; ?>');"> --><img src="images/status_red_light.gif" title="Press For Deactivate Member"> <!--</span>-->

										  <?php } ?>
										  <?php $status=$row['status'];
										  if ($status =="0")
										  { ?>
										<!-- <span onClick="return setActivate('<?php echo $row['id']; ?>');">--> <img src="images/status_red.gif" title="Press For Activate Member"> <!--</span>-->
										 <?php } ?></td>
                                    <TD align="left" style="padding:10px;"><a href="admin_edit_member.php?id=<?php echo $row['id']; ?>"><?php echo $row['name']; ?></a></TD>

									<TD align="left" style="padding:10px;"><?php echo $row['gender']; ?></TD>
                                    <TD align="left" style="padding:10px;"><?php echo $row['loginid']; ?></TD>
                                    <TD align="left" style="padding:10px;"><?php echo $row['password']; ?></TD>
                                    <TD align="left" style="padding:10px;"><?php echo $row['emailid']; ?></td>
									<TD align="left" style="padding:10px;"><?php echo $row['joiningdate']; ?>
                                    </TD>
									<TD align="center" style="padding:10px;"><?php $membership=$row['membership'];
									if($membership=='1') {   echo "<img src='images/tick.gif'>";}
									else{   echo "<img src='images/cross.gif' >";}
									?></TD>
                                    <TD align="left" style="padding:10px;" class="cursor"><span onClick="return setDelete('<?php echo $row['id']; ?>');"> Delete </span>
                                 </TD>
								 <TD align="left" style="padding:10px;" ><a href="admin_edit_member.php?id=<?php echo $row['id']; ?>"> Edit </a>
                                 </TD>
                                  </TR>
                            <?php
                               
                                }
                            ?>
							
                                     
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
