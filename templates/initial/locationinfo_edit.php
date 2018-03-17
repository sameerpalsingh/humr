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

$rs = $db->executeQuery('SELECT * FROM hum_registration,hum_members_profile WHERE hum_registration.id=hum_members_profile.id');


//$rs = $db->executeQuery('SELECT * FROM hum_registration WHERE id='.$sess_user_id);
$row = $db->fetchRow($rs);


$citizenship            = $row['livingin'];
$livingin               = $row['country'];
$nativestate            = $row['state'];
$city                   = $row['city'];
?>

<html>
<table>
<tr>
<td>
<img src="images/location-info.gif" alt="" height="30"/></td>  </tr>
  <tr>
                            <td><font class="text">Citizenship</font></td>
                            <td colspan="3"><font class="text"></font>
                            <!--<select name="citizenship" disabled="disabled">
                            <option value="0" selected="selected">Select One</option>
                            <?php
                            echo createDropDownForCountries($db, $livingin);
                            ?>
                            </select>
                            </font>-->
							<?php
							echo $cont['country'];
							?>
							</td>
                            </tr>
                            <tr>
                            <td><font class="text">Country Living in</font></td>
                            <td colspan="3"><font class="text"></font>
                            <!--<select style="font-size: 9pt; " name="livingin" disabled="disabled">
                            <option value="0" selected="selected">Select One</option>
                            <?php
                            echo createDropDownForCountries($db, $livingin);
                            ?>
                            </select>
                            </font>-->
							<?php
							echo $cont['country'];
							?>
							</td>
                            </tr>
                            <tr>
                            <td><font class="text">Native State</font></td>
                            <td colspan="3">
                            <!--<select style="font-size: 9pt;" name="nativestate" disabled="disabled">
                            <option value="0" selected="selected">Select One</option>
                            <?php
                            echo createDropDownForState($db, $nativestate);
                            ?>
                            </select>-->
							<?php
							echo $stat['state'];
							?>
                            </td>
                            </tr>
                            <tr>
                            <td><font class="text">Residing City</font></td>
                            <td colspan="3"><!--<select style="font-size: 9pt;" name="residingcity" disabled="disabled">
                            <option value="0">Select One</option>
                            <?php
                            echo createDropDownForCities($db, $city);
                            ?>
                            </select>-->
							<?php
							echo $citi['city'];
							?>
							</td>
                            </tr>
                            <tr>
                            <td>&nbsp;</td>
                            </tr></table>
</html>