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

$highestdegree		 = $row['highestdegree'];
//$detaileducation       = $row['detaileducation'];
$workarea                = $row['workarea'];
$workstatus              = $row['work_status'];
$educational_background  = $row['educational_background'];
$professional_background = $row['professional_background'];
$annualincome            = $row['annualincome'];
?>
<head>
<script type="text/javascript">
<!--
function login_validate3() {
    if(document.educationalinfo.educational_background.value == ""){
        alert ("Please write about your educational background");
        document.educationalinfo.educational_background.focus();
        return false;
    } else if(document.educationalinfo.highestdegree.selectedIndex == 0) {
        alert ("Please select your highest degree");
        document.educationalinfo.highestdegree.focus();
        return false;
    } else if(document.educationalinfo.professional_background.value == ""){
        alert ("Please write about your professional background");
        document.educationalinfo.professional_background.focus();
        return false;
    } else if(document.educationalinfo.workarea.selectedIndex == 0) {
        alert ("Please select your workarea");
        document.educationalinfo.workarea.focus();
        return false;
    }
    if(document.educationalinfo.annualincome.selectedIndex == 0) {
        alert ("Please select your annual income");
        document.educationalinfo.annualincome.focus();
        return false;
    }
}
//-->
</script>
</head>



<form name="educationalinfo" method="post"  onsubmit="return login_validate3()" action="educationalinfo_update.php">

<table>
<tr><form method="post" action="">
	
</form>
<td ><img src="images/educational.gif" alt="" height="30" /><td> </tr>
 <tr>
						<td>
						
						</td>
						</tr>
                             <tr>
                            <td valign="top"><font class="text">Educational Background</font></td>
                            <td><font class="text">
                            <textarea style="height:90px; width:200px" name="educational_background"><?php echo stripslashes($educational_background); ?></textarea>
                            </font>
							</td>
                            </tr>
							<tr>

						
						

						<td height=7px;>
						

						</td>
						</tr>
							<tr>
                            <td><font class="text">Highest Degree</font></td>
                            <td>
							<select style="font-size: 9pt;width:207px;" name="highestdegree">
                            <option value="0">Select Highest Degree </option>
                            <?php
                            echo createDropDownForHighestdegree($db,$highestdegree);
                            ?>
                            </select>
							<!--<?php
							echo $degree['highestdegree'];
							?>-->
							</td>
                              
                            </tr>
							<tr>

						<td height=7px;>
						

						</td>
						</tr>
		
							<tr>
                            <td valign="top"><font class="text">Professional Background</font></td>
                            <td><font class="text">
                            <textarea style="height:90px; width:200px" name="professional_background"><?php echo stripslashes($professional_background); ?></textarea>
                            </font>
							</td>
                            </tr>

							<tr>
			<td height=7px;>
						

						</td>
						</tr>

						    <tr>
                            <td><font class="text">Work Area</font></td>
                            <td ><font class="text"></font>
                            <select style="font-size: 9pt; width:207px;s" name="workarea">
                            <option value="0">-Select Work Area-</option>
                            <?php
                             echo createDropDownForWorkarea($db, $workarea);
                            ?>
                            </select>
							
                            
							</td>
                            </tr>
							<tr>

						<td height=7px;>
						

						</td>
						</tr>

						    <tr>
                            <td><font class="text">Work status</font></td>
                            <td ><font class="text"></font>
                            <select style="font-size: 9pt; width:207px;" name="work_status">

						    <?php
                            echo createDropDownForWorkStatus($db,$workstatus);
                            ?>
                              
                            </font>
							
							</td>
                            </tr>
                            <tr>
							<tr>

						<td height=7px;>
						

						</td>
						</tr>

						    <tr>
                            <td><font class="text">Annual Income</font></td>
                            <td ><font class="text"></font>
                            <select style="font-size: 9pt;width:207px;" name="annualincome">
                            <option value="0">- Select Your Income -</option>
                                <option value="1" <?php echo ($annualincome== 1)? 'selected' : '' ; ?> >No Income</option>
                                <option value="2" <?php echo ($annualincome== 2)? 'selected' : '' ; ?>>Under Rs.50,000</option>
                                <option value="3" <?php echo ($annualincome== 3)? 'selected' : '' ; ?>>Rs.50,001 - 1,00,000</option>
								 <option value="4" <?php echo ($annualincome== 4)? 'selected' : '' ; ?>>Rs.1,00,001 - 2,00,000</option>
                                <option value="5" <?php echo ($annualincome== 5)? 'selected' : '' ; ?>>Rs.2,00,001 - 3,00,000</option>
                                <option value="6"<?php echo ($annualincome== 6)? 'selected' : '' ; ?>>Rs.3,00,001 - 4,00,000</option>
								 <option value="7"<?php echo ($annualincome== 7)? 'selected' : '' ; ?>>Rs.4,00,001 - 5,00,000</option>
                                <option value="8"<?php echo ($annualincome== 8)? 'selected' : '' ; ?>>Rs.5,00,001 - 7,50,000</option>
                                <option value="9"<?php echo ($annualincome== 9)? 'selected' : '' ; ?>>Rs.7,50,001 - 10,00,000</option>
								<option value="10"<?php echo ($annualincome== 10)? 'selected' : '' ; ?>>Rs.10,00,001 - 15,00,000</option>
                                <option value="11"<?php echo ($annualincome== 11)? 'selected' : '' ; ?>>Rs.15,00,001 - 20,00,000</option>
                                <option value="12"<?php echo ($annualincome== 12)? 'selected' : '' ; ?>>Rs.20,00,001 - 25,00,000</option>
								<option value="13"<?php echo ($annualincome== 13)? 'selected' : '' ; ?>>Rs.25,00,001 and above</option>
								<!--<optgroup label="Income in US Dollars">
								<option value="14" <?php echo ($annualincome== 14)? 'selected' : '' ; ?>>Under $25,000</option>
                                <option value="15"<?php echo ($annualincome== 15)? 'selected' : '' ; ?>>$25,001 - 40,000</option>
								<option value="16"<?php echo ($annualincome== 16)? 'selected' : '' ; ?>>$40,001 - 60,000</option>
                                <option value="17"<?php echo ($annualincome== 17)? 'selected' : '' ; ?>>$60,001 - 80,000</option>
                                <option value="18"<?php echo ($annualincome== 18)? 'selected' : '' ; ?>>$80,001 - 100,000</option>
								<option value="19"<?php echo ($annualincome== 19)? 'selected' : '' ; ?>>$100,001 - 150,000</option>
                                <option value="20"<?php echo ($annualincome== 20)? 'selected' : '' ; ?><?php echo ($annualincome== 1)? 'selected' : '' ; ?>>$150,001 - 200,000</option>
								<option value="21"<?php echo ($annualincome== 21)? 'selected' : '' ; ?>>$200,001 and above</option>-->
                            </select>
                            <!--<?php
							echo displayincome($annualincome);
							?>-->
							</td>
                            </tr>
						  <tr>
						  <td>&nbsp;</td>
						  </tr>
						  <tr>

		<td>&nbsp;</td>
		<td>
		 <input type="image"src="images/submit.gif" title="Click To Update" width="76" height="22" border="0" />
		
		<!--<input type="submit" id="cancel" value="Cancel" onclick="tb_remove()">--></td>
		</tr>
</table>
</html>