<?php
include("includes/application_top.php");

//checking the username with password
if (!isset($_SESSION['sess_user_id'])) {
    header("location: login.php");
    exit;
}

$db = new sql_db;

if (isset($messages) && count($messages) > 0) {
    $message = "Note : <br>";
    foreach ($messages as $value) {
        $message.= $value."<br>";
    }
}

$sess_user_name = $_SESSION['sess_user_name'];
$sess_user_id = (int)$_SESSION['sess_user_id'];

$err_message = "";
$message = "";

$rs = $db->executeQuery('SELECT * FROM hum_registration hr'
        . ' LEFT JOIN'
        . ' hum_members_profile hmp'
        . ' ON (hr.id=hmp.user_id)'
        . ' WHERE hr.id='.$sess_user_id);

$row = $db->fetchRow($rs);

$physicalstatus	= $row['challenged'];
$bloodgroup     = $row['bloodgroup'];
$description    = $row['aboutyourself'];

?>


<html>
<head>
<script type="java/script">
function validate()
{
  if(document.otherinfo.physicalstatus.selectedIndex == 0){
        alert ("Please select your Physical Status");
        document.otherinfo.physicalstatus.focus();
        return false;
    }
  
  else if(document.otherinfo.bloodgroup.selectedIndex == 0){
        alert ("Please select your Blood Group");
        document.otherinfo.bloodgroup.focus();
        return false;
    }
	else if(document.otherinfo.description.value ==""){
        alert ("Please enter your profile description");
        document.otherinfo.description.focus();
        return false;
    }
}
</script>
</head>
<form name="otherinfo" method="post" action="otherinfo_update.php" onsubmit="return validate();">

<table>
<tr>
<td>
<img src="images/other-info.gif" alt="" height="30"/></td>  </tr>
 <tr>
						<td>
						&nbsp;
						</td>
						</tr>
                        <tr>
                        <td><font class="text">Physical Status</font></td>
                        <td><font class="text"></font>
                        <select
                        style="font-size: 9pt; width:250px; font-family: arial, verdana, sans-serif" name="physicalstatus">
                        <option value="0" selected="selected">-Select any one-</option>
                        <option value="1" <?php echo ($physicalstatus== 1)? 'selected' : '' ; ?>>None</option>
                        <option value="2" <?php echo ($physicalstatus == 2)? 'selected' : '' ; ?>>Physically Handicapped from birth</option>
                        <option value="3" <?php echo ($physicalstatus == 3)? 'selected' : '' ; ?>>Physically Handicapped due to accident</option>
                        <option value="4"<?php echo  ($physicalstatus == 4)? 'selected' : '' ; ?>>Mentally Challenged from birth</option>
                        <option value="5" <?php echo ($physicalstatus == 5)? 'selected' : '' ; ?>>Mentally Challenged due to accident</option>
                        </select>
						</td>
                        </tr>
						<tr>
						<td height=7px;>
						</td>
						</tr>
                        <tr>
                        <td><font class="text">Blood Group</font></td>
                        <td colspan="3"><font class="text"></font>
                        <select style="font-size: 9pt; width:250px" name="bloodgroup">
                        <option value="0">- Select Your Blood Group -</option>

                        <?php
                        echo createDropDownForBloodgroup($db,$bloodgroup);
                        ?>
                        </select>
                            
						</td>
                        </tr>
						<tr>
						<td height=7px;>
						</td>
						</tr>
                        <tr>
                        <td valign="top"><font class="text">Profile Description</font></td>
                        <td colspan="3"><font class="text">
                        <textarea style="height:100px; width:250px" name="description"><?php echo stripslashes($description); ?></textarea>
                        </font></td>
                        </tr>
						<tr>
						<td height=15px;></td>
						</tr>
						<tr>

<td>&nbsp;</td>
<td>
 <input type="image"src="images/submit.gif" title="Click To Update" width="76" height="22" border="0" />
&nbsp;
<!--<input type="submit" id="cancel" value="Cancel" onclick="tb_remove()">--></td>
</tr>
</table>
</html>