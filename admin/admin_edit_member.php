<?php
include "check_login.php";
require "config.php";
include("includes/application_top.php");
$db = new sql_db();

//$sess_user_name = $_SESSION['sess_user_name'];
//$sess_user_id   = (int)$_SESSION['sess_user_id'];

 $id=$_REQUEST['id'];
$err_message = "";
$message = "";

$rs = $db->executeQuery("SELECT * FROM hum_registration,hum_members_profile WHERE hum_registration.id='$id' and hum_members_profile.user_id='$id'");


//$rs = $db->executeQuery('SELECT * FROM hum_registration WHERE id='.$sess_user_id);
$row = $db->fetchRow($rs);


$name					= $row['name'];
$userid					= $row['loginid'];
$password				= $row['password'];
$gender					= $row['gender'];
$dob					= $row['dob'];
$dobArr					= explode("-", $dob);
$maritalstatus			= $row['marital_status'];
$lookingfor				= $row['looking_for'];
$height					= $row['height'];
$bodytype				= $row['bodytype'];
$complexion				= $row['complexion'];
$weight					= $row['weight'];
$physicalstatus			= $row['challenged'];
$religion				= $row['religion'];
$caste					= $row['caste'];
$subcast				= $row['subcast'];
$gotra					= $row['gotra'];
$ancestralorigin		= $row['ancestralorigin'];
$nakshatra				= $row['nakshatra'];
$raasi					= $row['raasi'];
$mothertongue			= $row['mothertongue'];
$manglik				= $row['manglik'];
$language				=$row['languages'];
$highestdegree			= $row['highestdegree'];
//$detaileducation      = $row['detaileducation'];
$workarea               = $row['workarea'];
$workstatus             = $row['work_status'];
$educational_background =$row['educational_background'];
$professional_background=$row['professional_background'];
$annualincome           = $row['annualincome'];
$physical_status		=$row['physical_status'];
$diet					=$row['diet'];
$smoke					=$row['smoke'];
$drink					=$row['drink'];
//$citizenship            = $row['livingin'];
$livingin               = $row['country'];
$nativestate            = $row['state'];
$city                   = $row['city'];
$emailid                = $row['emailid'];
$contact_number         = $row['contact_number'];
$contact_address        = $row['contact_address'];
$bloodgroup             = $row['bloodgroup'];
$description            = $row['aboutyourself'];

/******************family**********************************/

$familyvalues			=$row['family_values'];
$familytype				=$row['family_type'];
$familystatus			=$row['family_status'];
$fatheroccupation		=$row['father_occupation'];
$motheroccupation		=$row['mother_occupation'];
$brother				=$row['brother'];
$sister					=$row['sister'];
$livewith				=$row['live_with_parents'];
$aboutfamily			=$row['about_family'];

/******************Desired Partner**********************************/

$p_age					=$row['partner_age'];
$p_status				=$row['partner_marital_status'];
$p_height				=$row['partner_height'];
$p_region				=$row['partner_state_region'];
$p_religion				=$row['partner_religion'];
$p_cast					=$row['partner_cast'];
$p_income				=$row['partner_annual_income'];
$p_desc					=$row['desired_partner'];

$pheight=explode('to',$p_height);
$heightfrom=$pheight[0];
$heightto=$pheight[1];


$height1=$db->executeQuery('SELECT height FROM hum_height WHERE id='.$heightfrom);
$pheightfrom = $db->fetchRow($height1);

$height2=$db->executeQuery('SELECT height FROM hum_height WHERE id='.$heightto);
$pheightto = $db->fetchRow($height2);


//

$highestdegree=$db->executeQuery('SELECT highestdegree FROM hum_highestdegree WHERE id='.$highestdegree);
$degree = $db->fetchRow($highestdegree);


$nakshatra=$db->executeQuery('SELECT nakshatra FROM hum_nakshatra WHERE id='.$nakshatra);
$nak = $db->fetchRow($nakshatra);




$height=$db->executeQuery('SELECT height FROM hum_height WHERE id='.$height);
$high = $db->fetchRow($height);

$bloodgroup=$db->executeQuery('SELECT bloodgroup FROM hum_bloodgroup WHERE id='.$bloodgroup);
$row = $db->fetchRow($bloodgroup);


$religion=$db->executeQuery('SELECT religion FROM hum_religion WHERE id='.$religion);
$rel = $db->fetchRow($religion);


$caste=$db->executeQuery('SELECT caste FROM hum_caste WHERE id='.$caste);
$cast = $db->fetchRow($caste);

$city=$db->executeQuery('SELECT city FROM hum_cities WHERE id='.$city);
$citi = $db->fetchRow($city);


$livingin=$db->executeQuery('SELECT country FROM hum_countries WHERE id='.$livingin);
$cont = $db->fetchRow($livingin);


$nativestate=$db->executeQuery('SELECT state FROM hum_state WHERE id='.$nativestate);
$stat = $db->fetchRow($nativestate);


$workarea=$db->executeQuery('SELECT workarea FROM hum_workarea WHERE id='.$workarea);
$work = $db->fetchRow($workarea);


$workstatus=$db->executeQuery('SELECT workstatus FROM hum_workstatus WHERE id='.$workstatus);
$status = $db->fetchRow($workstatus);


$weight=$db->executeQuery('SELECT weight FROM hum_weight WHERE id='.$weight);
$kg = $db->fetchRow($weight);

//$pic=$db->executeQuery('SELECT image_name_original_size FROM hum_members_images WHERE id='.$pic);
//$img = $db->fetchRow($pic);

$mothertongue=$db->executeQuery('SELECT mother_tongue FROM hum_mother_tongue WHERE id='.$mothertongue);
$tongue = $db->fetchRow($mothertongue);


$physical=$db->executeQuery('SELECT physicalstatus FROM hum_challenged WHERE id='.$physicalstatus);
$phy = $db->fetchRow($physical);


$sql_images = "SELECT image_name_100_size
               FROM hum_members_images,hum_registration
               WHERE hum_members_images.id=hum_registration.pic and hum_members_images.member_id='$id'";
$rs_images = $db->executeQuery($sql_images);



$contact=explode(',',$contact_number);
$mobile=$contact[0];
$landline=$contact[1];

$dateofbirth=explode('-',$dob);
$year=$dateofbirth[0];
$month=$dateofbirth[1];
$day=$dateofbirth[2];

//print_r($dobArr);
function getDayOfDOB($day)
{
    $output = "";
    for ($i=1; $i<=31; $i++) {
        $output.= "<option value='".$i."' ";
        if ($i == $day) {
            $output.= "selected";

        }
        $output.= ">".$i."</option>";
    }
    return $output;
}
//$month=$dobArr[0];
function getMonthOfDOB($month)
{
    $output = "";
    for ($i=1; $i<=12; $i++) {
        $output.= "<option value='".$i."' ";
        if ($i == $month) {
            $output.= "selected";
        }
        $output.= ">".$i."</option>";
    }
    return $output;
}

function getYearOfDOB($year)
{
    $output = "";
    for ($i=1960; $i<=1991; $i++) {
        $output.= "<option value='".$i."' ";
        if ($i == $year) {
            $output.= "selected";
        }
        $output.= ">".$i."</option>";
    }
    return $output;
}



?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML><HEAD><TITLE>Welcome</TITLE>
<META http-equiv=Content-Type content="text/html; charset=windows-1252">
<LINK href="htmlarea/style_ie.css" type=text/css rel=stylesheet>
<script language="javascript" type="text/javascript" src="images/datetimepicker.js">
</script>
</HEAD>
<BODY>
    <!-- HEADER TABLE -->
	<center><h1>Admin Panel</h1></center><!--<?php include("header.php"); ?>-->
    <!-- END HEADER RULE TABLE -->
<!-- MAIN TABLE -->
<TABLE height="100%" cellSpacing=0 cellPadding=0 width="100%" border=0>
  <TBODY>
  <TR>
    <TD vAlign=top height="3%">
<TABLE cellSpacing=0 cellPadding=0 width="100%" border=0>
        <TBODY>
        <TR>
          <TD class=header-rule vAlign=top width="100%"><IMG height=2 alt=""
            src="images/top.gif" width=1 border=0></TD></TR></TBODY></TABLE><!-- END HEADER RULE TABLE --><!-- END HEADER RULE TABLE --><!-- HEADER RULE TABLE -->
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
                      <TD class=TitleBar width="100%"><?php include("top_panel.php");?></TD>
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


                        <TABLE cellSpacing=0 cellPadding=0 width="100%"
border=0>
                          <TBODY>
                          <TR>
                            <TD class=Panel-B>
                              <TABLE cellSpacing=0 cellPadding=0 width="100%"
                              border=0>
                                <TBODY>
                                <TR>
                                <TD class=VMenuBar vAlign=top width="10%">								<!-- CUSTOM ADMIN MENU -->
                                <? include("left_menu.php"); ?>
								<!-- CUSTOM ADMIN MENU  --></TD>
                                <TD class=Panel-A>&nbsp;</TD>
                                <td class="Panel-C" width="90%">
                                  <table border="0" cellPadding="0" cellSpacing="0" width="100%">
                                    <tr>
                                      <td class="Panel-A">
                                        <form action="welcome.php"  method="post" name="form1" onSubmit="return check_form();">
                                        <table width="100%" height="510" border="0" cellPadding="0" cellSpacing="4">
										<?php include "edit_member.php"; ?>
                                                <!--  <table width="100%"  border="0" cellspacing="0" cellpadding="10">
                                          <tr>
                                            <td><table width="100%" height="200" border="0" cellpadding="0" cellspacing="4">
                                              <input name="addressid" type="hidden" value="1029">
                                              <tr>
                                        <TD height="28" class="GroupLabel" align="center" style="font-size:12">Assign Tasks</TD>
                                              </tr>
                                              <tr>
                                                        <td width="38%" align=right class="homtxt style1"><font color=#ff0000>* Required Information</font></td>
                                                      </tr>
                                              <tr>
                                                <td><table class="homtxt" cellspacing=0 cellpadding=0 width="100%" border=0>
                                                    <tbody>
                                                     
                                                      <tr class="homtxt">
                                                        <td align="center">
                                                        <table cellspacing=0 cellpadding=0 border=0>
                                                            <?php 
                                                           if (!isset($_GET['project_id'])) { ?>
                                                             <tr>
                                                               <td width="125"><strong>Project Name :
                                                               </strong></td>
																<td align="left" class="homtxt" >
                                                                <select name="project_name" style="width:180">
                                                                <option value="0">Please Select Project</option>
                                                                <?php
                                                                $sql = mysqli_query($link, "select *
from tbl_project p, tbl_assign a
where a.project_id=p.id
and a.user_id='$user_id'
");
                                                                while($project_details = mysqli_fetch_assoc($sql)) {
                                                                ?>
                                                                <option value="<?php echo $project_details['project_id']; ?>"><?php echo $project_details['project_name']; ?></option>
                                                                <?php
                                                                    }
                                                                ?>
																</select>
                                                               
																&nbsp;<span class="homtxt style1"><font color=#ff0000>*</font></span></td>
                                                              </tr>

                                                         <?php } ?>
                                                        <?php
                                                        if (isset($_GET['id'])) {
                                                            $sql = mysqli_query($link, "select * from tbl_project where user_id=".$_GET['project_name']);
                                                            echo '<input type=\'hidden\' name=\'project_name\' value="'.$_GET['project_id'].'" >';
                                                            $projectName = mysqli_fetch_assoc($sql);
                                                            if($projectName['project_name']) {
                                                                echo "<tr><td align='right'><strong>Project Name : </strong>&nbsp;&nbsp;&nbsp;</td><td>".$projectName['project_name']."</td></tr>";
                                                            }
                                                        }
                                                    ?>
                                                      <tr>
                                                            <td colspan="2" >&nbsp;</td>
                                                      </tr>
                                                            <tr>
                                                                <td  class="homtxt"><strong>Task Description : </strong>&nbsp;&nbsp;&nbsp;</td>
																<td class="homtxt"><textarea name="description" id="description" cols="5" rows="5" style="width: 180px;"></textarea>
																&nbsp;<span class="homtxt style1"width="100%"><font color=#ff0000>*</font></span></td> 
                                                             </tr>
                                                            <tr>
                                                        <td colspan="2" height="10">
                                                          </td>
                                                          </tr>
                                                     
                                                     <tr>
										         <td>&nbsp;</td>
                                                 <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                             <input name="btnSubmit" type="submit" class="Button" onMouseOver="this.className='Button-Focus'" onMouseOut="this.className='Button'" style="width:80" value="Submit">
                                             </td>
													  </tr>
                                                </td>
													  </tr>
                                                </table>


                                                  </td>
                                              </tr>
                                              </table></td>
                                          </tr>
                                        </table>
                                        <TR>

                               <TD class=Panel-A>
                                <TABLE cellSpacing=0 cellPadding=0 width="100%" border=0>
                                <TR>
                                <TD height="28" width="10%" class="GroupLabel">Task List </TD>
                                <TD width="90%" height="28" align="center" class="GroupLabel">
                                   <?php if(isset($_REQUEST['msg']) && $_REQUEST['msg'] == 1) { ?>
                                    <span class="AlertBars"><?php echo "Task added successfully .";?> </span>
                                   <?php } ?>
                                </TD>
                                </TR>
                                </TABLE>
                                <TABLE cellSpacing=0 cellPadding=0 width="100%" border=0>
                                <TR>
                                <TD class=TableBorder>
                                <TABLE cellSpacing=0 cellPadding=0 width="100%" border=0>
                                <TR>
                                    <TD width="6%" align="left" class=ColumnHead>S.No</TD>
                                    <TD width="20%" align="left" class=ColumnHead>Projects</TD>
                                    <TD width="50%" align="left" class=ColumnHead>Description</TD>
                                    <TD width="8%" align="left" class=ColumnHead>Start Time</TD>
                                    <TD width="8%" align="left" class=ColumnHead>End Time</TD>
                                    <TD width="8%" align="left" class=ColumnHead>Duration</TD>
                                </TR>
                            <?php
                                $last_date = date("Y-m-d")." 00:00:00";
                                $sql = mysqli_query($link, "SELECT tw.*,tp.project_name, timediff(tw.end_time, tw.start_time) as diff FROM tbl_project as tp , tbl_welcome as tw WHERE tp.id = tw.project_name and tw.start_time > '".$last_date."' and employee_id='".$_SESSION['id']."' ORDER BY tw.id DESC");
                                $cc = mysql_num_rows($sql);
                                $i=1;
                                if(mysql_num_rows($sql) > 0) {
                                while($welcomedetails = mysqli_fetch_assoc($sql)) {
                            ?>
                                <TR class=TableRow height="30">
                                    <td height="22" align="center">
                                    <?php echo $i; ?></td>
                                    <TD align="left" style="padding:10px;"><?php echo $welcomedetails['project_name']; ?></TD>
                                    <TD align="left" style="padding:10px;"><?php echo nl2br(stripslashes($welcomedetails['description'])); ?></a></TD>
                                    <td align="left" style="padding:10px;"><?php echo substr($welcomedetails['start_time'],10) ?></a></td>
                                    <td><?php echo substr($welcomedetails['end_time'],10) ?></td>
                                    <td><?php echo $welcomedetails['diff']; ?></td>
                                  </TR>
                            <?php
                                $i++;
                                }
                                }
                            ?>
                        </table></td></tr>-->
                        </TABLE></TD></TR>
                                          </table>
                                                        </form></td>
                                    </tr>
                                </table>                                  </td>
                                </TR></TBODY></TABLE></TD></TR></TBODY></TABLE></TD></TR></TBODY></TABLE><!-- PAGE SCRIPT -->
</form>
 <!-- /PAGE SCRIPT --><!-- /***** --></TD></TR></TBODY></TABLE>
</TD></TR></TBODY></TABLE>
</DIV>
<!-- CUSTOM FOOTER -->
<TR><TD vAlign="bottom" height="2%" width="100%">
<!--#include file="footer.asp"-->
</td></TR><!-- CUSTOM FOOTER -->
</TBODY></TABLE>
<script type="text/javascript">
function check_form() {
    if(document.form1.project_name.selectedIndex == 0) {
            alert("Please select project.");
			document.form1.project_name.focus();
			return false;
     } else if(document.form1.description.value == ""){
        alert ("Please write about project description!!");
        document.form1.description.focus();
        return false;
    }
   }
	</script>