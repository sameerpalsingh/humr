<?php
include("includes/application_top.php");

//checking the username with password

$db = new sql_db;

if (isset($messages) && count($messages) > 0) {
    $message = "Note : <br>";
    foreach ($messages as $value) {
        $message.= $value."<br>";
    }
}

//$sess_user_name = $_SESSION['sess_user_name'];
//$sess_user_id = (int)$_SESSION['sess_user_id'];
$id=$_REQUEST['id'];
$err_message = "";
$message = "";

$rs = $db->executeQuery("SELECT * FROM hum_registration,hum_members_profile WHERE hum_registration.id='$id' and hum_members_profile.user_id='$id'");


//$rs = $db->executeQuery('SELECT * FROM hum_registration WHERE id='.$sess_user_id);
$row = $db->fetchRow($rs);


//$citizenship            = $row['livingin'];
$livingin               = $row['country'];
$nativestate            = $row['state'];
$city                   = $row['city'];
?>


<html>
<head>
<script type="java/Script">
function validation(){

	if (document.locationinfo.citizenship.selectedIndex == 0){
        alert ("Please select your citizenship !!");
        document.locationinfo.citizenship.focus();
        return false;
    }
   else if (document.locationinfo.livingin.selectedIndex == 0){
        alert ("Please select country living in !!");
        document.locationinfo.livingin.focus();
        return false;
    }
	 else if (document.locationinfo.nativestate.selectedIndex == 0){
        alert ("Please enter your State !!");
        document.locationinfo.nativestate.focus();
        return false;
    }
	 else if (document.locationinfo.residingcity.selectedIndex == 0){
        alert ("Please enter your City !!");
        document.locationinfo.residingcity.focus();
        return false;
    }
}
</script>
</head>

<form name="locationinfo" method="post" action="locationinfo_update.php?id=<?php echo $id; ?>" onsubmit=" return validation();">

<table>
<tr>
<td>
<img src="images/location-info.gif" alt="" height="30"/></td>  </tr>
 <tr>
						<td>
						&nbsp;
						</td>
						</tr>
  <tr>
                            <td><font class="text">Citizenship</font></td>
                            <td colspan="3"><font class="text"></font>
                            <select name="citizenship" style="font-size: 9pt; width:150px;">
                            <option value="0" selected="selected">Select One</option>
                            <?php
                            echo createDropDownForCountries($db, $livingin);
                            ?>
                            </select>
                            </font>
							
							</td>
                            </tr>
							<tr>
							<td height=7px;></td>
							</tr>
                            <tr>
                            <td><font class="text">Country Living in</font></td>
                            <td colspan="3"><font class="text"></font>
                            <select style="font-size: 9pt; width:150px;" name="livingin">
                            <option value="0" selected="selected">Select One</option>
                            <?php
                            echo createDropDownForCountries($db, $livingin);
                            ?>
                            </select>
                            </font>
							
							</td>
                            </tr>
							<tr>
							<td height=7px;>
							</td>
							</tr>
                            <tr>
                            <td><font class="text">Native State</font></td>
                            <td colspan="3">
                            <select style="font-size: 9pt; width:150px;" name="nativestate">
                            <option value="0" selected="selected">Select One</option>
                            <?php
                            echo createDropDownForState($db, $nativestate);
                            ?>
                            </select>
							
                            </td>
                            </tr>
							<tr>
							<td height=7px;>
							</td>
							</tr>
                            <tr>
                            <td><font class="text">Residing City</font></td>
                            <td colspan="3">
							<select style="font-size: 9pt; width:150px;" name="residingcity">
                            <option value="0">Select One</option>
                            <?php
                            echo createDropDownForCities($db, $city);
                            ?>
                            </select>
							</td>
                            </tr>
                            <tr>
                           
                            </tr>
							<tr>
						    <td>&nbsp;</td>
						  </tr>
						  <tr>

		<td></td>
		<td>
		 <input type="image" src="images/submit.gif" title="Click To Update" width="76" height="22" border="0" />
		&nbsp;
		<!--<input type="submit" id="cancel" value="Cancel" onclick="tb_remove()">--></td>
		</tr>
							
		</table>
</html>