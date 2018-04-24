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
        . ' ON (hr.id=hmp.id)'
        . ' WHERE hr.id='.$sess_user_id);
$row = $db->fetchRow($rs);
$citizenship            = $row['country'];
$livingin               = $row['livingin'];
$nativestate            = $row['state'];
$city                   = $row['city'];
?>
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

<form name="locationinfo" method="post" action="locationinfo_update.php" onsubmit=" return validation();">

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
                            echo createDropDownForCountries($db, $citizenship);
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
		</td>
		</tr>
							
		</table>
